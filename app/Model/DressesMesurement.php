<?php
App::uses('AppModel', 'Model');
/**
 * DressesMesurement Model
 *
 * @property Dress $Dress
 * @property Mesurement $Mesurement
 */
class DressesMesurement extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dress_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mesurement_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'remark' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Dress' => array(
			'className' => 'Dress',
			'foreignKey' => 'dress_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Mesurement' => array(
			'className' => 'Mesurement',
			'foreignKey' => 'mesurement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
