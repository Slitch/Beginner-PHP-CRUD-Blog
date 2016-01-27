<?php 
include '../includes/connect.php';

if (isset($_GET['post-id']) AND $_GET['post-id'] != "") {
	
	$news_id = $_GET['post-id'];

	$query = "UPDATE post SET deleted = 1 WHERE npost_id = $post_id";

	mysqli_query($con, $query);

	header("Location: ../index.php?p=all-news");

}

header("Location: ../index.php?p=all-blogpost");

