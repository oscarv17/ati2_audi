<?php
App::uses('AppController', 'Controller');
/**
 * Vehicles Controller
 *
 * @property Vehicle $Vehicle
 * @property PaginatorComponent $Paginator
 */
class VehiclesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Vehicle','VehicleImage');

	public function listVehicles() {
		$vehicles=$this->Vehicle->find('all',array(
			'conditions' => array('VehicleImage.principal' => 1),
			'recursive' => '-1',
			'fields' => array('Vehicle.model','Vehicle.year','VehicleImage.name'),
			'joins' => array(
				 array(
		            'table' => 'vehicle_images',
		            'alias' => 'VehicleImage',
		            'type' => 'INNER',
		            'conditions' => array(
		                'VehicleImage.vehicle_id = Vehicle.id'
		            )

				)

			)

			));
		//$this->printWithFormat($vehicles,true);
		$this->set(compact('vehicles'));		
	}


}
