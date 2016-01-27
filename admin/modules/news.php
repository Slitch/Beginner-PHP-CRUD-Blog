<?php 
  if (!isset($_SESSION['user_id'])) {

    header("Location: ../../index.php");
    
}
?>


<?php 

if (isset($_GET['news-id']) AND $_GET['news-id'] != "") {

	$news_id = $_GET['news-id'];

 ?>

<!-- all colum wrapper -->
<div class="row">

	<!-- all post wrapper -->
	<div class="col-md-9">
		<!-- <div class="col-lg-12"><h1 class="page-header">Nyheder</h1></div> -->
		<?php
		// $query = "SELECT * FROM news WHERE news_id = '$news_id' ";
		$query = "SELECT 
					news_id, 
					news_title, 
					news_content, 
					news_OprettetDen 
					FROM news WHERE news_id = '$news_id' ";

		$content_result = mysqli_query($con, $query);
		$news = mysqli_fetch_assoc($content_result);

		//cho "<pre>", print_r($news), "</pre>";

			$news_id 				= $news['news_id'];
			$news_title 			= $news['news_title'];
			$news_content	 		= $news['news_content'];
			$news_OprettetDen 	= $news['news_OprettetDen'];
			?>

			<!-- single post wrap-->
			<div class="col-lg-12">

                <!-- Blog Post -->
				<h1><?php echo "$news_title"; ?></h1>

                <!-- Date/Time -->
                <p><i class="fa fa-clock-o"></i><?php echo "$news_OprettetDen"; ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>
                <p><?php echo "$news_content"; ?></p>
                <a class="btn btn-danger" href="index.php?p=all-news">Tilbage til nyheder<i class="fa fa-angle-right"></i></a>

                <hr>
            </div>
			<!-- single post end-->

	</div>
	<!-- 2 colum wrapper end -->

</div>

<?php 


} else {
	header("Location: ../../index.php"); 
	// vis bruger ikke er logget ind, og prøver at taste http://localhost/poul/musicon/admin/modules/news.php
	// så bliver bruger redirectet til ... header("Location: ../../index.php"); 
	exit();
} //END IF ELSE (isset($_GET['news-id']) AND $_GET['news-id'] != "")


 ?>