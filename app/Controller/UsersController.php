<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	public $components = array('Session');
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */

	public function home()
	{

	}



	public function listing()
	{
		$this->set('users', $this->User->find('all'));
	}

	public function view($id)
	{
		//Get a view 

		 if (!$id) {
            throw new NotFoundException(__('Invalid User'));
        }

        $users = $this->User->findById($id);
        if (!$users) {
            throw new NotFoundException(__('Invalid User'));
        }
        $this->set('users', $users);

		
	}

	public function operation($id=null)
	{
		//Add new post
		if(!$id)
		{
	if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'listing'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }

        $this->set('label', 'Add User');
    }
    else
    {
    	$user = $this->User->findById($id);
	    if (!$user) {
	        throw new NotFoundException(__('Invalid user'));
	    }

	    if ($this->request->is(array('user', 'put'))) {
	        $this->User->id = $id;
	        if ($this->User->save($this->request->data)) {
	            $this->Session->setFlash(__('Your post has been updated.'));
	            return $this->redirect(array('action' => 'listing'));
	        }
	        $this->Session->setFlash(__('Unable to update your post.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $user;
	    }

	    $this->set('label', 'Edit User');
    }

	}
	
	//Delete action

	public function delete($id)
	{
		//$this->autoRender = false;
		if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->User->delete($id)) {
        $this->Session->setFlash(
            __('The user with id: %s has been deleted.', h($id))
        );
    } else {
        $this->Session->setFlash(
            __('The user with id: %s could not be deleted.', h($id))
        );
    }

    return $this->redirect(array('action' => 'listing'));

	}

 public function beforeFilter() {
         parent::beforeFilter();
  	
      	
        /* allow add action so user can register */
        $this->Auth->allow('add', 'logout'); 
        
    }

    public function login() {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
         /* logout and redirect to url set in app controller */
        return $this->redirect($this->Auth->logout());
    }

   public function add() {
        if ($this->request->is('post')) {
            $this->User->create();

            
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('controller' => 'users','action' => 'home'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }

	
}
