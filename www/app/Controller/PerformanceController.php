<?php
	class PerformanceController extends AppController {
	
		public function index() {
			$this->layout = 'performance';
			
			//Week Variables
			
			$oneWeek = date('Y-m-d',strtotime('-1 week'));
			$twoWeek = date('Y-m-d',strtotime('-2 week'));
			$threeWeek = date('Y-m-d',strtotime('-3 week'));
			$fourWeek = date('Y-m-d',strtotime('-4 week'));
			
			//-----------Overhead Press-----------//
			//Week1
			$this->set('oneWeekPresss', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted >=' => $oneWeek,
					'Performance.workoutname' => 1),
				'limit' => 1)
			));
			
			//Week2
			$this->set('twoWeekPresss', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $twoWeek,
					'Performance.workoutname' => 1),
				'limit' => 1)
			));
			
			//Week3
			$this->set('threeWeekPresss', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $threeWeek,
					'Performance.workoutname' => 1),
				'limit' => 1)
			));
			
			//Week4
			$this->set('fourWeekPresss', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $fourWeek,
					'Performance.workoutname' => 1),
				'limit' => 1)
			));
			
			//-----------Squat-----------//
			//Week1
			$this->set('oneWeekSquats', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted >=' => $oneWeek,
					'Performance.workoutname' => 2),
				'limit' => 1)
			));
			
			//Week2
			$this->set('twoWeekSquats', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $twoWeek,
					'Performance.workoutname' => 2),
				'limit' => 1)
			));
			
			//Week3
			$this->set('threeWeekSquats', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $threeWeek,
					'Performance.workoutname' => 2),
				'limit' => 1)
			));
			
			//Week4
			$this->set('fourWeekSquats', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $fourWeek,
					'Performance.workoutname' => 2),
				'limit' => 1)
			));
			
			//-----------Bench-----------//
			//Week1
			$this->set('oneWeekBenchs', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted >=' => $oneWeek,
					'Performance.workoutname' => 3),
				'limit' => 1)
			));
			
			//Week 2
			$this->set('twoWeekBenchs', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $twoWeek,
					'Performance.workoutname' => 3),
				'limit' => 1)
			));
			
			//Week3
			$this->set('threeWeekBenchs', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $threeWeek,
					'Performance.workoutname' => 3),
				'limit' => 1)
			));
			
			//Week4
			$this->set('fourWeekBenchs', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $fourWeek,
					'Performance.workoutname' => 3),
				'limit' => 1)
			));
				
			//-----------Dealift-----------//
			//Week1
			$this->set('oneWeekDeads', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted >=' => $oneWeek,
					'Performance.workoutname' => 4),
				'limit' => 1)
			));
			
			//Week2
			$this->set('twoWeekDeads', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $twoWeek,
					'Performance.workoutname' => 4),
				'limit' => 1)
			));
			
			//Week3
			$this->set('threeWeekDeads', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $threeWeek,
					'Performance.workoutname' => 4),
				'limit' => 1)
			));
			
			//week 4
			$this->set('fourWeekDeads', $this->Performance->find('all', array(
				'order' => array('Performance.id DESC'),
				'conditions' => array(
					'Performance.datecompleted <=' => $fourWeek,
					'Performance.workoutname' => 4),
				'limit' => 1)
			));
		}
	}
?>
