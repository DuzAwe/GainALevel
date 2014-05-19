<?php

	App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

	class Performance extends AppModel {
		
		public $hasOne = array(
		'User' => array(
			'foreignKey' => false,
			'conditions' => array('User.id' => 6)
		)
	);

		
	}
?>
