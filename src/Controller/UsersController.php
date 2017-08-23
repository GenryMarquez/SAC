<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Auth');
        //$Acceso = $this -> isAuthorized($this->Auth->user());
    }

    public function login() {
        $this->viewBuilder()->layout('login');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                //return $this->redirect($this->Auth->redirectUrl([action' => 'index']));
                /*return $this->redirect(
                    ['controller' => 'Dashboard', 'action' => 'index']
                );*/
                return $this->redirect(
                    ['action' => 'index']
                );
            }
            $this->Flash->error(__('Your username or password was incorrect.'));
        }
    }
    public function logout() {
        $this->Flash->success(__('Good-Bye'));
        $this->redirect($this->Auth->logout());
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        if (!$this -> isAuthorized($this->Auth->user())) { $this->redirect($this->Auth->redirectUrl());}
        //pr($this->request->session());
        $this->viewBuilder()->layout('backend');
        /*$this->paginate = [
            'contain' => ['Groups']
        ];
        $users = $this->paginate($this->Users);*/
        $users = $this->Users->find('all',['conditions' => ['status'=> 1]])->order(['id' => 'ASC']);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($uuid = null)
    {
        $this->viewBuilder()->layout('backend');
        $id = $this->hashids()->decode($uuid);
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
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        //$groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $groups = $this->Users->Groups->find('list', ['keyField' => 'id','valueField' => 'titulo_grupos','order' => ['id' => 'ASC']]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
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
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        //$groups = $this->Users->Groups->find('list', ['limit' => 200]);
         $groups = $this->Users->Groups->find('list', ['keyField' => 'id','valueField' => 'titulo_grupos','order' => ['id' => 'ASC']]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($uuid = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $id = $this->hashids()->decode($uuid);
        $user = $this->Users->get($id);
        $user->set(['status' => 0]);
        if ($this->Users->save($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function editpass($uuid = null)
    {
        $this->viewBuilder()->layout('backend');
        $id = $this->hashids()->decode($uuid);
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        //$user =$this->Users->get($this->Auth->user('id'));
        if ($this->request->is(['patch', 'post', 'put'])) {
	        
	        if (!empty($this->request->data)) {
	            $user = $this->Users->patchEntity($user, [
	                    'old_password'  => $this->request->data['old_password'],
	                    'password'      => $this->request->data['password1'],
	                    'password1'     => $this->request->data['password1'],
	                    'password2'     => $this->request->data['password2']
	                ]
	            );
	            //pr($user);
	            if ($this->Users->save($user)) {
	                $this->Flash->success('The password is successfully changed');
	                return $this->redirect(['action' => 'index']);
	            } else {
	                $this->Flash->error('There was an error during the save!');
	            }
	        }
    	}
        $this->set('user',$user);
        $this->set('_serialize', ['user']);
    }

    public function dashboard()
    {
        $this->viewBuilder()->layout('backend');
    }

    public function permission($uuid = null)
    {
        $this->viewBuilder()->layout('backend');
        if (!empty($uuid)) {
        $id = $this->hashids()->decode($uuid);    
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
           //$user = $this->Users->patchEntity($user, $this->request->data);
           $aco = $this->Aco->find('list',['keyField' => 'id','valueField' => 'alias','conditions' => ['parent_id'=>'1']]);
    	   $parents = $aco->toArray();
           //pr($parents);
    	    $child = array();
	        foreach($parents as $idparent => $alias) {
	            $acos = $this->Aco->find('list',['keyField' => 'id','valueField' => 'alias','conditions' => ['parent_id'=>$idparent]]);
	            $child[$idparent] = $acos->toArray();
	            foreach($child[$idparent] as $idhijo => $aliashijo) {                    
                	//$permiso[$idhijo] = $this->Acl->check(array('User' => array("id"=> $id)), $alias."/".$aliashijo);
                	//$Collection = new ComponentRegistry();
    				//$acl = new AclComponent($Collection);
                	$permiso[$idhijo] = $this->Acl->check(['Users' => ['id' => $user['id']]], $alias."/".$aliashijo);
                	//pr($permiso[$idhijo]);
            	}
	        }
         $this->set(compact('user','id', 'parents','child','permiso'));
         $this->set('_serialize', ['user','id', 'parents','child','permiso']);   
        }else{return $this->redirect(['action' => 'index']);}
		
    }

    function ajaxload() {
        $this->viewBuilder()->layout('ajax');

        if ($this->request->is('ajax')) {
            $iduser = $_POST['key'];
            $hijoalias = $_POST['key2'];
            //pr($_POST['key3']);
            if($_POST['key3'] == 0)
            {
                $permitido = 1;
                $this->Acl->allow(['Users' => ['id' => $_POST['key']]], $_POST['key2']);
                $img = [
                    'permisos'  => 'key='.$iduser.'&key2='.$hijoalias.'&key3='.$permitido,
                    'imagen'  => "fa fa-fw fa-check fa-3x",
                    'mensaje'  => "Este Grupo tiene permisos"   
                ];

            }else{
                $permitido = 0;
                $this->Acl->deny(['Users' => ['id' => $_POST['key']]], $_POST['key2']);
                $img = [
                    'permisos'  => 'key='.$iduser.'&key2='.$hijoalias.'&key3='.$permitido,
                    'imagen'  => "fa fa-fw fa-remove fa-3x",
                    'mensaje'  => "Este Grupo no tiene permisos"   
                ];

            }   
            echo json_encode($img);
            $this->autoRender = false;
        }
    }

}
