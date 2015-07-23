<?php
App::uses('AppModel', 'Model');
/**
 * MaterialQualityCheckDetail Model
 *
 * @property Employee $Employee
 * @property SystemTable $SystemTable
 * @property MasterListOfFormat $MasterListOfFormat
 * @property Company $Company
 */
class MaterialQualityCheckDetail extends AppModel {

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
		'material_quality_check' => array(
			'uuid' => array(
				'rule' => array('uuid'),
			),
		),
		'employee_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
			),
		),
		'check_performed_date' => array(
			'uuid' => array(
				'rule' => array('uuid'),
			),
		),
		'quantity_received' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'quantity_accepted' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
                        'order' => '' ),
                'PreparedBy' => array(
                        'className' => 'Employee',
                        'foreignKey' => 'prepared_by',
                        'conditions' => '',
                        'fields' => array('id', 'name'),
                        'order' => ''
                    ),
                'MaterialQualityCheck' => array(
			'className' => 'MaterialQualityCheck',
			'foreignKey' => 'material_quality_check_id',
			'conditions' => '',
			'fields' => array('id', 'name'),
			'order' => ''
		),
                'DeliveryChallan' => array(
			'className' => 'DeliveryChallan',
			'foreignKey' => 'delivery_challan_id',
			'conditions' => '',
			'fields' => array('id', 'challan_number', 'name','supplier_registration_id'),
			'order' => ''
		),
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
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
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => array('id', 'name'),
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
