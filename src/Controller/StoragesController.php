<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Storages Controller
 *
 * @property \App\Model\Table\StoragesTable $Storages
 */
class StoragesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles']
        ];
        $this->set('storages', $this->paginate($this->Storages));
        $this->set('_serialize', ['storages']);
    }

    /**
     * View method
     *
     * @param string|null $id Storage id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storage = $this->Storages->get($id, [
            'contain' => ['Articles']
        ]);
        $this->set('storage', $storage);
        $this->set('_serialize', ['storage']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storage = $this->Storages->newEntity();
        if ($this->request->is('post')) {
            $storage = $this->Storages->patchEntity($storage, $this->request->data);
            if ($this->Storages->save($storage)) {
                $this->Flash->success(__('The storage has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The storage could not be saved. Please, try again.'));
            }
        }
        $articles = $this->Storages->Articles->find('list', ['limit' => 200]);
        $this->set(compact('storage', 'articles'));
        $this->set('_serialize', ['storage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Storage id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storage = $this->Storages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storage = $this->Storages->patchEntity($storage, $this->request->data);
            if ($this->Storages->save($storage)) {
                $this->Flash->success(__('The storage has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The storage could not be saved. Please, try again.'));
            }
        }
        $articles = $this->Storages->Articles->find('list', ['limit' => 200]);
        $this->set(compact('storage', 'articles'));
        $this->set('_serialize', ['storage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Storage id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storage = $this->Storages->get($id);
        if ($this->Storages->delete($storage)) {
            $this->Flash->success(__('The storage has been deleted.'));
        } else {
            $this->Flash->error(__('The storage could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
