<?php
    // ООП #3
	
	require_once 'classes.php';
	
	$publications = array();
	
	
	/*
	$news1 = new NewsPublication;
	$news2 = new NewsPublication;
	$news3 = new NewsPublication;
	
	$article1 = new ArticlePublication;
	$article2 = new ArticlePublication;
	$article3 = new ArticlePublication;
	
	$photo1 = new PhotoReportPublication;
	$photo2 = new PhotoReportPublication;
	$photo3 = new PhotoReportPublication;
	
	$publications = array($news1, $news2, $article1, $photo1);
	*/
	
	$connect = mysqli_connect("localhost", "root", "", "test");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$result = mysqli_query($connect, "SELECT * FROM publication");
	
	while ($row = mysqli_fetch_array($result) ) {
		$publications[] = new $row['type'] ($row);
	}

	/*
	echo "<pre>";
	print_r($publications);
	echo "</pre>";
	*/
	
?>
