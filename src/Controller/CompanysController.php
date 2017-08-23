<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Companys Controller
 *
 * @property \App\Model\Table\CompanysTable $Companys
 */
class CompanysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('backend');
        /*$this->paginate = [
            'contain' => ['Apisms']
        ];
        $companys = $this->paginate($this->Companys);
        */
        //$companys = $this->Companys->find('all',['conditions' => ['status'=> 1]])->first();
        $companys = $this->Companys->find('all',['conditions' => ['status'=> 1]]);
        //pr($companys);
        $this->set(compact('companys'));
        $this->set('_serialize', ['companys']);
    }

    /**
     * View method
     *
     * @param string|null $id Company id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($uuid = null)
    {
        $this->viewBuilder()->layout('backend');
        $id = $this->hashids()->decode($uuid);
        $company = $this->Companys->get($id);
        //pr($company);
        $this->set('company', $company);
        $this->set('_serialize', ['company']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    /*public function add()
    {
        $company = $this->Companys->newEntity();
        if ($this->request->is('post')) {
            $company = $this->Companys->patchEntity($company, $this->request->data);
            if ($this->Companys->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The company could not be saved. Please, try again.'));
            }
        }
        $apisms = $this->Companys->Apisms->find('list', ['limit' => 200]);
        $this->set(compact('company', 'apisms'));
        $this->set('_serialize', ['company']);
    }*/

    /**
     * Edit method
     *
     * @param string|null $id Company id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($uuid = null)
    {
        $this->viewBuilder()->layout('backend');
        $id = $this->hashids()->decode($uuid);
        $company = $this->Companys->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $company = $this->Companys->patchEntity($company, $this->request->data);
            if ($this->Companys->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The company could not be saved. Please, try again.'));
            }
        }
        //$apisms = $this->Companys->Apisms->find('list', ['limit' => 200]);
        $this->set(compact('company', 'apisms'));
        $this->set('_serialize', ['company']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Company id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $company = $this->Companys->get($id);
        if ($this->Companys->delete($company)) {
            $this->Flash->success(__('The company has been deleted.'));
        } else {
            $this->Flash->error(__('The company could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }*/
}
