<?php
   // ООП #4
   
   /*
	class User {
		public $firstname;
		public $lastname;
	}
	
	function getFullName(User $user) {
		return $user->firstname . ' ' . $user->lastname;
	}
	
	$user1 = new User;
	$user1->firstname = 'Alex';
	$user1->lastname = 'Jones';
	echo getFullName($user1);
	
	
	class SuperUser extends User {
		
	}
	
	$user2 = new SuperUser;
	$user2->firstname = 'Jack';
	$user2->lastname = 'Sparrow';
	echo getFullName($user2);
	
	*/
	
	function onErrorFunction() {
		echo 'Enter correct value';
	}
	
	set_error_handler('onErrorFunction');
	
	class User {
		
	}
	
	function getFullName(User $user) {
		
	}
	
	$user1 = new User;
	echo getFullName($user1);
	echo getFullName('String');
	
	
	
?>