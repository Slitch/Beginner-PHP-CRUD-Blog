<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">

			<?php include ("/../includes/wideimage-11.02.19-lib/WideImage.php"); ?>
			
			<fieldset style="width:400px">
				<legend>Billedeupload</legend>
				<h2>Vælg en fil</h2>

				<form action="" method="post" enctype="multipart/form-data">
					<input type="file" name="uploadet_fil" /> &nbsp;&nbsp;
					<input type="submit" name="submit_fil" value="Upload" />
				</form>
				<br /><hr>



				<?php 
				//================================================================
				// Tjek om billedupload formularen er blevet send
				//================================================================

				if (isset ($_POST['submit_fil'])) {
					// HUSK 'uploadet_filer' <-- dette navn kommer fra input feltets 'name' attribut
					$fil = $_FILES['uploadet_fil'];

					// Tjek $_FILE arrayet
					// (udkommentér følgende linjer når du er færdig og det hele virker perfekt)
					// echo '<pre>Indholdet af $_FILES'; print_r($_FILES); echo '</pre>';

					if ($fil['error'] == 0) {

						$nyt_filnavn = time() . "_" . $fil['name'];

						// $billedmappe = '../img/gallery/';
						$billedmappe_big	= '../img/gallery/big/';
						$billedmappe_thumb	= '../img/gallery/thumb/';

						//================================================================

						//Load billedet ind i WideImage
						// (Svare til at man åbner billedet i en grafisk editor som Photoshop)
						$wi_billede_fuld = WideImage::load($fil['tmp_name']);

						// Gem billedet (i fuld størrelse) i "uploadede_billeder" mappen
						// $wi_billede_fuld -> saveToFile ($billedmappe . $nyt_filnavn );

						//================================================================

						
						// Resize uploaded image to 900px
						$wi_billede_big = $wi_billede_fuld -> resize('900', '900', 'inside', 'any');
						// Save image big_time_filename.jpg with quality 80
						$wi_billede_big -> saveToFile($billedmappe_big . 'big_' . $nyt_filnavn, 80);

						// Resize uploaded image to thumbnail size
						$wi_billede_thumb = $wi_billede_fuld -> resizeDown (190);

						// Save thumbnail as thumb_time_filename.jpg with quality 80 
						$wi_billede_thumb -> saveToFile($billedmappe_thumb . 'thumb_' . $nyt_filnavn, 80);


						//================================================================
						// Inser image name to DB

						$image_insert_sql = "
						INSERT INTO gallery
						(image_name) VALUES 
						('$nyt_filnavn')";

						$billede_insert_result = mysqli_query($con, $image_insert_sql) or die(mysqli_error());

						header("upload-image.php");

					}
					else {
						echo "<p>Filen blev ikke uploadet korrekt.</p>";
					}
				}


				//================================================================
				// Show images on website
				//================================================================

				$query = "SELECT img_id, image_name FROM gallery ORDER BY img_id DESC";

				$billede_result = mysqli_query($con, $query);

				while ($billede_row = mysqli_fetch_assoc ($billede_result)) {

					// -------------------------------
					// linking the image path we need to show thumbnails.
					// Exmpel: gallery/thumb/thumb_1294615073_monkey.jpg
					// $thumb_src = '../img/gallery/thumb/thumb_' .$billede_row ['image_name' ];
					$thumb_src = '../img/gallery/thumb/thumb_' .$billede_row ['image_name' ];

					// echo "<img src='$thumb_src'>";

					// ------------------------------------------
					// linking the image path we need to show thumbnails.
					// Exmpel: gallery/big/big_1294615073_monkey.jpg
					// $billede_src = "../img/gallery/big/big_" .$billede_row ['image_name'];
					$billede_src = '../img/gallery/big/big_' .$billede_row ['image_name'];

					// link i billede	
					echo "<p><a href='$billede_src' target='_blank'><img src='$thumb_src'></a></p>";

					// link på tekst
					echo "<p><a href='$billede_src' target='_blank'>See the image in full-size</a></p>"; 

					// echo "<p><a href='$billede_src' target='_blank'><img src='$thumb_src'></a></p>";

					//-----------------
					echo "Billednavn:" .$billede_row['image_name'];

					$onclick = 'return confirm("Are you sure you want to delete the picture?")';
					echo "<br /><a href='handlers/delete_image.php?img_id=" 
					.$billede_row ['img_id']. " 'onclick='$onclick'>Delete picture</a>";
					echo "<br>";
					echo "<br>";
					echo "<hr />";
				}

				?>

			</fieldset>
		</div>
	</div>
</div>
