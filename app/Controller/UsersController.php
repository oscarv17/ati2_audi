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
	public $uses = array('User','UserVehicle','Vehicle','VehicleImage','Service');

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
			unset($user['User']['password']);
			$this->Session->write('Auth.User',$user);
			//$this->printWithFormat($this->Auth->user(),true);
			echo json_encode(array('success' => true));
		}else {
			echo json_encode(array('success' => false));
		}

	}
	public function logout() {
		$this->autoRender=false;
		$this->Session->delete('user');
		$this->Session->delete('Auth.user');
		$this->Session->destroy();
		$this->redirect(
            array('controller' => 'home', 'action' => 'index')
        );
	}

	public function profile() {
		$this->layout=false;
		$userName=$this->Auth->user();

		$vehicles=$this->Vehicle->find('all',array(
			'recursive' => '-1',
			'fields' => array('Vehicle.id','Vehicle.model')
			));

		$userVehicle=$this->UserVehicle->find('first',array(
			'conditions' => array('UserVehicle.user_id' => $userName['User']['id']),
			'recursive' => '-1',
			'joins' => array(
				array(
					'table' => 'vehicles',
					'alias' => 'VehicleUser',
					'type' => 'INNER',
					'conditions' => array(
						'VehicleUser.id = UserVehicle.vehicle_id'
						)
					),
				array(
					'table' => 'vehicle_images',
					'alias' => 'VehicleImage',
					'type' => 'INNER',
					'conditions' => array(
						'VehicleImage.vehicle_id = Vehicle.id'
						)
					)		 


				),
			'fields' => array('VehicleUser.model','VehicleImage.name','VehicleUser.id')

			));
		$this->set(compact('userName','userVehicle','vehicles'));

	}

	public function saveCar() {
		$this->layout=false;
		$this->autoRender=false;
		$vehicleId=$_POST['id'];
		$user=$this->Auth->user();
		$data=array(
				'user_id' => $user['User']['id'],
				'vehicle_id' => $vehicleId

			);
		//$this->printWithFormat($data,true);
		$this->UserVehicle->create();
		$succes=$this->UserVehicle->save($data);
		if($succes){
			echo json_encode(array('sucess' => true));
		}else{
			echo json_encode(array('sucess' => true));
		}


	}

	public function toAppointments() {
		$this->layout=false;
		$services=$this->Service->find('all',array(
			'recursive' => '-1',
			'fields' => array(
				'Service.id','Service.name'
				)


			));
		//$this->printWithFormat($services,true);
		$this->set(compact('services'));
	}

}
