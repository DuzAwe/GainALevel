<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public $hasOne = array(
		'Plan' => array(
			'foreignKey' => false,
			'conditions' => array('User.workoutplan = Plan.id')
		),
		'Dietplan' => array(
			'foreignKey' => false,
			'conditions' => array('User.dietplan = Dietplan.id')
		),
		'Outcome' => array(
			'foreignKey' => false,
			'conditions' => array('User.outcome = Outcome.id')
		),
		'Gender' => array(
			'foreignKey' => false,
			'conditions' => array('User.gender = Gender.id')
		)
	);

	var $validate = array(
		'firstname' => array(
			'rule' => 'notEmpty',
			'message' => 'Required Field'
		),
		'lastname' => array(
			'rule' => 'notEmpty',
			'message' => 'Required Field'
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Please enter a vaild email'
			),
			'uniqueEmail' => array(
				'rule' => 'isUnique',
				'message' => 'This email has already been used'
			)
		),
		'password' => array(
			'rule' => array('minLength', 6),
			'message' => 'Minimum six characters please'
		),
		'height' => array(
			'rule' => 'notEmpty',
			'message' => 'Required Field'
		),
		'birthday' => array(
			'rule' => 'notEmpty',
			'message' => 'Required Field'
		),
		'height' => array(
			'rule' => 'notEmpty',
			'message' => 'Required Field'
		),
		'weight' => array(
			'rule' => 'notEmpty',
			'message' => 'Required Field'
		),
		'outcome' => array(
			'rule' => 'notEmpty',
			'message' => 'Required Field'
		),
		'workoutplan' => array(
			'rule' => 'notEmpty',
			'message' => 'Required Field'
		),
		'dietplan' => array(
			'rule' => 'notEmpty',
			'message' => 'Required Field'
		)
	);

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}

}
?>
