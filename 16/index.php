<?php
   // ООП #4
	
	/*
	class Student {
		public $name;
		public $results;
		
		function __construct($name, array $results) {
			echo '<br> Student ' . $name . ':';
			foreach ($results as $subject => $item) {
				echo '<br>' . $subject . ': ' . $item;
			}
			echo '<hr>';
		}
	}
	
	$student1 = new Student('John', array('math' => 3, 'biology' => 4));
	$student2 = new Student('Marry', array('math' => 4, 'biologi' => 4));
	$student3 = new Student('Mark', 1);
	*/
	
	interface Vehicle {
		public function info();
	}
	
	// Vehicle -> Car
	interface Car extends Vehicle {
		public function drive();
	}
	
	// Vehicle -> Boat
	interface Boat extends Vehicle {
		public function swim();
	}
	
	/*
	class Audi implements Car {
		public function info() {
			echo '<br> Audi is a German automobils manufacturer.';
		}
		public function drive() {
			echo '<br> Audi drives!';
		}
	}
	
	$audi = new Audi;
	$audi->info();
	$audi->drive();
	*/
	
	class MercedesAmphibious implements Car, Boat {
		public function info() {
			echo '<br> Mercedes is a German automobile manufacturer.';
		}
		
		public function drive() {
			echo '<br> Mercedes drives!';
		}
		
		public function swim() {
			echo '<br> Mercedes swims!';
		}
	}
	
	$mercedesAmphibious1 = new MercedesAmphibious;
	$mercedesAmphibious1->info();
	$mercedesAmphibious1->drive();
	$mercedesAmphibious1->swim();
?>