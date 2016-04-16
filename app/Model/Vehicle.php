<?php
App::uses('AppModel', 'Model');
/**
 * Vehicle Model
 *
 * @property Appointment $Appointment
 */
class Vehicle extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'model';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Appointment' => array(
			'className' => 'Appointment',
			'foreignKey' => 'vehicle_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
