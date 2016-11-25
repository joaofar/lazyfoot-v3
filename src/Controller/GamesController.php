<?php
namespace App\Controller;

use App\Controller\AppController;
//use Cake\ORM\TableRegistry;

/**
 * Games Controller
 *
 * @property \App\Model\Table\GamesTable $Games
 */
class GamesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        //$games = $this->paginate($this->Games);

        
        $games = $this->Games
            ->find()
            ->order(['id' => 'DESC'])
            ->contain(['Teams']);

        $this->paginate($games, ['limit' => 10]);

        $this->set(compact('games'));
        //$this->set('_serialize', ['games']);
    }

    /**
     * View method
     *
     * @param string|null $id Game id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $game = $this->Games->get($id, [
            'contain' => ['Players', 'Assists', 'Goals', 'Invites', 'Ratings', 'Teams']
        ]);

        $this->set('game', $game);
        $this->set('_serialize', ['game']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $game = $this->Games->newEntity();
        if ($this->request->is('post')) {
            $game = $this->Games->patchEntity($game, $this->request->data);
            if ($this->Games->save($game)) {
                $this->Flash->success(__('The game has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The game could not be saved. Please, try again.'));
            }
        }
        $players = $this->Games->Players->find('list', ['limit' => 200]);
        $this->set(compact('game', 'players'));
        $this->set('_serialize', ['game']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Game id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $game = $this->Games->get($id, [
            'contain' => ['Players']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $game = $this->Games->patchEntity($game, $this->request->data);
            if ($this->Games->save($game)) {
                $this->Flash->success(__('The game has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The game could not be saved. Please, try again.'));
            }
        }
        $players = $this->Games->Players->find('list', ['limit' => 200]);
        $this->set(compact('game', 'players'));
        $this->set('_serialize', ['game']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Game id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $game = $this->Games->get($id);
        if ($this->Games->delete($game)) {
            $this->Flash->success(__('The game has been deleted.'));
        } else {
            $this->Flash->error(__('The game could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
