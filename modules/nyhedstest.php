<div class="container">
	<div class="row">
		<aside class="col-md-4">
			<img src="img/poul-lynge-larsen.jpg" alt="..." class="img-circle profile-img">
		</aside>
		<div class="blog-wrap">
			<div class="col-md-8">

				<!-- ================================================================= -->

				<button id="knap_hent">Hent data vha. jQuery Load()</button>

				<!-- ================================================================= -->

				<h2>Result:</h2>
				<div id="result">
					<i class='info'>(Tryk på knappen for at hente oplysninger fra <b>data.php</b> filen)</i>
				</div>

				<!-- ================================================================= -->

				<h2>Status:</h2>
				<div id="status">
					<i class='info'>(Her kommer der til at stå om det lykkedes at hente oplysningerne)</i>
				</div>

				<!-- ================================================================= -->

				<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

				<script>
			// ready() betyder: Når HTML'en er færdig med at loade
			$(document).ready(function() {

				// Fortæl hvad der skal ske, når man trykker på "Hent" knappen
				$("#knap_hent").click(function() {
					$("#result").load("modules/nyheds_data.php", function(responseText, textStatus, jqXHR) {

						var minStatusTekst = "";

						if (textStatus == "success") {
							minStatusTekst = "<span style='color: green'>Det lykkedes.</span>";
						} else {
							minStatusTekst = "<span style='color: red'>Der opstod en fejl.</span>";
						}
						$("#status").html(minStatusTekst);
						
					}); // Afslutter: load(function(){
				}); // Afslutter: knap click()


			}); // Afslutter: ready()
		</script>


	</div>
</div>
</div>
</div><!-- /container -->