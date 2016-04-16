<?php
App::uses('AppModel', 'Model');
/**
 * VhiclesImage Model
 *
 * @property Vehicles $Vehicles
 */
class VhiclesImage extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vehicles' => array(
			'className' => 'Vehicles',
			'foreignKey' => 'vehicles_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
