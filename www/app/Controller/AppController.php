<?php

class AppController extends Controller {
    public $components = array(
        'Session',
        'Auth'=>array(
            'loginRedirect'=>array('controller'=>'users', 'action'=>'logincomplete'),
            'logoutRedirect'=>array('controller'=>'users', 'action'=>'index'),
            'authError'=>"You can't access that page",
            'authorize'=>array('Controller'),
            'authenticate' => array(
				'Form' => array(
					'fields' => array('username' => 'email')
				)
            )
        )
    );
    
    public function isAuthorized($user) {
        return true;
    }
    
    public function beforeFilter() {
        $this->Auth->allow('index', 'signup_setup', 'login', 'signup_step', 'plan', 'jason');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }
    
    
}
