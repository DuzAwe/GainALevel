<?php
	class BodybuildingplansController extends AppController {

		public $helpers = array('Html', 'Form');

		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('add', 'logout', 'login');
			$this->theme = 'Foundation';
		}

		public function index(){

			$this->set('users', $this->Bodybuildingplan->find('all', array(
				'order' => array('User.id ASC'))
			));
			$this->Bodybuildingplan->recursive = 0;

			$this->Bodybuildingplan->User->find('all');

			$this->Bodybuildingplan->Post->find('all');

			/*----- Adding user to the database -----*/

			if ($this->request->is('post')) {
				$this->Bodybuildingplan->User->create();
				if ($this->Bodybuildingplan->User->save($this->request->data)) {
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