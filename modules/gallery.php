<div class="container">
	<div class="row">

		<?php
		$query = "SELECT img_id, image_name FROM gallery ORDER BY img_id DESC LIMIT 30";

		$image_result = mysqli_query($con, $query);
		while ($images = mysqli_fetch_assoc($image_result)) {

				// echo "<pre>", print_r($images), "</pre>";

			$img_id 		= $images['img_id'];

			$thumb_src		= 'img/gallery/thumb/thumb_' .$images ['image_name' ];
			$full_size_src	= 'img/gallery/big/big_' .$images ['image_name'];

			?>

			<figure class="gallery">
			<a href='<?php echo "$full_size_src"; ?>'><img src='<?php echo "$thumb_src"; ?>' alt='this is an alternative description'></a>
				<!-- <figcaption>Fig1. - A view of the pulpit rock in Norway.</figcaption> -->
			</figure>

					<?php }

				// } else {
				// 	header("Location: index.php");
				// 	exit();
				// } // END if(isset($_GET['img-id']) AND $_GET['img-id'] !="")

					?>

				</div>
</div><!-- /container -->