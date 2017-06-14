<?php
    // ООП #3
	
	require_once 'data.php';
	
	foreach($publications as $item) {
		$item->printItem();
		
		/*
		echo '<pre>';
		echo 'В змінній $item знаходиться об\'єкт класу ' . get_class($item);
		print_r($item->printItem());
		echo'</pre>';
		*/
	}
	
?>
