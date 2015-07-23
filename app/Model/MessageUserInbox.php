<?php
App::uses('AppModel', 'Model');
/**
 * MessageUserInbox Model
 *
 * @property Message $Message
 * @property User $User
 */
class MessageUserInbox extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'message_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
			),
		),
		'trackingid' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'user_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
			),
		),
		'status' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'created_by' => array(
			'uuid' => array(
				'rule' => array('uuid'),
			),
		),
		'modified_by' => array(
			'uuid' => array(
				'rule' => array('uuid'),
			),
		),
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Message' => array(
			'className' => 'Message',
			'foreignKey' => 'message_id',
			'conditions' => '',
			'fields' => array('id', 'subject', 'created_by', 'trackingid'),
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => array('id', 'name'),
			'order' => ''
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => array('id', 'name'),
			'order' => ''
		)
	);
}
