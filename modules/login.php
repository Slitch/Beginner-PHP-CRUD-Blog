<?php
// ob_start();
// session_start();

// include '/../includes/connect.php';

if (isset($_POST['login_submit'])) {

  // echo "<pre>", print_r($_POST), "</pre>";

    $email         = $_POST['email'];
    $password      = $_POST['password'];


    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
    
    $result = mysqli_query($con, $query);

    $numbers_of_rows = mysqli_num_rows($result);

    // echo "Number og rows: " . $numbers_of_rows;

    if ($numbers_of_rows == 1) {

        // echo "Inde i vores IF num rows == 1 <br>";
        // echo "<pre>", print_r(), "</pre>";

        $row = mysqli_fetch_assoc($result);

        // echo "<pre>", print_r($row), "</pre>";

        $_SESSION['user_id']    = $row['user_id'];
        $_SESSION['email']      = $row['email'];

         // echo "<pre>", print_r($_SESSION), "</pre>";

       header("location: admin/index.php");

    } else {
        // Håndter fejl ved login
    }
}
?>

<div class="container">

  <form method="post" class="form-signin">
    <h2 class="form-signin-heading">Please sign in</h2>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_submit">Sign in</button>
    <br>
    <a href="index.php?p=register">Register new user</a>
</form>

</div> <!-- /container -->