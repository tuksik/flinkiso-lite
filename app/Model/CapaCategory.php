<?php
App::uses('AppModel', 'Model');
/**
 * CapaCategory Model
 *
 * @property SystemTable $SystemTable
 * @property MasterListOfFormat $MasterListOfFormat
 * @property CorrectivePreventiveAction $CorrectivePreventiveAction
 */
class CapaCategory extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sr_no' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'branchid' => array(
			'uuid' => array(
				'rule' => array('uuid'),
			),
		),
		'departmentid' => array(
			'uuid' => array(
				'rule' => array('uuid'),
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
                'ApprovedBy' => array(
                        'className' => 'Employee',
                        'foreignKey' => 'approved_by',
                        'conditions' => '',
                        'fields' => array('id', 'name'),
                        'order' => ''
                ),
                'PreparedBy' => array(
                        'className' => 'Employee',
                        'foreignKey' => 'prepared_by',
                        'conditions' => '',
                        'fields' => array('id', 'name'),
                        'order' => ''
                ),
		'SystemTable' => array(
			'className' => 'SystemTable',
			'foreignKey' => 'system_table_id',
			'conditions' => '',
			'fields' => array('id', 'name'),
			'order' => ''
		),
		'MasterListOfFormat' => array(
			'className' => 'MasterListOfFormat',
			'foreignKey' => 'master_list_of_format_id',
			'conditions' => '',
			'fields' => array('id', 'title', 'system_table_id'),
			'order' => ''
		),
		'BranchIds' => array(
			'className' => 'Branch',
			'foreignKey' => 'branchid',
			'conditions' => '',
			'fields' => array('id', 'name'),
			'order' => ''
		),
		'DepartmentIds' => array(
			'className' => 'Department',
			'foreignKey' => 'departmentid',
			'conditions' => '',
			'fields' => array('id', 'name'),
			'order' => ''
		),
		'StatusUserId' => array(
			'className' => 'User',
			'foreignKey' => 'status_user_id',
			'conditions' => '',
			'fields' => array('id', 'name'),
			'order' => ''
		)
	);

}
