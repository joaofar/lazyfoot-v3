<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Players Model
 *
 * @property \Cake\ORM\Association\HasMany $Assists
 * @property \Cake\ORM\Association\HasMany $Goals
 * @property \Cake\ORM\Association\HasMany $Invites
 * @property \Cake\ORM\Association\HasMany $Ratings
 * @property \Cake\ORM\Association\BelongsToMany $Games
 * @property \Cake\ORM\Association\BelongsToMany $Teams
 *
 * @method \App\Model\Entity\Player get($primaryKey, $options = [])
 * @method \App\Model\Entity\Player newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Player[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Player|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Player patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Player[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Player findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlayersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('players');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Assists', [
            'foreignKey' => 'player_id'
        ]);
        $this->hasMany('Goals', [
            'foreignKey' => 'player_id'
        ]);
        $this->hasMany('Invites', [
            'foreignKey' => 'player_id'
        ]);
        $this->hasMany('Ratings', [
            'foreignKey' => 'player_id'
        ]);
        $this->belongsToMany('Games', [
            'foreignKey' => 'player_id',
            'targetForeignKey' => 'game_id',
            'joinTable' => 'games_players'
        ]);
        $this->belongsToMany('Teams', [
            'foreignKey' => 'player_id',
            'targetForeignKey' => 'team_id',
            'joinTable' => 'players_teams'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->integer('conv')
            ->requirePresence('conv', 'create')
            ->notEmpty('conv');

        $validator
            ->integer('games_played')
            ->requirePresence('games_played', 'create')
            ->notEmpty('games_played');

        $validator
            ->integer('wins')
            ->requirePresence('wins', 'create')
            ->notEmpty('wins');

        $validator
            ->numeric('win_percentage')
            ->requirePresence('win_percentage', 'create')
            ->notEmpty('win_percentage');

        $validator
            ->integer('goals')
            ->requirePresence('goals', 'create')
            ->notEmpty('goals');

        $validator
            ->numeric('goals_average')
            ->requirePresence('goals_average', 'create')
            ->notEmpty('goals_average');

        $validator
            ->integer('assists')
            ->requirePresence('assists', 'create')
            ->notEmpty('assists');

        $validator
            ->numeric('assists_average')
            ->requirePresence('assists_average', 'create')
            ->notEmpty('assists_average');

        $validator
            ->integer('team_scored')
            ->requirePresence('team_scored', 'create')
            ->notEmpty('team_scored');

        $validator
            ->numeric('team_scored_average')
            ->requirePresence('team_scored_average', 'create')
            ->notEmpty('team_scored_average');

        $validator
            ->integer('team_conceded')
            ->requirePresence('team_conceded', 'create')
            ->notEmpty('team_conceded');

        $validator
            ->numeric('team_conceded_average')
            ->requirePresence('team_conceded_average', 'create')
            ->notEmpty('team_conceded_average');

        $validator
            ->integer('wins_limit')
            ->requirePresence('wins_limit', 'create')
            ->notEmpty('wins_limit');

        $validator
            ->numeric('win_percentage_limit')
            ->requirePresence('win_percentage_limit', 'create')
            ->notEmpty('win_percentage_limit');

        $validator
            ->integer('goals_limit')
            ->requirePresence('goals_limit', 'create')
            ->notEmpty('goals_limit');

        $validator
            ->numeric('goals_average_limit')
            ->requirePresence('goals_average_limit', 'create')
            ->notEmpty('goals_average_limit');

        $validator
            ->integer('assists_limit')
            ->requirePresence('assists_limit', 'create')
            ->notEmpty('assists_limit');

        $validator
            ->numeric('assists_average_limit')
            ->requirePresence('assists_average_limit', 'create')
            ->notEmpty('assists_average_limit');

        $validator
            ->integer('team_scored_limit')
            ->requirePresence('team_scored_limit', 'create')
            ->notEmpty('team_scored_limit');

        $validator
            ->numeric('team_scored_average_limit')
            ->requirePresence('team_scored_average_limit', 'create')
            ->notEmpty('team_scored_average_limit');

        $validator
            ->integer('team_conceded_limit')
            ->requirePresence('team_conceded_limit', 'create')
            ->notEmpty('team_conceded_limit');

        $validator
            ->numeric('team_conceded_average_limit')
            ->requirePresence('team_conceded_average_limit', 'create')
            ->notEmpty('team_conceded_average_limit');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

    public function findActive(Query $query)
    {
        return $query->matching('Games', function ($q) {
                            return $q->where(['Games.date >=' => new \DateTime('-2 months')]);
                        })->distinct('Players.id');
    }

    public function findRegular(Query $query)
    {
        return $query->where(['games_played >=' => 12]);
    }

/**
 * statsSidebar method
 *
 * gets player stats for the sidebar
 * 
 * @param  string $stat
 * @param  string $order
 * @param  int $gamesPlayed
 * @return object
 */

    /**
     * [statsSidebar description]
     * @param  [type] $stat        [description]
     * @param  [type] $order       [description]
     * @param  [type] $gamesPlayed [description]
     * @return [type]              [description]
     */
    public function statsSidebar($stat, $order, $gamesPlayed){

        return $this->find('active')->find('regular') //custom finders above
                    ->select(['id', 'name', "{$stat}"])
                    ->order(["{$stat}" => "{$order}"])
                    ->first();
    }

    /**
     * [rankingSidebar // finds all the properties needed by the ranking list on the sidebar]
     * @return [array]
     */
    public function rankingSidebar(){

        $query = $this->find('active')->find('regular') //custom finders above
                        ->select(['id', 'name'])
                        ->distinct(['Players.id']);

        //creating a list for the view from the resultSet
        $ranking = $query->map(function ($player, $key) {
            return ['id' => $player->id, 
                    'name' => $player->name,
                    'rating' => $this->Ratings->latest($player->id)->mean,
                    //array_reverse is needed so that the most recent games are on the right side
                    'tristate' => array_reverse($this->winLose($player->id))];
        });

        return $ranking->sortBy('rating');
    }

    /**
     * [winLose // finds if the player won or lost in the last games and prepares the output to be used by the tristate js plugin]
     * @param  [int] $playerId
     * @return [array]
     */
    public function winLose($playerId)
    {
        $query = $this->Teams->find()
                            ->select('is_winner')
                            ->matching('Players', function($q) use ($playerId){
                                return $q->where(['Players.id' => $playerId]);
                            })
                            ->order(['Teams.id' => 'desc'])
                            ->limit(6);

        return $query->map(function ($team, $key) {
            //the tristate js plugin understands 0 as a tie, so we need to replace it with -1
            if($team->is_winner == 0) { return -1; } else { return 1; };
        })->toArray();
    }


}
