<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Invites Controller
 *
 * @property \App\Model\Table\InvitesTable $Invites
 */
class InvitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Games', 'Players']
        ];
        $invites = $this->paginate($this->Invites);

        $this->set(compact('invites'));
        $this->set('_serialize', ['invites']);
    }

    /**
     * View method
     *
     * @param string|null $id Invite id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invite = $this->Invites->get($id, [
            'contain' => ['Games', 'Players']
        ]);

        $this->set('invite', $invite);
        $this->set('_serialize', ['invite']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $invite = $this->Invites->newEntity();
        if ($this->request->is('post')) {
            $invite = $this->Invites->patchEntity($invite, $this->request->data);
            if ($this->Invites->save($invite)) {
                $this->Flash->success(__('The invite has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The invite could not be saved. Please, try again.'));
            }
        }
        $games = $this->Invites->Games->find('list', ['limit' => 200]);
        $players = $this->Invites->Players->find('list', ['limit' => 200]);
        $this->set(compact('invite', 'games', 'players'));
        $this->set('_serialize', ['invite']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Invite id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invite = $this->Invites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invite = $this->Invites->patchEntity($invite, $this->request->data);
            if ($this->Invites->save($invite)) {
                $this->Flash->success(__('The invite has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The invite could not be saved. Please, try again.'));
            }
        }
        $games = $this->Invites->Games->find('list', ['limit' => 200]);
        $players = $this->Invites->Players->find('list', ['limit' => 200]);
        $this->set(compact('invite', 'games', 'players'));
        $this->set('_serialize', ['invite']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Invite id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invite = $this->Invites->get($id);
        if ($this->Invites->delete($invite)) {
            $this->Flash->success(__('The invite has been deleted.'));
        } else {
            $this->Flash->error(__('The invite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
