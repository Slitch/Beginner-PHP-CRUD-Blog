<?php 
if (!isset($_SESSION['user_id'])) {

	header("Location: ../../index.php");
}
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Blog <small>Oversigt over blog post</small></h1>
			
		</div>
	</div>
	<!-- /.row -->
	
	<div class="row">

		<div class="col-lg-12">
			<div class="panel panel-green">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Nyheder</h3>
				</div>

				<!-- /.row -->
				<div class="panel-body">
					<div class="list-group">
						<div class="col-lg-12">
							<div class="table-responsive">
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th>Page</th>
											<th>Date / Time</th>
											<th>Text</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>

										<?php

										$query = "SELECT 
											post_id, 
											post_title, 
											post_text,
											DATE(post_date) AS post_date,
											LEFT(post_text, 60) AS post_small, deleted FROM blog WHERE deleted = 0 ORDER BY post_id DESC LIMIT 0,5 ";

										// echo "<pre>", print_r($query), "</pre>";

										$content_result = mysqli_query($con, $query);

										$number_of_post = mysqli_num_rows($content_result);

										while ($post = mysqli_fetch_assoc($content_result)) {

										// echo "<pre>", print_r($post), "</pre>";

											$post_id 	= $post['post_id'];
											$post_title	= $post['post_title'];
											$post_text	= $post['post_small'];
											$post_date 	= $post['post_date'];

											?>

											<tr>
												<td><?php echo "$post_title"; ?></td>
												<td><?php echo "$post_text"; ?>...</td>
												<td><?php echo $post_date; ?></td>
												<td>
													<a class="btn btn-xs btn-primary" href="index.php?p=post&post-id=<?php echo $post_id; ?>">Vis Nyhed</a>
													<a class="btn btn-xs btn-primary" href="index.php?p=edit-post&post-id=<?php echo $post_id; ?>">Rediger</a>
													<a class="btn btn-xs btn-primary" href="handlers/delete_post.php?post-id=<?php echo $post_id; ?>" onclick="return confirm('Er du sikker du vil slette denne nyhed?')">Slet</a>
												</td>
											</tr>

											<?php  } ?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<p>Der findes i alt <?php echo $number_of_post; ?> aktiviter i databasen</p>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>