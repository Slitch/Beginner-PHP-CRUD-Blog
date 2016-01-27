<?php 
function date_converter($bamse_og_kylling) {
	$date = new DateTime($bamse_og_kylling);
	return $date->format('d/m-Y H:i');
}


function blog_post() {

}

 ?>