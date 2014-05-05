<?php
class UsersController extends AppController {

	public $name = 'Users';
	public $theme = 'Foundation';
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('add');
	}
	
	public function beforeRender() {
		parent::beforeRender();
		$params = $this->Session->read('form.params');
		$this->set('params', $params);
	}
	
	public function isAuthorized($user) {
	    if (in_array($this->action, array('edit', 'delete'))) {
	        if ($user['id'] != $this->request->params['pass'][0]) {
	            return false;
	        }
	    }
	    return true;
	}
	
	public function login() {
		$this->layout = 'setup';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());   
	        } else {
	            $this->Session->setFlash('Your email/password combination was incorrect');
	        }
	    }
	}
	
	public function logout() {
	    $this->redirect($this->Auth->logout());
	}
	
    public function index() {
		$this->layout = 'index';
		$this->User->recursive = 0;
		$this->Session->delete('form');
		
		$this->User->bindModel(array(
			'hasOne' => array(
				'Outcome' => array(
					'foreignKey' => false,
					'conditions' =>array('User.outcome = Outcome.user_id')
					),
				'Dietplan' => array(
					'foreignKey' => false,
					'conditions' =>array('User.dietplan = Dietplan.user_id')
					)
			)
		), false);
		
		$this->set('users', $this->User->find('all', array(
			'order' => 'User.id ASC')));
	}
	
	public function add() {
		$this->layout = 'setup';
		if ($this->request->is('post')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
	}
	
	public function performance() {
	    $this->layout = 'index';
		
		$this->User->bindModel(array(
			'hasOne' => array(
				'Calories' => array(
					'foreignKey' => false,
					'conditions' =>array('User.id = Calories.user_id')
					)
			)
		));
		
		$this->set('userCal', $this->User->find('all', array(
			'conditions' => array(
				'User.id = Calories.user_id',
				'Calories.datecompleted <=' => date('Y-m-d')
			),
			'order' => array('Calories.datecompleted' => 'DESC'),
			'limit' => 1
		)));
		
		$this->User->bindModel(array(
			'hasOne' => array(
				'Sleep' => array(
					'foreignKey' => false,
					'conditions' =>array('User.id = Sleep.user_id')
					)
			)
		));
		
		$this->set('userSleep', $this->User->find('all', array(
			'conditions' => array(
				'User.id = Sleep.user_id',
				'Sleep.datecompleted <=' => date('Y-m-d')
			),
			'order' => array('Sleep.datecompleted' => 'DESC'),
			'limit' => 1
		)));
		
		$this->User->bindModel(array(
			'hasOne' => array(
				'Performance' => array(
					'foreignKey' => false,
					'conditions' =>array('User.id = Performance.user_id')
					)
			)
		), false);
		
		$this->set('oneWeekPress', $this->User->find('all', array(
			'conditions' => array(
				'User.id = Performance.user_id',
				'Performance.datecompleted <=' => date('Y-m-d')
			),
			'order' => array('Performance.datecompleted' => 'DESC'),
				'limit' => 1
			)));
		
		$this->User->bindModel(array(
			'hasOne' => array(
				'Performance' => array(
					'foreignKey' => false,
					'conditions' =>array('User.id = Performance.user_id')
					)
			)
		), false);
		
		$this->set('oneWeekPress', $this->User->find('all', array(
			'conditions' => array(
				'User.id = Performance.user_id',
				'Performance.datecompleted <=' => date('Y-m-d')
			),
			'order' => array('Performance.datecompleted' => 'DESC'),
				'limit' => 1
			)));
		$this->set('twoWeekPress', $this->User->find('all', array(
			'conditions' => array(
				'User.id = Performance.user_id',
				'Performance.datecompleted <=' => date('Y-m-d', strtotime("-1 week"))
			),
			'order' => array('Performance.datecompleted' => 'DESC'),
				'limit' => 1
			)));
		$this->set('threeWeekPress', $this->User->find('all', array(
			'conditions' => array(
				'User.id = Performance.user_id',
				'Performance.datecompleted <=' => date('Y-m-d', strtotime("-2 week"))
			),
			'order' => array('Performance.datecompleted' => 'DESC'),
				'limit' => 1
			)));
		$this->set('fourWeekPress', $this->User->find('all', array(
			'conditions' => array(
				'User.id = Performance.user_id',
				'Performance.datecompleted <=' => date('Y-m-d', strtotime("-3 week"))
			),
			'order' => array('Performance.datecompleted' => 'DESC'),
				'limit' => 1
			)));
		
	}
	
	public function beginner() {
	    $this->layout = 'plan';
	}
	
	public function intermediate() {
	    $this->layout = 'plan';
	}
	
	public function advanced() {
	    $this->layout = 'plan';
	}
	
	public function plan() {
	    $this->layout = 'plan';
	}
	
	public function logincomplete() {
	    $this->layout = 'setup';
	}
	
	public function track() {
	    $this->layout = 'index';
	    
	    $userId = $this->Auth->user('id');
	    
		$this->User->bindModel(array(
			'hasOne' => array(
				'Performance' => array(
					'foreignKey' => false
				)
			)
		));
		
		if ($this->request->is('post')) {
			if ($this->User->Performance->save($this->request->data)) {
				$this->Session->setFlash('Your workout has been saved');
				$this->redirect(array('action' => 'performance'));
			} else {
				$this->Session->setFlash('Your workout could not be saved. Please, try again.');
			}
		}
		
		$this->User->bindModel(array(
			'hasOne' => array(
				'Starting_strength' => array(
					'foreignKey' => false
					)
			)
		));
		
		$this->set('planData', $this->User->find('all'));
		
		$this->set('trackIndividual', $this->User->find('all'));
		
	    $this->User->bindModel(array(
			'hasOne' => array(
				'Performance' => array(
					'foreignKey' => false,
					'conditions' =>array('User.id = Performance.user_id')
					)
			)
		), false);
	    
	    $this->set('userTrack', $this->User->find('all', array(
			'conditions' => array(
				'Performance.user_id' => $userId
			),
			'order' => array('Performance.datecompleted' => 'DESC'),
			'limit' => 1
		)));

	}
	
	public function calories() {
	    $this->layout = 'index';
	    
	    $this->User->bindModel(array(
			'hasOne' => array(
				'Calories' => array(
					'foreignKey' => false
				)
			)
		));
		
		if ($this->request->is('post')) {
			if ($this->User->Calories->save($this->request->data)) {
				$this->Session->setFlash('Your calories have been saved');
				$this->redirect(array('action' => 'performance'));
			} else {
				$this->Session->setFlash('Your calories could not be saved. Please, try again.');
			}
		}
	}
	
	public function sleep() {
	    $this->layout = 'index';
	    
	    $this->User->bindModel(array(
			'hasOne' => array(
				'Sleep' => array(
					'foreignKey' => false
				)
			)
		));
		
		if ($this->request->is('post')) {
			if ($this->User->Sleep->save($this->request->data)) {
				$this->Session->setFlash('Your hours slept have been saved');
				$this->redirect(array('action' => 'performance'));
			} else {
				$this->Session->setFlash('Your hours slept could not be saved. Please, try again.');
			}
		}
	}
	
	public function signup_setup() {
		App::uses('Folder', 'Utility');
		$usersViewFolder = new Folder(APP.'View'.DS.'Users');
		$steps = count($usersViewFolder->find('signup_step_.*\.ctp'));
		$this->Session->write('form.params.steps', $steps);
		$this->Session->write('form.params.maxProgress', 0);
		$this->redirect(array('action' => 'signup_step', 1));
		$this->layout = 'setup';
	}

	public function signup_step($stepNumber) {
	
		$this->layout = 'setup';

		$this->User->bindModel(array(
			'hasOne' => array(
				'Outcome' => array(
					'foreignKey' => false,
					'conditions' =>array('User.outcome = Outcome.user_id')
					),
				'Dietplan' => array(
					'foreignKey' => false,
					'conditions' =>array('User.dietplan = Dietplan.user_id')
					)
			)
		), false);

		$outcomedata = $this->User->Outcome->find('list', array('fields' => array('user_id', 'outcomename')));
		$this->set('outcome', $outcomedata);

		$dietdata = $this->User->Dietplan->find('list', array('fields' => array('user_id', 'dietname')));
		$this->set('diet', $dietdata);

		//------------ check if a view file for this step exists, otherwise redirect to index ------------//
		
		if (!file_exists(APP.'View'.DS.'Users'.DS.'signup_step_'.$stepNumber.'.ctp')) {
			$this->redirect('/users/index');
		}
		
		//------------ determines the max allowed step (the last completed + 1) ------------//
		//------------ if choosen step is not allowed (URL manually changed) the user gets redirected ------------//
		//------------ otherwise we store the current step value in the session ------------//

		$maxAllowed = $this->Session->read('form.params.maxProgress') + 1;
		if ($stepNumber > $maxAllowed) {
			$this->redirect('/users/signup_step/'.$maxAllowed);
		} else {
			$this->Session->write('form.params.currentStep', $stepNumber);
		}
		
		 //------------ check if some data has been submitted via POST ------------//
		 //------------ if not, sets the current data to the session data, to automatically populate previously saved fields ------------//

		if ($this->request->is('post')) {
			
			 //------------  set passed data to the model, so we can validate against it without saving ------------//

			$this->User->set($this->request->data);
			
			 //------------ if data validates we merge previous session data with submitted data, using CakePHP powerful Hash class (previously called Set) ------------//

			if ($this->User->validates()) {
				$prevSessionData = $this->Session->read('form.data');
				$currentSessionData = Hash::merge( (array) $prevSessionData, $this->request->data);
				
				
				
				 //------------ if this is not the last step we replace session data with the new merged array ------------//
				 //------------ update the max progress value and redirect to the next step ------------//

				if ($stepNumber < $this->Session->read('form.params.steps')) {
					$this->Session->write('form.data', $currentSessionData);
					$this->Session->write('form.params.maxProgress', $stepNumber);
					$this->redirect(array('action' => 'signup_step', $stepNumber+1));

				} else {

					 //------------ otherwise, this is the final step, so we have to save the data to the database ------------//

					if ($this->User->save($currentSessionData)){
						$id = $this->User->id;
						$currentSessionData['User'] = array_merge(
							$currentSessionData['User'],
							array('id' => $id)
						);
						$this->Auth->login($currentSessionData['User']);
						return $this->redirect(array('action'=>'signup_complete', $currentSessionData['User']['id']));
					}
				}
			}
		} else {
			$this->request->data = $this->Session->read('form.data');
		}
		
		 //------------ here we load the proper view file, depending on the stepNumber variable passed via GET ------------//

		$this->render('signup_step_'.$stepNumber);
		
		
	}
	
	public function signup_complete($id = null) {
		
		$this->layout = 'setup';

		//------------ User Weights ------------//

		$maleWeight=array( "50", "50", "50", "50", "50", "50", "50", "50", "50","50", "50", "50", "50", "50", "50", "50", "50", "50", "50", "50","50", "50", "50", "50", "50", "50", "50", "50", "50", "50","50", "50", "50", "50", "50", "50", "50", "50", "50", "50","50", "50", "50", "50", "50", "50", "50", "50", "50", "50","50", "50", "52", "52", "52", "52", "56", "56", "56", "56","60", "60", "60", "60", "60", "60", "60", "67", "67", "67","67", "67", "67", "67", "67", "75", "75", "75", "75", "75","75", "75", "82", "82", "82", "82", "82", "82", "82", "82","90", "90", "90", "90", "90", "90", "90", "90", "90", "90", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "110", "110", "110", "110", "110", "110", "110", "110", "110", "110", "110", "110", "110", "110", "110", "125", "125", "125", "125", "125","125", "125", "125", "125", "125", "125", "125", "125", "125", "125","125", "125", "125", "125", "125", "145", "145", "145", "145", "145","145", "145", "145", "145", "145", "145", "145", "145");
		$femaleWeight=array( "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", "44","44", "44", "44", "44", "44", "44", "44", "44", "44", "44","44", "44", "44", "44", "44", "44", "44", "44", "44", "44","44", "44", "44", "44", "44", "44", "44", "44", "48", "48","48", "48", "52", "52", "52", "52", "56", "56", "56", "56","60", "60", "60", "60", "60", "60", "60", "67", "67", "67","67", "67", "67", "67", "67", "75", "75", "75", "75", "75","75", "75", "82", "82", "82", "82", "82", "82", "82", "82","90", "90", "90", "90", "90", "90", "90", "90", "90", "90","90", "90", "90", "90", "90", "90", "90", "90", "90", "90","90", "90", "90", "90", "90", "90", "90", "90", "90", "90","90", "90", "90", "90", "90", "90", "90", "90", "90", "90","90", "90", "90", "90", "90", "90", "90", "90", "90", "90","90", "90", "90", "90", "90", "90", "90", "90", "90", "90","90", "90", "90", "90", "90", "90", "90", "90");
		
		//------------ Male Lift Weights ------------//
		
		$malePress=array( "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "25", "25", "27.5", "27.5", "27.5", "30", "30", "30", "32.5", "32.5", "35", "35", "37.5", "37.5", "37.5", "40", "40", "42.5", "42.5", "42.5", "45", "45", "47.5", "47.5", "47.5", "50", "50", "50", "52.5", "52.5", "55", "55", "57.5", "57.5", "57.5", "60", "60", "62.5", "62.5", "62.5", "65", "65", "67.5", "67.5", "67.5", "70", "70", "70", "72.5", "72.5", "75", "75", "77.5", "77.5", "77.5", "80", "80", "82.5", "82.5", "82.5", "85", "85", "87.5", "87.5", "87.5", "90", "90", "90", "92.5", "92.5", "95", "95", "97.5", "97.5", "97.5", "100", "100", "102.5", "102.5", "102.5", "105", "105", "107.5", "107.5", "107.5", "110", "110", "110", "112.5", "112.5", "115", "115", "117.5", "117.5", "117.5", "120", "120", "122.5", "122.5", "122.5", "125", "125", "127.5", "127.5", "127.5", "130", "130", "130", "132.5", "132.5", "135", "135", "137.5", "137.5", "137.5", "140", "140", "142.5", "142.5", "142.5", "145", "145", "147.5", "147.5", "147.5", "150", "150", "150", "152.5", "152.5", "155", "155", "157.5", "157.5", "157.5", "160", "160", "162.5", "162.5", "162.5", "165", "165", "167.5", "167.5", "167.5", "170", "170", "170", "172.5", "172.5", "175", "175", "177.5", "177.5", "177.5", "180", "180", "182.5", "182.5", "182.5", "185", "185", "187.5", "187.5", "187.5", "190", "190", "190", "192.5", "192.5", "195", "195", "197.5", "197.5", "197.5", "200", "200", "202.5", "202.5", "202.5", "205", "205", "207.5", "207.5", "207.5", "210", "210", "210", "212.5", "212.5", "215", "215", "217.5", "217.5", "217.5", "220", "220", "222.5", "222.5", "222.5", "225", "225", "227.5", "227.5", "227.5", "230", "230", "230", "232.5", "232.5", "235", "235", "237.5", "237.5", "237.5", "240", "240", "242.5", "242.5", "242.5", "245", "245", "247.5", "247.5", "247.5", "250", "250", "250", "252.5", "252.5", "255", "255", "257.5", "257.5", "257.5", "260", "260", "262.5", "262.5", "262.5", "265", "265", "267.5", "267.5", "267.5", "270", "270", "270", "272.5", "272.5", "275", "275", "277.5", "277.5", "277.5", "280", "280", "282.5", "282.5", "282.5", "285", "285", "287.5", "287.5", "287.5", "290", "290", "290", "292.5", "292.5", "295", "295", "297.5", "297.5", "297.5", "300");
		$maleBench=array( "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "37.5", "40", "40", "42.5", "42.5", "42.5", "45", "45", "47.5", "47.5", "47.5", "50", "50", "50", "52.5", "52.5", "55", "55", "57.5", "57.5", "57.5", "60", "60", "62.5", "62.5", "62.5", "65", "65", "67.5", "67.5", "67.5", "70", "70", "70", "72.5", "72.5", "75", "75", "77.5", "77.5", "77.5", "80", "80", "82.5", "82.5", "82.5", "85", "85", "87.5", "87.5", "87.5", "90", "90", "90", "92.5", "92.5", "95", "95", "97.5", "97.5", "97.5", "100", "100", "102.5", "102.5", "102.5", "105", "105", "107.5", "107.5", "107.5", "110", "110", "110", "112.5", "112.5", "115", "115", "117.5", "117.5", "117.5", "120", "120", "122.5", "122.5", "122.5", "125", "125", "127.5", "127.5", "127.5", "130", "130", "130", "132.5", "132.5", "135", "135", "137.5", "137.5", "137.5", "140", "140", "142.5", "142.5", "142.5", "145", "145", "147.5", "147.5", "147.5", "150", "150", "150", "152.5", "152.5", "155", "155", "157.5", "157.5", "157.5", "160", "160", "162.5", "162.5", "162.5", "165", "165", "167.5", "167.5", "167.5", "170", "170", "170", "172.5", "172.5", "175", "175", "177.5", "177.5", "177.5", "180", "180", "182.5", "182.5", "182.5", "185", "185", "187.5", "187.5", "187.5", "190", "190", "190", "192.5", "192.5", "195", "195", "197.5", "197.5", "197.5", "200", "200", "202.5", "202.5", "202.5", "205", "205", "207.5", "207.5", "207.5", "210", "210", "210", "212.5", "212.5", "215", "215", "217.5", "217.5", "217.5", "220", "220", "222.5", "222.5", "222.5", "225", "225", "227.5", "227.5", "227.5", "230", "230", "230", "232.5", "232.5", "235", "235", "237.5", "237.5", "237.5", "240", "240", "242.5", "242.5", "242.5", "245", "245", "247.5", "247.5", "247.5", "250", "250", "250", "252.5", "252.5", "255", "255", "257.5", "257.5", "257.5", "260", "260", "262.5", "262.5", "262.5", "265", "265", "267.5", "267.5", "267.5", "270", "270", "270", "272.5", "272.5", "275", "275", "277.5", "277.5", "277.5", "280", "280", "282.5", "282.5", "282.5", "285", "285", "287.5", "287.5", "287.5", "290", "290", "290", "292.5", "292.5", "295", "295", "297.5", "297.5", "297.5", "300");		
		$maleDeadlift=array( "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "42.5", "45", "45", "47.5", "47.5", "47.5", "50", "50", "50", "52.5", "52.5", "55", "55", "57.5", "57.5", "57.5", "60", "60", "62.5", "62.5", "62.5", "65", "65", "67.5", "67.5", "67.5", "70", "70", "70", "72.5", "72.5", "75", "75", "77.5", "77.5", "77.5", "80", "80", "82.5", "82.5", "82.5", "85", "85", "87.5", "87.5", "87.5", "90", "90", "90", "92.5", "92.5", "95", "95", "97.5", "97.5", "97.5", "100", "100", "102.5", "102.5", "102.5", "105", "105", "107.5", "107.5", "107.5", "110", "110", "110", "112.5", "112.5", "115", "115", "117.5", "117.5", "117.5", "120", "120", "122.5", "122.5", "122.5", "125", "125", "127.5", "127.5", "127.5", "130", "130", "130", "132.5", "132.5", "135", "135", "137.5", "137.5", "137.5", "140", "140", "142.5", "142.5", "142.5", "145", "145", "147.5", "147.5", "147.5", "150", "150", "150", "152.5", "152.5", "155", "155", "157.5", "157.5", "157.5", "160", "160", "162.5", "162.5", "162.5", "165", "165", "167.5", "167.5", "167.5", "170", "170", "170", "172.5", "172.5", "175", "175", "177.5", "177.5", "177.5", "180", "180", "182.5", "182.5", "182.5", "185", "185", "187.5", "187.5", "187.5", "190", "190", "190", "192.5", "192.5", "195", "195", "197.5", "197.5", "197.5", "200", "200", "202.5", "202.5", "202.5", "205", "205", "207.5", "207.5", "207.5", "210", "210", "210", "212.5", "212.5", "215", "215", "217.5", "217.5", "217.5", "220", "220", "222.5", "222.5", "222.5", "225", "225", "227.5", "227.5", "227.5", "230", "230", "230", "232.5", "232.5", "235", "235", "237.5", "237.5", "237.5", "240", "240", "242.5", "242.5", "242.5", "245", "245", "247.5", "247.5", "247.5", "250", "250", "250", "252.5", "252.5", "255", "255", "257.5", "257.5", "257.5", "260", "260", "262.5", "262.5", "262.5", "265", "265", "267.5", "267.5", "267.5", "270", "270", "270", "272.5", "272.5", "275", "275", "277.5", "277.5", "277.5", "280", "280", "282.5", "282.5", "282.5", "285", "285", "287.5", "287.5", "287.5", "290", "290", "290", "292.5", "292.5", "295", "295", "297.5", "297.5", "297.5", "300");		
		$maleSquat=array( "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "35", "37.5", "37.5", "37.5", "40", "40", "42.5", "42.5", "42.5", "45", "45", "47.5", "47.5", "47.5", "50", "50", "50", "52.5", "52.5", "55", "55", "57.5", "57.5", "57.5", "60", "60", "62.5", "62.5", "62.5", "65", "65", "67.5", "67.5", "67.5", "70", "70", "70", "72.5", "72.5", "75", "75", "77.5", "77.5", "77.5", "80", "80", "82.5", "82.5", "82.5", "85", "85", "87.5", "87.5", "87.5", "90", "90", "90", "92.5", "92.5", "95", "95", "97.5", "97.5", "97.5", "100", "100", "102.5", "102.5", "102.5", "105", "105", "107.5", "107.5", "107.5", "110", "110", "110", "112.5", "112.5", "115", "115", "117.5", "117.5", "117.5", "120", "120", "122.5", "122.5", "122.5", "125", "125", "127.5", "127.5", "127.5", "130", "130", "130", "132.5", "132.5", "135", "135", "137.5", "137.5", "137.5", "140", "140", "142.5", "142.5", "142.5", "145", "145", "147.5", "147.5", "147.5", "150", "150", "150", "152.5", "152.5", "155", "155", "157.5", "157.5", "157.5", "160", "160", "162.5", "162.5", "162.5", "165", "165", "167.5", "167.5", "167.5", "170", "170", "170", "172.5", "172.5", "175", "175", "177.5", "177.5", "177.5", "180", "180", "182.5", "182.5", "182.5", "185", "185", "187.5", "187.5", "187.5", "190", "190", "190", "192.5", "192.5", "195", "195", "197.5", "197.5", "197.5", "200", "200", "202.5", "202.5", "202.5", "205", "205", "207.5", "207.5", "207.5", "210", "210", "210", "212.5", "212.5", "215", "215", "217.5", "217.5", "217.5", "220", "220", "222.5", "222.5", "222.5", "225", "225", "227.5", "227.5", "227.5", "230", "230", "230", "232.5", "232.5", "235", "235", "237.5", "237.5", "237.5", "240", "240", "242.5", "242.5", "242.5", "245", "245", "247.5", "247.5", "247.5", "250", "250", "250", "252.5", "252.5", "255", "255", "257.5", "257.5", "257.5", "260", "260", "262.5", "262.5", "262.5", "265", "265", "267.5", "267.5", "267.5", "270", "270", "270", "272.5", "272.5", "275", "275", "277.5", "277.5", "277.5", "280", "280", "282.5", "282.5", "282.5", "285", "285", "287.5", "287.5", "287.5", "290", "290", "290", "292.5", "292.5", "295", "295", "297.5", "297.5", "297.5", "300");		
		
		//------------ Female Lift Weights ------------//
		
		$femalePress=array( "15", "15", "15", "15", "15", "15", "15", "15", "15", "15", "15", "15", "15", "15", "15", "15", "15", "17.5", "17.5", "17.5", "20", "20", "20", "22.5", "22.5", "25", "25", "27.5", "27.5", "27.5", "30", "30", "30", "32.5", "32.5", "35", "35", "37.5", "37.5", "37.5", "40", "40", "42.5", "42.5", "42.5", "45", "45", "47.5", "47.5", "47.5", "50", "50", "50", "52.5", "52.5", "55", "55", "57.5", "57.5", "57.5", "60", "60", "62.5", "62.5", "62.5", "65", "65", "67.5", "67.5", "67.5", "70", "70", "70", "72.5", "72.5", "75", "75", "77.5", "77.5", "77.5", "80", "80", "82.5", "82.5", "82.5", "85", "85", "87.5", "87.5", "87.5", "90", "90", "90", "92.5", "92.5", "95", "95", "97.5", "97.5", "97.5", "100", "100", "102.5", "102.5", "102.5", "105", "105", "107.5", "107.5", "107.5", "110", "110", "110", "112.5", "112.5", "115", "115", "117.5", "117.5", "117.5", "120", "120", "122.5", "122.5", "122.5", "125", "125", "127.5", "127.5", "127.5", "130", "130", "130", "132.5", "132.5", "135", "135", "137.5", "137.5", "137.5", "140", "140", "142.5", "142.5", "142.5", "145", "145", "147.5", "147.5", "147.5", "150", "150", "150", "152.5", "152.5", "155", "155", "157.5", "157.5", "157.5", "160", "160", "162.5", "162.5", "162.5", "165", "165", "167.5", "167.5", "167.5", "170", "170", "170", "172.5", "172.5", "175", "175", "177.5", "177.5", "177.5", "180", "180", "182.5", "182.5", "182.5", "185", "185", "187.5", "187.5", "187.5", "190", "190", "190", "192.5", "192.5", "195", "195", "197.5", "197.5", "197.5", "200", "200", "202.5", "202.5", "202.5", "205", "205", "207.5", "207.5", "207.5", "210", "210", "210", "212.5", "212.5", "215", "215", "217.5", "217.5", "217.5", "220", "220", "222.5", "222.5", "222.5", "225", "225", "227.5", "227.5", "227.5", "230", "230", "230", "232.5", "232.5", "235", "235", "237.5", "237.5", "237.5", "240", "240", "242.5", "242.5", "242.5", "245", "245", "247.5", "247.5", "247.5", "250", "250", "250", "252.5", "252.5", "255", "255", "257.5", "257.5", "257.5", "260", "260", "262.5", "262.5", "262.5", "265", "265", "267.5", "267.5", "267.5", "270", "270", "270", "272.5", "272.5", "275", "275", "277.5", "277.5", "277.5", "280", "280", "282.5", "282.5", "282.5", "285", "285", "287.5", "287.5", "287.5", "290", "290", "290", "292.5", "292.5", "295", "295", "297.5", "297.5", "297.5", "300");
		$femaleBench=array( "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "22.5", "25", "25", "27.5", "27.5", "27.5", "30", "30", "30", "32.5", "32.5", "35", "35", "37.5", "37.5", "37.5", "40", "40", "42.5", "42.5", "42.5", "45", "45", "47.5", "47.5", "47.5", "50", "50", "50", "52.5", "52.5", "55", "55", "57.5", "57.5", "57.5", "60", "60", "62.5", "62.5", "62.5", "65", "65", "67.5", "67.5", "67.5", "70", "70", "70", "72.5", "72.5", "75", "75", "77.5", "77.5", "77.5", "80", "80", "82.5", "82.5", "82.5", "85", "85", "87.5", "87.5", "87.5", "90", "90", "90", "92.5", "92.5", "95", "95", "97.5", "97.5", "97.5", "100", "100", "102.5", "102.5", "102.5", "105", "105", "107.5", "107.5", "107.5", "110", "110", "110", "112.5", "112.5", "115", "115", "117.5", "117.5", "117.5", "120", "120", "122.5", "122.5", "122.5", "125", "125", "127.5", "127.5", "127.5", "130", "130", "130", "132.5", "132.5", "135", "135", "137.5", "137.5", "137.5", "140", "140", "142.5", "142.5", "142.5", "145", "145", "147.5", "147.5", "147.5", "150", "150", "150", "152.5", "152.5", "155", "155", "157.5", "157.5", "157.5", "160", "160", "162.5", "162.5", "162.5", "165", "165", "167.5", "167.5", "167.5", "170", "170", "170", "172.5", "172.5", "175", "175", "177.5", "177.5", "177.5", "180", "180", "182.5", "182.5", "182.5", "185", "185", "187.5", "187.5", "187.5", "190", "190", "190", "192.5", "192.5", "195", "195", "197.5", "197.5", "197.5", "200", "200", "202.5", "202.5", "202.5", "205", "205", "207.5", "207.5", "207.5", "210", "210", "210", "212.5", "212.5", "215", "215", "217.5", "217.5", "217.5", "220", "220", "222.5", "222.5", "222.5", "225", "225", "227.5", "227.5", "227.5", "230", "230", "230", "232.5", "232.5", "235", "235", "237.5", "237.5", "237.5", "240", "240", "242.5", "242.5", "242.5", "245", "245", "247.5", "247.5", "247.5", "250", "250", "250", "252.5", "252.5", "255", "255", "257.5", "257.5", "257.5", "260", "260", "262.5", "262.5", "262.5", "265", "265", "267.5", "267.5", "267.5", "270", "270", "270", "272.5", "272.5", "275", "275", "277.5", "277.5", "277.5", "280", "280", "282.5", "282.5", "282.5", "285", "285", "287.5", "287.5", "287.5", "290", "290", "290", "292.5", "292.5", "295", "295", "297.5", "297.5", "297.5", "300");
		$femaleDeadlift=array( "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "25", "27.5", "27.5", "27.5", "30", "30", "30", "32.5", "32.5", "35", "35", "37.5", "37.5", "37.5", "40", "40", "42.5", "42.5", "42.5", "45", "45", "47.5", "47.5", "47.5", "50", "50", "50", "52.5", "52.5", "55", "55", "57.5", "57.5", "57.5", "60", "60", "62.5", "62.5", "62.5", "65", "65", "67.5", "67.5", "67.5", "70", "70", "70", "72.5", "72.5", "75", "75", "77.5", "77.5", "77.5", "80", "80", "82.5", "82.5", "82.5", "85", "85", "87.5", "87.5", "87.5", "90", "90", "90", "92.5", "92.5", "95", "95", "97.5", "97.5", "97.5", "100", "100", "102.5", "102.5", "102.5", "105", "105", "107.5", "107.5", "107.5", "110", "110", "110", "112.5", "112.5", "115", "115", "117.5", "117.5", "117.5", "120", "120", "122.5", "122.5", "122.5", "125", "125", "127.5", "127.5", "127.5", "130", "130", "130", "132.5", "132.5", "135", "135", "137.5", "137.5", "137.5", "140", "140", "142.5", "142.5", "142.5", "145", "145", "147.5", "147.5", "147.5", "150", "150", "150", "152.5", "152.5", "155", "155", "157.5", "157.5", "157.5", "160", "160", "162.5", "162.5", "162.5", "165", "165", "167.5", "167.5", "167.5", "170", "170", "170", "172.5", "172.5", "175", "175", "177.5", "177.5", "177.5", "180", "180", "182.5", "182.5", "182.5", "185", "185", "187.5", "187.5", "187.5", "190", "190", "190", "192.5", "192.5", "195", "195", "197.5", "197.5", "197.5", "200", "200", "202.5", "202.5", "202.5", "205", "205", "207.5", "207.5", "207.5", "210", "210", "210", "212.5", "212.5", "215", "215", "217.5", "217.5", "217.5", "220", "220", "222.5", "222.5", "222.5", "225", "225", "227.5", "227.5", "227.5", "230", "230", "230", "232.5", "232.5", "235", "235", "237.5", "237.5", "237.5", "240", "240", "242.5", "242.5", "242.5", "245", "245", "247.5", "247.5", "247.5", "250", "250", "250", "252.5", "252.5", "255", "255", "257.5", "257.5", "257.5", "260", "260", "262.5", "262.5", "262.5", "265", "265", "267.5", "267.5", "267.5", "270", "270", "270", "272.5", "272.5", "275", "275", "277.5", "277.5", "277.5", "280", "280", "282.5", "282.5", "282.5", "285", "285", "287.5", "287.5", "287.5", "290", "290", "290", "292.5", "292.5", "295", "295", "297.5", "297.5", "297.5", "300");
		$femaleSquat=array( "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "20", "25", "25", "25", "25", "27.5", "27.5", "27.5", "30", "30", "30", "32.5", "32.5", "35", "35", "37.5", "37.5", "37.5", "40", "40", "42.5", "42.5", "42.5", "45", "45", "47.5", "47.5", "47.5", "50", "50", "50", "52.5", "52.5", "55", "55", "57.5", "57.5", "57.5", "60", "60", "62.5", "62.5", "62.5", "65", "65", "67.5", "67.5", "67.5", "70", "70", "70", "72.5", "72.5", "75", "75", "77.5", "77.5", "77.5", "80", "80", "82.5", "82.5", "82.5", "85", "85", "87.5", "87.5", "87.5", "90", "90", "90", "92.5", "92.5", "95", "95", "97.5", "97.5", "97.5", "100", "100", "102.5", "102.5", "102.5", "105", "105", "107.5", "107.5", "107.5", "110", "110", "110", "112.5", "112.5", "115", "115", "117.5", "117.5", "117.5", "120", "120", "122.5", "122.5", "122.5", "125", "125", "127.5", "127.5", "127.5", "130", "130", "130", "132.5", "132.5", "135", "135", "137.5", "137.5", "137.5", "140", "140", "142.5", "142.5", "142.5", "145", "145", "147.5", "147.5", "147.5", "150", "150", "150", "152.5", "152.5", "155", "155", "157.5", "157.5", "157.5", "160", "160", "162.5", "162.5", "162.5", "165", "165", "167.5", "167.5", "167.5", "170", "170", "170", "172.5", "172.5", "175", "175", "177.5", "177.5", "177.5", "180", "180", "182.5", "182.5", "182.5", "185", "185", "187.5", "187.5", "187.5", "190", "190", "190", "192.5", "192.5", "195", "195", "197.5", "197.5", "197.5", "200", "200", "202.5", "202.5", "202.5", "205", "205", "207.5", "207.5", "207.5", "210", "210", "210", "212.5", "212.5", "215", "215", "217.5", "217.5", "217.5", "220", "220", "222.5", "222.5", "222.5", "225", "225", "227.5", "227.5", "227.5", "230", "230", "230", "232.5", "232.5", "235", "235", "237.5", "237.5", "237.5", "240", "240", "242.5", "242.5", "242.5", "245", "245", "247.5", "247.5", "247.5", "250", "250", "250", "252.5", "252.5", "255", "255", "257.5", "257.5", "257.5", "260", "260", "262.5", "262.5", "262.5", "265", "265", "267.5", "267.5", "267.5", "270", "270", "270", "272.5", "272.5", "275", "275", "277.5", "277.5", "277.5", "280", "280", "282.5", "282.5", "282.5", "285", "285", "287.5", "287.5", "287.5", "290", "290", "290", "292.5", "292.5", "295", "295", "297.5", "297.5", "297.5", "300");
		
		//------------ Retrieving User Weights From Session ------------//
		
		$userWeight = floor($this->Auth->user('weight'));
		$userPress = floor($this->Auth->user('pressmax'));
		$userBench = floor($this->Auth->user('benchmax'));
		$userDeadlift = floor($this->Auth->user('deadliftmax'));
		$userSquat = floor($this->Auth->user('squatmax'));
		
		if ($this->Auth->user('gender') == 1 && $userWeight >= 145) {
				$userWeight = 145;
		}
		
		if ($this->Auth->user('gender') == 2 && $userWeight >= 90) {
				$userWeight = 90;
		}
		
		if($userPress >= 300){
			$userPress = 300;
		}
		if($userBench >= 300){
			$userBench = 300;
		}
		if($userDeadlift >= 300){
			$userDeadlift = 300;
		}
		if($userSquat >= 300){
			$userSquat = 300;
		}
		
		
		$this->set('userCalories', $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id')
				)
		)));
		
		$this->User->bindModel(array(
			'hasOne' => array('Strengthtable' => array('foreignKey' => false))), false);

		if ($this->Auth->user('gender') == 1) {
			$userPressLevel = $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $maleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.press <=' => $malePress[$userPress]
					
				),
				'order' => array('Strengthtable.press' => 'DESC'),
				'limit' => 1
			));
			$userBenchLevel = $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $maleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.bench <=' => $maleBench[$userBench]
					
				),
				'order' => array('Strengthtable.bench' => 'DESC'),
				'limit' => 1
			));
			$userDeadliftLevel = $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $maleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.deadlift <=' => $maleDeadlift[$userDeadlift]
					
				),
				'order' => array('Strengthtable.deadlift' => 'DESC'),
				'limit' => 1
			));
			$userSquatLevel = $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $maleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.squat <=' => $maleSquat[$userSquat]
					
				),
				'order' => array('Strengthtable.squat' => 'DESC'),
				'limit' => 1
			));
		} else {
			$userPressLevel = $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $femaleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.press <=' => $femalePress[$userPress]
					
				),
				'order' => array('Strengthtable.press' => 'DESC'),
				'limit' => 1
			));
			$userBenchLevel = $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $femaleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.bench <=' => $femaleBench[$userBench]
					
				),
				'order' => array('Strengthtable.bench' => 'DESC'),
				'limit' => 1
			));
			$userDeadliftLevel = $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $femaleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.deadlift <=' => $femaleDeadlift[$userDeadlift]
					
				),
				'order' => array('Strengthtable.deadlift' => 'DESC'),
				'limit' => 1
			));
			$userSquatLevel = $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $femaleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.squat <=' => $femaleSquat[$userSquat]
					
				),
				'order' => array('Strengthtable.squat' => 'DESC'),
				'limit' => 1
			));
			}
		
		$this->User->unbindModel(array(
			'hasOne' => array('Strengthtable')));
			
		$this->User->bindModel(array(
			'hasOne' => array('Plan' => array('foreignKey' => false))), false);
			
		foreach ($userPressLevel as $press): $userPressLevelFinal = $press['Strengthtable']['level']; endforeach;
		foreach ($userBenchLevel as $bench): $userBenchLevelFinal = $bench['Strengthtable']['level']; endforeach;
		foreach ($userDeadliftLevel as $deadlift): $userDeadliftLevelFinal = $deadlift['Strengthtable']['level']; endforeach;
		foreach ($userSquatLevel as $squat): $userSquatLevelFinal = $squat['Strengthtable']['level']; endforeach; 
		
		if($userPressLevel == null){
			$userPressLevelFinal = 1;
		}
		if($userBenchLevel == null){
			$userBenchLevelFinal = 1;
		}
		if($userDeadliftLevel == null){
			$userDeadliftLevelFinal = 1;
		}
		if($userSquatLevel == null){
			$userSquatLevelFinal = 1;
		}
		
		$userLevel = floor(($userPressLevelFinal + $userBenchLevelFinal + $userDeadliftLevelFinal + $userSquatLevelFinal)/4);
		
		$this->set('userLevelFinal', $this->User->find('all', array(
			'conditions' => array(
				'User.id' => $this->Auth->user('id'),
				'Plan.planlevel' => $userLevel
			),
			'limit' => 1
		)));
		if(empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		} else {
			if($this->User->save($this->data)) {
				$this->redirect('/users/index');
			}
		}
	}
}
?>
