<?php 

if(isset($_GET['single-post-id']) AND $_GET['single-post-id'] !="") {
	
	$post_id = $_GET['single-post-id'];

?>

<div class="container">
	<div class="row">
		<aside class="col-md-4">
			<img src="img/poul-lynge-larsen.jpg" alt="..." class="img-circle profile-img">
		</aside>
		<div class="blog-wrap-single">
			<div class="col-md-8">

			<?php 
			$query = "SELECT post_id, post_title, post_text, post_date FROM blog WHERE post_id = '$post_id' ";

			$res = mysqli_query($con, $query);

			$post = mysqli_fetch_assoc($res);

			// echo "<pre>", print_r($post), "</pre>";

				$post_id 		= $post['post_id'];
				$post_title		= $post['post_title'];
				$post_text		= $post['post_text'];
				$post_date		= $post['post_date'];
				
				?>

				<div class="blogpost-single">
					<h2 class="blog-head"><?php echo "$post_title"; ?></h2>
					<p class="blog-text"><?php echo "$post_text"; ?></p>
					<p class="blog-date"><?php echo "$post_date"; ?></p>
				</div>

<?php }

// } else {
// 	header("Location: index.php");
// 	exit();
// } // END if(isset($_GET['post-id']) AND $_GET['post-id'] !="")

?>


</div>
</div>
</div>
</div><!-- /container -->