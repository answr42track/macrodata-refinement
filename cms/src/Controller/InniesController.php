<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Innies Controller
 *
 * @property \App\Model\Table\InniesTable $Innies
 */
class InniesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Innies->find()
            ->contain(['Innies']);
        $innies = $this->paginate($query);

        $this->set(compact('innies'));
    }

    /**
     * View method
     *
     * @param string|null $id Inny id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inny = $this->Innies->get($id, contain: ['Innies']);
        $this->set(compact('inny'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inny = $this->Innies->newEmptyEntity();
        if ($this->request->is('post')) {
            $inny = $this->Innies->patchEntity($inny, $this->request->getData());
            if ($this->Innies->save($inny)) {
                $this->Flash->success(__('The inny has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inny could not be saved. Please, try again.'));
        }
        $innies = $this->Innies->Innies->find('list', limit: 200)->all();
        $this->set(compact('inny', 'innies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inny id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inny = $this->Innies->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inny = $this->Innies->patchEntity($inny, $this->request->getData());
            if ($this->Innies->save($inny)) {
                $this->Flash->success(__('The inny has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inny could not be saved. Please, try again.'));
        }
        $innies = $this->Innies->Innies->find('list', limit: 200)->all();
        $this->set(compact('inny', 'innies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inny id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inny = $this->Innies->get($id);
        if ($this->Innies->delete($inny)) {
            $this->Flash->success(__('The inny has been deleted.'));
        } else {
            $this->Flash->error(__('The inny could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
