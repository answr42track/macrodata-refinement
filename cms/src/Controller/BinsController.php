<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bins Controller
 *
 * @property \App\Model\Table\BinsTable $Bins
 */
class BinsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Bins->find()
            ->contain(['Projects']);
        $bins = $this->paginate($query);

        $this->set(compact('bins'));
    }

    /**
     * View method
     *
     * @param string|null $id Bin id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bin = $this->Bins->get($id, contain: ['Projects']);
        $this->set(compact('bin'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bin = $this->Bins->newEmptyEntity();
        if ($this->request->is('post')) {
            $bin = $this->Bins->patchEntity($bin, $this->request->getData());
            if ($this->Bins->save($bin)) {
                $this->Flash->success(__('The bin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bin could not be saved. Please, try again.'));
        }
        $projects = $this->Bins->Projects->find('list', limit: 200)->all();
        $this->set(compact('bin', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bin id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bin = $this->Bins->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bin = $this->Bins->patchEntity($bin, $this->request->getData());
            if ($this->Bins->save($bin)) {
                $this->Flash->success(__('The bin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bin could not be saved. Please, try again.'));
        }
        $projects = $this->Bins->Projects->find('list', limit: 200)->all();
        $this->set(compact('bin', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bin = $this->Bins->get($id);
        if ($this->Bins->delete($bin)) {
            $this->Flash->success(__('The bin has been deleted.'));
        } else {
            $this->Flash->error(__('The bin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
