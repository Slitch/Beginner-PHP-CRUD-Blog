<?php

include 'includes/connect.php';

include('functions/func.php');

// echo "<pre>", print_r($_SESSION), "</pre>";

if (!isset($_SESSION['email'])) {

    header("Location: index.php");
    
}

if (isset($_GET['p'])) {  
    $p = $_GET['p'];
} else if (isset($_POST['p'])) {
    $p = $_POST['p'];
} else {
    $p = NULL;
}

switch ($p) {

  case 'page':
    $page = 'page.php';
    break;

  case 'test':
    $page = 'test.php';
    break;

  case 'all_blogpost':
    $page = 'all-blogpost.php';
    break;

  case 'all_pages':
    $page = 'all-pages.php';
    break;


  case 'news':
    $page = 'news.php';
    break;

  case 'create_post':
    $page = 'create-post.php';
    break;

  case 'edit-news':
    $page = 'edit-news.php';
    break;

  case 'all-news':
    $page = 'all-news.php';
    break;

  case 'new-image':
    $page = 'upload-image.php';
    break;

  case 'main':
    $page = 'main.php';
    break;
    
  default: // going to the fron page is the the other pages dosent work //
    $page = 'main.php'; 
}

if (!file_exists('modules/' . $page)) {
  $page = 'main.php';
  # code...
}

include 'includes/header.php';

include 'modules/' . $page;

include 'includes/footer.php';


?>

