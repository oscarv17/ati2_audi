<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('User');

	public function login() {

	}
	public function registrar() {
		$this->autoRender=false;
		$pass=$this->request->data['Users']['password'];
		$pass=Security::hash($pass, 'md5');
		$this->request->data['Users']['password']=$pass;
		$this->User->saveMany($this->request->data);
		
		$user=$this->User->find('first',array(
			'conditions' => array('User.email' => $this->request->data['Users']['email']),
			'recursive' => '-1'
			));
		$this->Session->write('Auth.User',$user);
		//$this->printWithFormat($this->Auth->user(),true);
		$this->redirect(
            array('controller' => 'home', 'action' => 'index')
        );


	}
	public function checkLogin() {
		$this->autoRender=false;
		
		$email=$this->request->data['email'];
		$pass=$this->request->data['password'];
		$pass=Security::hash($pass, 'md5');

		$user=$this->User->find('first',array(
			'conditions' => array(
				'User.email' => $email,
				'User.password' => $pass
				),
			'recursive' => '-1'
 
			));

		if(count($user) > 0) {
			$this->Session->write('Auth.User',$user);
			echo json_encode(array('sucess' => true));
		}else {
			echo json_encode(array('sucess' => false));
		}

	}

}
