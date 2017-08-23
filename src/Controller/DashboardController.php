<?php
namespace App\Controller;

use App\Controller\AppController;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class DashboardController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Auth');
        //$Acceso = $this -> isAuthorized($this->Auth->user());
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
       
        $this->viewBuilder()->layout('backend');
    }

}
