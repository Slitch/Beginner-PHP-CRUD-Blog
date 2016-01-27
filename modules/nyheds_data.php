<?php
include ("../includes/connect.php");
?>

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

<!--Man kan også sende javascript med tilbage. Tænd følgende kode -->

<script>
	// $(".blogpost-intro").hide();
	// $(".blogpost-intro:nth-of-type(1)").fadeIn(1000);
	// $(".blogpost-intro:nth-of-type(2)").fadeIn(2000);
	// $(".blogpost-intro:nth-of-type(3)").fadeIn(3000);

	$(".blogpost-intro").hide();

	$('.blogpost-intro').each(function(i) {
		$(this).delay((i++) * 200).fadeTo(1000, 1);
	})


</script>