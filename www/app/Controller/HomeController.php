<?php
	class HomeController extends AppController {

		public $helpers = array('Html', 'Form');

		public function beforeFilter() {
			$this->theme = 'Foundation';
		}

		public function beforeRender() {
			parent::beforeRender();
			$params = $this->Session->read('form.params');
			$this->set('params', $params);
		}

		public function index(){

			$this->set('users', $this->Home->User->find('all', array(
				'order' => array('User.id ASC'))
			));

			$this->Session->delete('form');;

			$this->Home->User->Outcome->find('all');
			$this->Home->User->Dietplan->find('all');

		}

		public function msf_setup() {
			App::uses('Folder', 'Utility');
			$usersViewFolder = new Folder(APP.'View'.DS.'Users');
			$steps = count($usersViewFolder->find('msf_step_.*\.ctp'));
			$this->Session->write('form.params.steps', $steps);
			$this->Session->write('form.params.maxProgress', 0);
			$this->redirect(array('action' => 'msf_step', 1));
			$this->layout = 'setup';
		}

		public function msf_step($stepNumber) {
		
			$this->layout = 'setup';

			$outcomedata = $this->Home->User->Outcome->find('list', array('fields' => array('id', 'outcomename')));
			$this->set('outcome', $outcomedata);

			$dietdata = $this->Home->User->Dietplan->find('list', array('fields' => array('id', 'dietname')));
			$this->set('diet', $dietdata);

			$workoutdata = $this->Home->User->Plan->find('list', array('fields' => array('id', 'planname')));
			$this->set('workout', $workoutdata);

			/**
			 * check if a view file for this step exists, otherwise redirect to index
			 */
			if (!file_exists(APP.'View'.DS.'Users'.DS.'msf_step_'.$stepNumber.'.ctp')) {
				$this->redirect('/home/index');
			}
			
			/**
			 * determines the max allowed step (the last completed + 1)
			 * if choosen step is not allowed (URL manually changed) the user gets redirected
			 * otherwise we store the current step value in the session
			 */
			$maxAllowed = $this->Session->read('form.params.maxProgress') + 1;
			if ($stepNumber > $maxAllowed) {
				$this->redirect('/home/msf_step/'.$maxAllowed);
			} else {
				$this->Session->write('form.params.currentStep', $stepNumber);
			}
			
			/**
			 * check if some data has been submitted via POST
			 * if not, sets the current data to the session data, to automatically populate previously saved fields
			 */
			if ($this->request->is('post')) {
				
				/**
				 * set passed data to the model, so we can validate against it without saving
				 */
				$this->Home->User->set($this->request->data);
				
				/**
				 * if data validates we merge previous session data with submitted data, using CakePHP powerful Hash class (previously called Set)
				 */
				if ($this->Home->User->validates()) {
					$prevSessionData = $this->Session->read('form.data');
					$currentSessionData = Hash::merge( (array) $prevSessionData, $this->request->data);
					
					/**
					 * if this is not the last step we replace session data with the new merged array
					 * update the max progress value and redirect to the next step
					 */
					if ($stepNumber < $this->Session->read('form.params.steps')) {
						$this->Session->write('form.data', $currentSessionData);
						$this->Session->write('form.params.maxProgress', $stepNumber);
						$this->redirect(array('action' => 'msf_step', $stepNumber+1));
					} else {
						/**
						 * otherwise, this is the final step, so we have to save the data to the database
						 */
						$this->Home->User->save($currentSessionData);
						$this->Session->setFlash('Account created!');
						$this->redirect('/home/index');
					}
				}
			} else {
				$this->request->data = $this->Session->read('form.data');
			}
			
			/**
			 * here we load the proper view file, depending on the stepNumber variable passed via GET
			 */
			$this->render('msf_step_'.$stepNumber);
		}

		public function login(){
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