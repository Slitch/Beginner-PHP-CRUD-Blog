<?php

include '/../includes/connect.php';

// Hvis findes en id i url
if (isset($_GET['img_id'])) {
	
	$image_id = $_GET['img_id']; // Gemmer id fra url i variabel

	// Vælger det specifikke billede i tabellen
	$billede_sql = "SELECT img_id, image_name FROM gallery WHERE img_id=$image_id";
	$billede_result = mysqli_query ($con, $billede_sql) or die(mysqli_error());
	$billede_row = mysqli_fetch_assoc ($billede_result);

	// Sletter billedet i billedmappen uploadede_billeder
	unlink("../../img/gallery/big/" . 'big_' . $billede_row['image_name']);
	unlink("../../img/gallery/thumb/" . 'thumb_' . $billede_row['image_name']);

	// Sletter referencen i tabellen
	$sql = "DELETE FROM gallery WHERE img_id = $image_id";
	$result = mysqli_query ($con, $sql) or die (mysqli_error());
}

header ("Location:../index.php?p=new-image"); // REdirect browser

?>
