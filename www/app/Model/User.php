<?php

	App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

	class User extends AppModel {

		public $hasOne = array(
			'Post' => array(
				'foreignKey' => false,
				'conditions' => array('User.book = Post.book_id')
			)
		);

		public $validate = array(
			'firstname' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Please enter your firstname'
				)
			),
			'lastname' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Please enter your lastname'
				)
			),
			'password' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'A password is required'
				)
			),
			'email' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'An email is required'
				)
			),
			'birthday' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Please enter your Date of Birth'
				)
			),
			'height' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Please enter your height'
				)
			),
			'weight' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Please enter your weight'
				)
			),
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