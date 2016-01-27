<?php

include 'includes/connect.php';


if (isset($_GET['p'])) {
  $p = $_GET['p'];
} else if (isset($_POST['p'])) {
  $p = $_POST['p'];
} else {
  $p = NULL;
}

switch ($p) {

  case 'nyhedstest';
  $page = 'nyhedstest.php';
  break;

  case 'gallery';
  $page = 'gallery.php';
  break;

  case 'all-post';
  $page = 'all-post.php';
  break;

  case 'single-post';
  $page = 'single-post.php';
  break;

  case 'contact';
  $page = 'contact.php';
  break;

  case 'login';
  $page = 'login.php';
  break;

  default: // Going to the front page if the other pages dosen't work //
  $page = 'main.php';
}

if (!file_exists('modules/' . $page)) {
  $page = 'main.php';
}

include 'includes/head.php'; // HEADER META

include 'modules/' . $page; // CONTENT

include 'includes/footer.php'; // FOOTER

?>