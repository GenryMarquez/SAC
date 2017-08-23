<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/*use Acl\Controller\Component\AclComponent;
use Cake\Controller\ComponentRegistry;
use Cake\Core\Configure;
use Acl\Model\Entity\Aro;*/

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class PermisosController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Users');
        //$this->loadComponent('Auth');
        //$this->Auth->allow('*');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        //if (!$this -> isAuthorized($this->Auth->user())) { $this->redirect($this->Auth->redirectUrl());}

        $this->viewBuilder()->layout('backend');
        //$this->AcosRoles->find('all')
        //$usuario = TableRegistry::get('Users');
        $this->set('permiso',true);
     
        $aco = $this->Aco->find('list',['keyField' => 'id','valueField' => 'alias','conditions' => ['parent_id'=>'1']]);
        $parents = $aco->toArray();
        $child = array();
        foreach($parents as $idparent => $alias) {
            //$child[$idparent] = $aco->find('list', array('fields' => 'Aco.alias','conditions'=>array('Aco.parent_id'=>$idparent)));
            $acos = $this->Aco->find('list',['keyField' => 'id','valueField' => 'alias','conditions' => ['parent_id'=>$idparent]]);
            $child[$idparent] = $acos->toArray();
        }
        $this->set(compact('parents','child'));
        $this->set('_serialize', ['parents','child']);

    }
        
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('backend');
        $this->set('permiso',true);
        $permiso = $this->Aco->newEntity();
        if ($this->request->is(['patch', 'post', 'put'])) {
            if(!empty ($this->request->data)){ 
                //pr($this->request->data);
                $permiso = $this->Aco->patchEntity($permiso, $this->request->data);
                //pr($permiso);
                if ($this->Aco->save($permiso)) {
                    $this->Flash->success(__('The permiso has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The permiso could not be saved. Please, try again.'));
                }
            }
        }
        $aco = $this->Aco->find('list',['keyField' => 'id','valueField' => 'alias','order' => ['id' => 'ASC']]);
        $lispermiso = $aco->toArray();
        $this->set(compact('lispermiso'));
        $this->set('_serialize', ['lispermiso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($uuid = null)
    {
        $this->viewBuilder()->layout('backend');
        $id = $this->hashids()->decode($uuid); 
        $permiso = $this->Aco->get($id, [
            'contain' => []
        ]);
        //pr($permiso);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if(!empty ($this->request->data)){ 
                $permiso = $this->Aco->patchEntity($permiso, $this->request->data);
                //pr($permiso);
                if ($this->Aco->save($permiso)) {
                    $this->Flash->success(__('The permiso has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The permiso could not be saved. Please, try again.'));
                }
            }
        }
        $aco = $this->Aco->find('list',['keyField' => 'id','valueField' => 'alias','order' => ['id' => 'ASC']]);
        $lispermiso = $aco->toArray();
        $this->set(compact('lispermiso','permiso'));
        $this->set('_serialize', ['lispermiso','permiso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
