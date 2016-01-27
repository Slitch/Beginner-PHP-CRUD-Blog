<div class="container">
	<div class="row">
		<aside class="col-md-4">
			<img src="img/poul-lynge-larsen.jpg" alt="..." class="img-circle profile-img">
		</aside>
		<div class="blog-wrap">
			<div class="col-md-8">

				<?php
				$query = "SELECT
				post_id, post_title, post_text, post_date, LEFT(post_text, 200) AS post_small FROM blog ORDER BY post_id DESC LIMIT 0,5";

				$content_result = mysqli_query($con, $query);
				while ($blog = mysqli_fetch_assoc($content_result)) {

				// echo "<pre>", print_r($blog), "</pre>";

					$post_id 	= $blog['post_id'];
					$post_title = $blog['post_title'];
					$post_text	= $blog['post_small'];
					$post_date 	= $blog['post_date'];
					?>

					<a href="index.php?p=single-post&single-post-id=<?php echo $post_id; ?>">
						<div class="blogpost-intro">
							<h2 class="blog-head"><?php echo "$post_title"; ?></h2>
							<p class="blog-text"><?php echo "$post_text"; ?>..</p>
							<p class="blog-date"><?php echo "$post_date"; ?></p>
						</div>
					</a>

				<?php  } ?>

			</div>
		</div>
	</div>
</div><!-- /container -->