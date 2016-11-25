<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
namespace app\Controller;



use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 */
class AppController extends Controller {

    public $uses = array('Game', 'Invite', 'Goal', 'Team', 'Player', 'PlayersTeam', 'Rating');

    public $components = array('Session');
    public $helpers = array('Js' => array('Jquery'));


    /**
     * initialize method
     *
     * @return none
     */
    public function initialize()
    {
        $this->loadModel('Games');
        $this->loadModel('Players');
        $this->loadModel('Ratings');
        $this->loadModel('Goals');

        $tristate = $this->Players->winLose(20);

        //setup variables for the sidebar
        $this->set([
            'tristate' => $tristate,
            'nGames' => $this->Games->count(),
            'nGoals' => $this->Goals->countAll(),
            'rankingSidebar' => $this->Players->rankingSidebar(),
            'topGoals' => $this->Players->statsSidebar('goals_average_limit', 'desc', 12),
            'topAssists' => $this->Players->statsSidebar('assists_average_limit', 'desc', 12),
            'offensiveInfluence' => $this->Players->statsSidebar('team_scored_average_limit', 'desc', 12),
            'defensiveInfluence' => $this->Players->statsSidebar('team_conceded_average_limit', 'asc', 12)
            ]);
    }


    /**
     * sidebarMenuItem method
     *
     * cria um item para o menu da sidebar
     * @param  string $title      
     * @param  string $controller 
     * @param  string $action     
     * @param  string $value      
     * @return array
     */
    
    public function sidebarMenuItem($title, $controller, $action, $value = null)
    {
    	return array(
    		'title' => $title,
    		'controller' => $controller,
    		'action' => $action,
    		'value' => $value);
    }

     /**
     * sidebarStats method
     *
     * @param string $id
     * @return array
     */
    public function sidebarStats() {


        //min games_played
        $players['n_min_pre'] = Configure::read('n_min_pre');

        //min games_player necessary for a x player ranking list
        $n_min_pre_list_size = $this->Player->n_min_pre_list_size(10);

        //correcting the variable if necessary
        if($n_min_pre_list_size < $players['n_min_pre']) {
           $players['n_min_pre'] = $n_min_pre_list_size;
        }

        //ranking TrueSkill
        $players['trueSkill'] = $this->Rating->rankingList($players['n_min_pre']);

        foreach ($players['trueSkill'] as $key => $player) {
            $players['trueSkill'][$key]['tristate'] = $this->Team->tristate($player['id'], 6);
        }


        //topGoalscorer
            $op_topGoalscorer = array('order' => array('Player.goals_average_limit' => 'desc'),
                'conditions' => array('Player.games_played >=' => $players['n_min_pre'], 'Player.goals_average_limit !=' => 0),
                'limit' => 10);
            $topGoalscorer = $this->Player->find('all', $op_topGoalscorer);
            
            //check if an average exists
            if (count($topGoalscorer) != 0) {
                //check if player is idle, if true go to next candidate
                while($this->Player->idle($topGoalscorer[0]['Player']['id'])) {
                    array_shift($topGoalscorer);
                }

                $players['topGoalscorer'] = $topGoalscorer[0];  
             } else {
                //in case there is no average
                $players['topGoalscorer']['Player'] = array('name' => '', 'goals_average_limit' => '');
             }
             
      
      
        //topAssists
            $op_topAssists = array('order' => array('Player.assists_average_limit' => 'desc'),
                'conditions' => array('Player.games_played >=' => $players['n_min_pre'], 'Player.assists_average_limit !=' => 0),
                'limit' => 10);
            $topAssists = $this->Player->find('all', $op_topAssists);

            //check if an average exists
            if (count($topAssists) != 0) {
                //check if player is idle, if true go to next candidate
                while($this->Player->idle($topAssists[0]['Player']['id'])) {
                array_shift($topAssists);
                }

                $players['topAssists'] = $topAssists[0];   
             } else {
                //in case there is no average
                $players['topAssists']['Player'] = array('name' => '', 'assists_average_limit' => '');
             }
  
        //offensiveInfluence
            $op_offensive = array('order' => array('Player.team_scored_average_limit' => 'desc'),
                'conditions' => array('Player.games_played >=' => $players['n_min_pre'], 'Player.team_scored_average_limit !=' => 0),
                'limit' => 10);
            $offensiveInfluence = $this->Player->find('all', $op_offensive);

            //check if player is idle, if true go to next candidate
           while($this->Player->idle($offensiveInfluence[0]['Player']['id'])) {
                array_shift($offensiveInfluence);
            }

            $players['offensiveInfluence'] = $offensiveInfluence[0]; 


        //defensiveInfluence   
            $op_defensive = array('order' => array('Player.team_conceded_average_limit' => 'asc'),
                'conditions' => array('Player.games_played >=' => $players['n_min_pre'], 'Player.team_conceded_average_limit !=' => 0),
                'limit' => 10);
            $defensiveInfluence = $this->Player->find('all', $op_defensive);

            //check if player is idle, if true go to next candidate
           while($this->Player->idle($defensiveInfluence[0]['Player']['id'])) {
                array_shift($defensiveInfluence);
            }

            $players['defensiveInfluence'] = $defensiveInfluence[0]; 
        

        //allGoals
        $goals = $this->Goal->find('all');
        $players['allGoals'] = 0;
        foreach ($goals as $goal) {
            $players['allGoals'] += $goal['Goal']['goals'];
        }

        //nGames
        $players['nGames'] = $this->Game->gameCount();

        return $players;
    }
}
