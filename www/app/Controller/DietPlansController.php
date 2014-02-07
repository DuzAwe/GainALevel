<?php
	class DietPlansController extends AppController {

		public $helpers = array('Html', 'Form');

		public function index(){

		/*----- Collecting data from users table in order of ascending id -----*/

			$this->set('users', $this->User->find('all', array(
				'order' => array('User.id ASC'))
			));
			$this->User->recursive = 0;
			
		/*----- Collect all data from posts table -----*/

			$this->User->Post->find('all'); 

		/*----- Adding user to the database -----*/

			if ($this->request->is('post')) {
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been saved'));
					return $this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(
					__('The user could not be saved. Please, try again.')
				);
			}

		}

		public function login() {
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					return $this->redirect($this->Auth->redirect());
				}
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}

		public function logout() {
			return $this->redirect($this->Auth->logout());
		}
	}
?>