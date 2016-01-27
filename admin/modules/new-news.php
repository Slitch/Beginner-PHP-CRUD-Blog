<?php 
  if (!isset($_SESSION['user_id'])) {

    header("Location: ../../index.php");
    
}
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Opret Aktivitet<small> Her kan du oprette en aktivitet</small></h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Opret Aktivitet
                </li>
            </ol>


<?php

if (isset($_POST['Submit'])) {

    echo "<pre>", print_r($_POST), "</pre>";

    $news_title = $_POST['news_title'];
    $news_content = $_POST['news_content'];


    $query = "INSERT INTO news (news_title, news_content) VALUES ('$news_title', '$news_content')";


    mysqli_query($con, $query);

    echo "Artikel Indsat";

    echo "$query";

}


?>

<form method="post">
    <div class="row control-group">
        <!--  news_title  -->
        <div class="form-group col-xs-6 floating-label-form-group controls">
            <label for="news_title">Title</label><br>
            <input type="text" class="form-control" name="news_title" id="news_title" placeholder="skriv"><br>  
        </div>
    </div>

    <!--  news_OprettetDen  -->
    <div class="row control-group">
        <div class="form-group col-xs-6 floating-label-form-group controls">
            <label for="news_OprettetDen">Tekst</label><br>
            <textarea name="news_content" class="form-control" id="news_content" cols="30" rows="10" placeholder="jujjijbi"></textarea><br>
        </div>
    </div>


    <input type="Submit" name="Submit" value="Opret Nyhed"><br>
</form>






            
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->