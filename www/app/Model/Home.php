<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Home extends AppModel {

	public $hasOne = array(
		'User' => array(
			'foreignKey' => false,
		),
	);
}
?>