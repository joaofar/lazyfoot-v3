<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Assists Controller
 *
 * @property \App\Model\Table\AssistsTable $Assists
 */
class AssistsController extends AppController
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
        $assists = $this->paginate($this->Assists);

        $this->set(compact('assists'));
        $this->set('_serialize', ['assists']);
    }

    /**
     * View method
     *
     * @param string|null $id Assist id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assist = $this->Assists->get($id, [
            'contain' => ['Games', 'Teams', 'Players']
        ]);

        $this->set('assist', $assist);
        $this->set('_serialize', ['assist']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assist = $this->Assists->newEntity();
        if ($this->request->is('post')) {
            $assist = $this->Assists->patchEntity($assist, $this->request->data);
            if ($this->Assists->save($assist)) {
                $this->Flash->success(__('The assist has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assist could not be saved. Please, try again.'));
            }
        }
        $games = $this->Assists->Games->find('list', ['limit' => 200]);
        $teams = $this->Assists->Teams->find('list', ['limit' => 200]);
        $players = $this->Assists->Players->find('list', ['limit' => 200]);
        $this->set(compact('assist', 'games', 'teams', 'players'));
        $this->set('_serialize', ['assist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Assist id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assist = $this->Assists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assist = $this->Assists->patchEntity($assist, $this->request->data);
            if ($this->Assists->save($assist)) {
                $this->Flash->success(__('The assist has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assist could not be saved. Please, try again.'));
            }
        }
        $games = $this->Assists->Games->find('list', ['limit' => 200]);
        $teams = $this->Assists->Teams->find('list', ['limit' => 200]);
        $players = $this->Assists->Players->find('list', ['limit' => 200]);
        $this->set(compact('assist', 'games', 'teams', 'players'));
        $this->set('_serialize', ['assist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Assist id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assist = $this->Assists->get($id);
        if ($this->Assists->delete($assist)) {
            $this->Flash->success(__('The assist has been deleted.'));
        } else {
            $this->Flash->error(__('The assist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
