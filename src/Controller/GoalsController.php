<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Goals Controller
 *
 * @property \App\Model\Table\GoalsTable $Goals
 */
class GoalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Games', 'Teams', 'Players']
        ];
        $goals = $this->paginate($this->Goals);

        $this->set(compact('goals'));
        $this->set('_serialize', ['goals']);
    }

    /**
     * View method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $goal = $this->Goals->get($id, [
            'contain' => ['Games', 'Teams', 'Players']
        ]);

        $this->set('goal', $goal);
        $this->set('_serialize', ['goal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $goal = $this->Goals->newEntity();
        if ($this->request->is('post')) {
            $goal = $this->Goals->patchEntity($goal, $this->request->data);
            if ($this->Goals->save($goal)) {
                $this->Flash->success(__('The goal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The goal could not be saved. Please, try again.'));
            }
        }
        $games = $this->Goals->Games->find('list', ['limit' => 200]);
        $teams = $this->Goals->Teams->find('list', ['limit' => 200]);
        $players = $this->Goals->Players->find('list', ['limit' => 200]);
        $this->set(compact('goal', 'games', 'teams', 'players'));
        $this->set('_serialize', ['goal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $goal = $this->Goals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $goal = $this->Goals->patchEntity($goal, $this->request->data);
            if ($this->Goals->save($goal)) {
                $this->Flash->success(__('The goal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The goal could not be saved. Please, try again.'));
            }
        }
        $games = $this->Goals->Games->find('list', ['limit' => 200]);
        $teams = $this->Goals->Teams->find('list', ['limit' => 200]);
        $players = $this->Goals->Players->find('list', ['limit' => 200]);
        $this->set(compact('goal', 'games', 'teams', 'players'));
        $this->set('_serialize', ['goal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $goal = $this->Goals->get($id);
        if ($this->Goals->delete($goal)) {
            $this->Flash->success(__('The goal has been deleted.'));
        } else {
            $this->Flash->error(__('The goal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
