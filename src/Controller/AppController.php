<?php
/**http://stackoverflow.com/questions/29550726/cakephp-belongstomany-jointable
 * http://formvalidation.io/examples/adding-dynamic-field/
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Acl\Controller\Component\AclComponent;
use Cake\Controller\ComponentRegistry;
use Cake\Core\Configure;
use Acl\Model\Entity\Aro;
use Hashids\Hashids;
use Cake\I18n\I18n;
use Cake\I18n\Time;
use Cake\I18n\FrozenTime;
use Cake\I18n\Date;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */

class AppController extends Controller
{
    public $components = [
        'Acl' => [
            'className' => 'Acl.Acl'
        ]
    ];

    /**
     * Hashids Settings
     *
     * @var array
     */
    public $hashids = [
        'salt' => '#@#726563d806e0e61c29a961b9a8f767347a1d1cc7a8a962d5dce87a0ba755e6ed#@#',
        'min_hash_length' => 500,
        'alphabet' => 'abcdefghijklmnopqrstuvwxyz0123456789'
    ];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        
        $registry = new ComponentRegistry();
        $this->Acl = new AclComponent($registry, Configure::read('Acl'));
        $this->Aco = $this->Acl->Aco;
        $this->Aro = $this->Acl->Aro;
        $this->set('hashids', $this->hashids());
        //$this->addBehavior('Timestamp');
        /*$this->loadComponent('Auth', [
            'authorize' => [
                'Acl.Actions' => ['actionPath' => 'controllers/']
            ],
            'loginAction' => [
                'plugin' => false,
                'controller' => 'Users',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'plugin' => false,
                'controller' => 'Cameras',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'plugin' => false,
                'controller' => 'Users',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => [
                'controller' => 'Cameras',
                'action' => 'index',
                'prefix' => false
            ],
            'authError' => 'You are not authorized to access that location.',
            'flash' => [
                'element' => 'error'
            ]
        ]);*/
    }
    public function isAuthorized($user){  
        //$Collection = new ComponentRegistry();
        //$acl = new AclComponent($Collection);
        $controller = $this->request->controller;
        $action = $this->request->action;
        $check = $this->Acl->check(['Users' => ['id' => $user['id']]], $this->request->controller . '/' . $this->request->action);
        return $check;
    }

    /**
     * Hashids function
     *
     * @return object
     */
    public function hashids()
    {
        return $hashids = new Hashids(
            $this->hashids['salt'],
            $this->hashids['min_hash_length'],
            $this->hashids['alphabet']
        );
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

    }

}
