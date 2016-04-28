<?php
App::uses('AppController', 'Controller');
App::uses('AppointmentStatus','Model');
/**
 * Appointments Controller
 *
 * @property Appointment $Appointment
 * @property PaginatorComponent $Paginator
 */
class AppointmentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Appointment','UserVehicle','Service');

	public function makeAppointments() {
		$this->layout=false;
		$user=$this->Auth->user();
		$service_id=$_POST['id'];
		$vehicle=$this->UserVehicle->find('first',array(
			'conditions' => array('UserVehicle.user_id' => $user['User']['id']),
			'recursive' => '-1',
			'fields' => array('UserVehicle.vehicle_id')
		));
		$date=date('Y-m-d');
		$data=array(
				'name' => 'Cita',
				'user_id' => $user['User']['id'],				
				'vehicle_id' => $vehicle['UserVehicle']['vehicle_id'],
				'date' => $date,
				'service_id' => $service_id,
				'appointment_status_id' => AppointmentStatus::HOLD

			);
		$this->Appointment->create();
		$success=$this->Appointment->save($data);
		
		$this->set(compact('success'));

	}

	public function showAppointments() {
		$this->layout=false;
		$user=$this->Auth->user();
		$appointments=$this->Appointment->find('all',array(
			'conditions' => array('Appointment.user_id' =>  $user['User']['id']),
			'recursive' => '-1',
			'fields' => array('ServiceApp.name','Appointment.name','Appointment.date','AppointmentStat.name'),
			'joins' => array(

						array(
							'table' => 'services',
							'alias' => 'ServiceApp',
							'type' => 'INNER',
							'conditions' => array(
							'ServiceApp.id = Appointment.service_id'
						)
					),
						array(
							'table' => 'appointment_status',
							'alias' => 'AppointmentStat',
							'type' => 'INNER',
							'conditions' => array(
							'AppointmentStat.id = Appointment.appointment_status_id'
						)	
					)


			)
		));
		//$this->printWithFormat()
		$this->set(compact('appointments'));
	}
}
