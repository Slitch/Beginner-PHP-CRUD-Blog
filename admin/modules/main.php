<?php 
  if (!isset($_SESSION['user_id'])) {

    header("Location: ../../index.php");
    
}
?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1><a href="index.php?p=create_post">New post</a></h1>
            <h1><a href="index.php?p=new-image">New image</a></h1>
            <h1><a href="#">Edit contact info</a></h1>
            <h1><a href="#">Log out</a></h1>
            
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->