<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Groups Controller
 *
 * @property \App\Model\Table\GroupsTable $Groups
 */
class GroupsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Auth');
        //$this->Auth->allow();
    }    
        /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('backend');
        //$groups = $this->paginate($this->Groups);
        $groups = $this->Groups->find('all',['conditions' => ['status'=> 1]])->order(['id' => 'ASC']);
        $this->set(compact('groups'));
        $this->set('_serialize', ['groups']);
    }

    /**
     * View method
     *
     * @param string|null $id Group id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($uuid = null)
    {
        $this->viewBuilder()->layout('backend');
        $id = $this->hashids()->decode($uuid);
        $group = $this->Groups->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('group', $group);
        $this->set('_serialize', ['group']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('backend');
        $group = $this->Groups->newEntity();
        if ($this->request->is('post')) {
            $group = $this->Groups->patchEntity($group, $this->request->data);
            if ($this->Groups->save($group)) {
                $this->Flash->success(__('The group has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The group could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('group'));
        $this->set('_serialize', ['group']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Group id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($uuid = null)
    {
        $this->viewBuilder()->layout('backend');
        $id = $this->hashids()->decode($uuid);
        $group = $this->Groups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $group = $this->Groups->patchEntity($group, $this->request->data);
            if ($this->Groups->save($group)) {
                $this->Flash->success(__('The group has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The group could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('group'));
        $this->set('_serialize', ['group']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Group id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($uuid = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $id = $this->hashids()->decode($uuid);
        $group = $this->Groups->get($id);
        $group->set(['status' => 0]);
        if ($this->Groups->save($group)) {
            $this->Flash->success(__('The group has been deleted.'));
        } else {
            $this->Flash->error(__('The group could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function permission($uuid = null)
    {

        $this->viewBuilder()->layout('backend');
        $id = $this->hashids()->decode($uuid);
        $Groups = $this->Groups->get($id, [
            'contain' => []
        ]); 
        if (!empty($id)) {
           $aco = $this->Aco->find('list',['keyField' => 'id','valueField' => 'alias','conditions' => ['parent_id'=>'1']]);
           $parents = $aco->toArray();
            $child = array();
            foreach($parents as $idparent => $alias) {
                $acos = $this->Aco->find('list',['keyField' => 'id','valueField' => 'alias','conditions' => ['parent_id'=>$idparent]]);
                $child[$idparent] = $acos->toArray();
                foreach($child[$idparent] as $idhijo => $aliashijo) {                    
                    $permiso[$idhijo] = $this->Acl->check(['Groups' => ['id' => $Groups['id']]], $alias."/".$aliashijo);
                    //pr($alias);
                }
            }
        }
        $this->set(compact('id', 'parents','child','permiso','Groups'));
    }

    function ajaxload() {

        //$this->viewBuilder()->layout('ajax');
       // if ($this->request->is('ajax')) {
            //echo $this->response->disableCache();
            /*$this->set('iduser',$_POST['key']);
            $this->set('hijoalias',$_POST['key2']);

            if($_POST['key3'] == 0)
            {
                $permitido = 1;
                //$this->Acl->check(['Groups' => ['id' => $_POST['key']]], $alias."/".$aliashijo);
                $this->Acl->allow(['Groups' => ['id' => $_POST['key']]], $_POST['key2']);
                $this->set('permitido',$permitido);

            }else{
                $permitido = 0;
                $this->Acl->deny(['Groups' => ['id' => $_POST['key']]], $_POST['key2']);
                $this->set('permitido',$permitido);

            }*/


       // }  
      $this->viewBuilder()->layout('ajax');
        if ($this->request->is('ajax')) {
            $iduser = $_POST['key'];
            $hijoalias = $_POST['key2'];
            //$permitido = 1; 
            if($_POST['key3'] == 0)
            {
                $permitido = 1;
                $this->Acl->allow(['Groups' => ['id' => $_POST['key']]], $_POST['key2']);
                $img = [
                    'permisos'  => 'key='.$iduser.'&key2='.$hijoalias.'&key3='.$permitido,
                    'imagen'  => "fa fa-fw fa-check fa-3x",
                    'mensaje'  => "Este Grupo tiene permisos"   
                ];

            }else{
                $permitido = 0;
                $this->Acl->deny(['Groups' => ['id' => $_POST['key']]], $_POST['key2']);
                $img = [
                    'permisos'  => 'key='.$iduser.'&key2='.$hijoalias.'&key3='.$permitido,
                    'imagen'  => "fa fa-fw fa-remove fa-3x",
                    'mensaje'  => "Este Grupo no tiene permisos"   
                ];

            }   
            echo json_encode($img);
            //$this->set(compact('img'));
            //$this->set('_serialize', ['img']); 
            $this->autoRender = false;  
            //$this->viewBuilder()->layout(false);
            //$this->render();
            //$this->RequestHandler->renderAs($this, 'xml');
        }   
    }
}
