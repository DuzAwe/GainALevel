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
		$this->set('users', $this->User->find('all'));
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
	}
	
	public function beginner() {
	    $this->layout = 'index';
	}
	
	public function intermediate() {
	    $this->layout = 'index';
	}
	
	public function advanced() {
	    $this->layout = 'index';
	}
	
	public function plan() {
	    $this->layout = 'index';
	}
	
	public function logincomplete() {
	    $this->layout = 'setup';
	}
	
	public function plans() {
	    $this->layout = 'index';
	}
	
	public function workout() {
	    $this->layout = 'index';
	}
	
	public function calories() {
	    $this->layout = 'index';
	}
	
	public function sleep() {
	    $this->layout = 'index';
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

		$outcomedata = $this->User->Outcome->find('list', array('fields' => array('user_id', 'outcomename')));
		$this->set('outcome', $outcomedata);

		$dietdata = $this->User->Dietplan->find('list', array('fields' => array('user_id', 'dietname')));
		$this->set('diet', $dietdata);

		/**
		 * check if a view file for this step exists, otherwise redirect to index
		 */
		if (!file_exists(APP.'View'.DS.'Users'.DS.'signup_step_'.$stepNumber.'.ctp')) {
			$this->redirect('/users/index');
		}
		
		/**
		 * determines the max allowed step (the last completed + 1)
		 * if choosen step is not allowed (URL manually changed) the user gets redirected
		 * otherwise we store the current step value in the session
		 */
		$maxAllowed = $this->Session->read('form.params.maxProgress') + 1;
		if ($stepNumber > $maxAllowed) {
			$this->redirect('/users/signup_step/'.$maxAllowed);
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
			$this->User->set($this->request->data);
			
			/**
			 * if data validates we merge previous session data with submitted data, using CakePHP powerful Hash class (previously called Set)
			 */
			if ($this->User->validates()) {
				$prevSessionData = $this->Session->read('form.data');
				$currentSessionData = Hash::merge( (array) $prevSessionData, $this->request->data);
				
				/**
				 * if this is not the last step we replace session data with the new merged array
				 * update the max progress value and redirect to the next step
				 */
				if ($stepNumber < $this->Session->read('form.params.steps')) {
					$this->Session->write('form.data', $currentSessionData);
					$this->Session->write('form.params.maxProgress', $stepNumber);
					$this->redirect(array('action' => 'signup_step', $stepNumber+1));
				} else {
					/**
					 * otherwise, this is the final step, so we have to save the data to the database
					 */
					if ($this->User->save($currentSessionData)){
						$id = $this->User->id;
						$currentSessionData['User'] = array_merge(
							$currentSessionData['User'],
							array('id' => $id)
						);
						$this->Auth->login($currentSessionData['User']);
						return $this->redirect('/users/signup_complete');
					}
				}
			}
		} else {
			$this->request->data = $this->Session->read('form.data');
		}
		
		/**
		 * here we load the proper view file, depending on the stepNumber variable passed via GET
		 */
		$this->render('signup_step_'.$stepNumber);
	}
	
	public function signup_complete() {
		
		$femaleWeight = array(  "44", "44", "44", "44", "44", "44", "44", "44", "44", "44", 
								"44", "44", "44", "44", "44", "44", "44", "44", "44", "44",
								"44", "44", "44", "44", "44", "44", "44", "44", "44", "44",
								"44", "44", "44", "44", "44", "44", "44", "44", "44", "44",
								"44", "44", "44", "44", "44", "44", "44", "44", "48", "48",
								"48", "48", "52", "52", "52", "52", "56", "56", "56", "56",
								"60", "60", "60", "60", "60", "60", "60", "67", "67", "67",
								"67", "67", "67", "67", "67", "75", "75", "75", "75", "75",
								"75", "75", "82", "82", "82", "82", "82", "82", "82", "82",
								"90", "90", "90", "90", "90", "90", "90", "90", "90", "90",
								"90", "90", "90", "90", "90", "90", "90", "90", "90", "90",
								"90", "90", "90", "90", "90", "90", "90", "90", "90", "90",
								"90", "90", "90", "90", "90", "90", "90", "90", "90", "90",
								"90", "90", "90", "90", "90", "90", "90", "90", "90", "90",
								"90", "90", "90", "90", "90", "90", "90", "90", "90", "90",
								"90", "90", "90", "90", "90", "90", "90", "90");
							
		$maleWeight = array(    "52",  	"52",  "52",  "52",  "52",  "52",  "52",  "52",  "52",	"52", 
								"52",   "52",  "52",  "52",  "52",  "52",  "52",  "52",  "52",  "52",
								"52",   "52",  "52",  "52",  "52",  "52",  "52",  "52",  "52",  "52",
								"52",   "52",  "52",  "52",  "52",  "52",  "52",  "52",  "52",  "52",
								"52",   "52",  "52",  "52",  "52",  "52",  "52",  "52",  "52",  "52",
								"52",   "52",  "52",  "52",  "52",  "52",  "56",  "56",  "56",  "56",
								"60",   "60",  "60",  "60",  "60",  "60",  "60",  "67",  "67",  "67",
								"67",   "67",  "67",  "67",  "67",  "75",  "75",  "75",  "75",  "75",
								"75",   "75",  "82",  "82",  "82",  "82",  "82",  "82",  "82",  "82",
								"90",   "90",  "90",  "90",  "90",  "90",  "90",  "90",  "90",  "90",
							    "100", "100", "100", "100", "100", "100", "100", "100", "100", "100",
							    "110", "110", "110", "110", "110", "110", "110", "110", "110", "110",
							    "110", "110", "110", "110", "110", "125", "125", "125", "125", "125",
								"125", "125", "125", "125", "125", "125", "125", "125", "125", "125",
								"125", "125", "125", "125", "125", "145", "145", "145", "145", "145",
								"145", "145", "145", "145", "145", "145", "145", "145");

		$liftWeight = array(    "25",   "25",    "25",    "25",    "25",  "25",  "25",    "25",    "25",    "25", 
								"25",   "25",    "25",    "25",    "25",  "25",  "25",    "25",    "25",    "25",
								"25",   "25",    "25",    "25",    "25",  "25",  "25",  "27.5",  "27.5",  "27.5", 
								"30",   "30",    "30",  "32.5",  "32.5",  "35",  "35",  "37.5",  "37.5",  "37.5",
								"40",   "40",  "42.5",  "42.5",  "42.5",  "45",  "45",  "47.5",  "47.5",  "47.5",
								"50",   "50",    "50",  "52.5",  "52.5",  "55",  "55",  "57.5",  "57.5",  "57.5",
								"60",   "60",  "62.5",  "62.5",  "62.5",  "65",  "65",  "67.5",  "67.5",  "67.5",
								"70",   "70",    "70",  "72.5",  "72.5",  "75",  "75",  "77.5",  "77.5",  "77.5",
								"80",   "80",  "82.5",  "82.5",  "82.5",  "85",  "85",  "87.5",  "87.5",  "87.5",
								"90",   "90",    "90",  "92.5",  "92.5",  "95",  "95",  "97.5",  "97.5",  "97.5",
								"100", "100", "102.5", "102.5", "102.5", "105", "105", "107.5", "107.5", "107.5",
								"110", "110",   "110", "112.5", "112.5", "115", "115", "117.5", "117.5", "117.5",
								"120", "120", "122.5", "122.5", "122.5", "125", "125", "127.5", "127.5", "127.5",
								"130", "130",   "130", "132.5", "132.5", "135", "135", "137.5", "137.5", "137.5",
								"140", "140", "142.5", "142.5", "142.5", "145", "145", "147.5", "147.5", "147.5",
								"150", "150",   "150", "152.5", "152.5", "155", "155", "157.5", "157.5", "157.5",
								"160", "160", "162.5", "162.5", "162.5", "165", "165", "167.5", "167.5", "167.5",
								"170", "170",   "170", "172.5", "172.5", "175", "175", "177.5", "177.5", "177.5",
								"180", "180", "182.5", "182.5", "182.5", "185", "185", "187.5", "187.5", "187.5",
								"190", "190",   "190", "192.5", "192.5", "195", "195", "197.5", "197.5", "197.5",
								"200", "200", "202.5", "202.5", "202.5", "205", "205", "207.5", "207.5", "207.5",
								"210", "210",   "210", "212.5", "212.5", "215", "215", "217.5", "217.5", "217.5",
								"220", "220", "222.5", "222.5", "222.5", "225", "225", "227.5", "227.5", "227.5",
								"230", "230",   "230", "232.5", "232.5", "235", "235", "237.5", "237.5", "237.5",
								"240", "240", "242.5", "242.5", "242.5", "245", "245", "247.5", "247.5", "247.5",
								"250", "250",   "250", "252.5", "252.5", "255", "255", "257.5", "257.5", "257.5",
								"260", "260", "262.5", "262.5", "262.5", "265", "265", "267.5", "267.5", "267.5",
								"270", "270",   "270", "272.5", "272.5", "275", "275", "277.5", "277.5", "277.5",
								"280", "280", "282.5", "282.5", "282.5", "285", "285", "287.5", "287.5", "287.5",
								"290", "290",   "290", "292.5", "292.5", "295", "295", "297.5", "297.5", "297.5",
								"300");
		
		
		$this->layout = 'setup';

		$userWeight = $this->Auth->user('weight');
		$userPress = $this->Auth->user('pressmax');
		$userBench = $this->Auth->user('benchmax');
		$userDeadlift = $this->Auth->user('deadliftmax');
		$userSquat = $this->Auth->user('squatmax');
		
		$this->User->bindModel(array(
			'hasOne' => array('Strengthtable' => array('foreignKey' => false))), false);

		if ($this->Auth->user('gender') == 1) {
			$this->set('userPress', $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $maleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.press <=' => $liftWeight[$userPress]
					
				),
				'order' => array('Strengthtable.press' => 'DESC'),
				'limit' => 1
			)));
			$this->set('userBench', $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $maleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.bench <=' => $liftWeight[$userBench]
					
				),
				'order' => array('Strengthtable.bench' => 'DESC'),
				'limit' => 1
			)));
			$this->set('userDeadlift', $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $maleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.deadlift <=' => $liftWeight[$userDeadlift]
					
				),
				'order' => array('Strengthtable.deadlift' => 'DESC'),
				'limit' => 1
			)));
			$this->set('userSquat', $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $maleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.squat <=' => $liftWeight[$userSquat]
					
				),
				'order' => array('Strengthtable.squat' => 'DESC'),
				'limit' => 1
			)));
		} else {
			$this->set('userPress', $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $femaleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.press <=' => $liftWeight[$userPress]
					
				),
				'order' => array('Strengthtable.press' => 'DESC'),
				'limit' => 1
			)));
			$this->set('userBench', $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $femaleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.bench <=' => $liftWeight[$userBench]
					
				),
				'order' => array('Strengthtable.bench' => 'DESC'),
				'limit' => 1
			)));
			$this->set('userDeadlift', $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $femaleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.deadlift <=' => $liftWeight[$userDeadlift]
					
				),
				'order' => array('Strengthtable.deadlift' => 'DESC'),
				'limit' => 1
			)));
			$this->set('userSquat', $this->User->find('all', array(
				'conditions' => array(
					'User.id' => $this->Auth->user('id'),
					'Strengthtable.weight' => $femaleWeight[$userWeight],
					'Strengthtable.gender = User.gender',
					'Strengthtable.squat <=' => $liftWeight[$userSquat]
					
				),
				'order' => array('Strengthtable.squat' => 'DESC'),
				'limit' => 1
			)));
		}
	}
	
}
?>
