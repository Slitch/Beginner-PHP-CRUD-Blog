<?php 
  if (!isset($_SESSION['user_id'])) {

    header("Location: index.php");
    
}

$post_title ="";
$post_text ="";
?>


<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Blog<small> Skrive et nyt blog indlæg</small></h1>
      

      <?php

      if (isset($_POST['create_post'])) {

        // echo "<pre>", print_r($_POST), "</pre>";

        $post_title = $_POST['post_title'];
        $post_text = $_POST['post_text'];


        $errors = []; // det betyder at $errors er et array

        if ($post_title == "") {
          $errors['post_title'] = "<span class='red'> Titel er obligatorisk</span>";
        }

        if ($post_text == "") {
          $errors['post_text'] = "<span class='red'> Indhold er obligatorisk</span>";
        }

        if (empty($errors)) {

          // $query = "INSERT INTO news (post_title, post_text) VALUES ('$post_title', '$post_text')";

          $query = "INSERT INTO blog SET
                  post_title  = '$post_title',
                  post_text   = '$post_text'
                  ";

          mysqli_query($con, $query);

          header("Location: ../admin/index.php?p=all-blogpost");

          // echo "Artikel Indsat ";

          // echo "$query";
        }
      }
 
      ?>
      <!-- form -->
      <form method="post">

      <!-- Title form -->
        <div class="row control-group">
          <!--  post_title  -->
          <div class="form-group col-xs-6 floating-label-form-group controls">
            <label for="post_title">Title</label>
            <?php 
            
            if (isset($errors['post_title'])) {
              echo $errors['post_title'];
            }

            ?>
            <br>

            <input type="text" class="form-control" name="post_title" placeholder="Skriv en titel" value="<?php echo $post_title; ?>">

          </div>
        </div>
        <!-- Title form end -->
        
        <!-- Inhold form -->
        <div class="row control-group">
          <div class="form-group floating-label-form-group controls">
            <label for="news_OprettetDen">Text</label>

            <?php 
            if (isset($errors['post_text'])) {
              echo $errors['post_text'];
            }?>
            <textarea name="post_text" class="form-control" cols="30" rows="10" placeholder="Write new blog post"><?php echo $post_text; ?></textarea><br>

          </div>
        </div>
        <!-- indhold form end -->

        <input type="submit" name="create_post" value="Opret Nyhed"><br>
      </form>
      <!-- form end -->

    </div>
  </div>
  <!-- /.row -->

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php //echo "<pre>", print_r($_SESSION), "</pre>"; ?>