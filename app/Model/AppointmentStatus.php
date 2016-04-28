<?php
App::uses('AppModel', 'Model');
/**
 * AppointmentStatus Model
 *
 * @property Appointment $Appointment
 */
class AppointmentStatus extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'appointment_status';

const APPROVE = 1;
const HOLD = 2; 
const REJECTED = 3;

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Appointment' => array(
			'className' => 'Appointment',
			'foreignKey' => 'appointment_status_id',
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
