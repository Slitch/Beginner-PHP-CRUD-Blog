<?php 
if (!isset($_SESSION['user_id'])) {
	header("Location: /../index.php");  
}

$news_title ="";
$news_content ="";
?>


<?php 

if (isset($_GET['news-id']) AND $_GET['news-id'] !="") {	
	?>

	<?php

	if (isset($_POST['update-news'])) {
	 	//echo "<pre>", print_r($_POST), "</pre>";

		$news_id				= $_POST['news_id'];
		$news_title 			= $_POST['news_title'];
		$news_content 			= $_POST['news_content'];

		$errors = []; // det betyder at $errors er et array

		if ($news_title == "") {
			$errors['news_title'] = "<span class='red'> Titel er obligatorisk</span>";
		}

		if ($news_content == "") {
			$errors['news_content'] = "<span class='red'> Indhold er obligatorisk</span>";
		}

		if (empty($errors)) {

			$query = "UPDATE news SET
			news_title = '$news_title',
			news_content = '$news_content'

			WHERE news_id = $news_id";

			mysqli_query($con, $query);

			if (mysqli_query($con, $query)) {
				echo "<div id='infoblok'>Indhold er opdateret i databasen...</div>";
			}
			else {
				echo "<div id='infoblok'>Der er opstået en fejl :" . mysqli_error(). "</div>";
			}

			header("Location: index.php?p=all-news");
		}
	}

	?>


	<?php 

	$news_id 	= $_GET['news-id'];

	$query 			= "SELECT 
	news_id, 
	news_title, 
	news_content 
	FROM news 
	WHERE news_id = $news_id ";

// echo $query;

	$result			= mysqli_query($con, $query);

	$row = mysqli_fetch_assoc($result);

	$news_id			= $row['news_id'];
	$news_title 		= $row['news_title'];
	$news_content		= $row['news_content'];

	?>

	<form method="post">

		<input type="hidden" name="news_id" value="<?php echo $news_id ?> ">


		<div class="row control-group">
			<!--  news_title  -->
			<div class="form-group col-xs-6 floating-label-form-group controls">
				<label for="news_title">Titel <span class="red">* </span></label><?php

				if (isset($errors['news_title'])) {
					echo $errors['news_title'];
				}

				?><br>

				

				<input type="text" name="news_title" id="news_title" class="form-control" value="<?php echo $news_title; ?>" placeholder="skriv titel her"><br>
			</div>
		</div>


		<div class="row control-group">
			<!--  news_title  -->
			<div class="form-group col-xs-6 floating-label-form-group controls">
				<label for="news_content">Indhold <span class="red">* </span></label><?php

				if (isset($errors['news_content'])) {
					echo $errors['news_content'];
				}

				?><br>

				<textarea name="news_content" class="form-control" id="news_content" cols="30" rows="10" placeholder="skrive text here"><?php echo $news_content; ?></textarea><br>
				<input type="submit" name="update-news" value="Ret Artikel">
			</div>
		</div>
	</form>
	<a href="index.php">Tilbage</a>

	<?php 


} else {

	header("location: index.php?p=all-news");
	// Redirect bruger tilbage til alle activiteter
	// END IF ELSE (isset($_GET['news-id']) AND $_GET['news-d'] !="")
}



?>