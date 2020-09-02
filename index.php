<?php 
$server = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "burgerking";

$conn = mysqli_connect($server, $username, $password, $database);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/mypractice/index.css">

    <title> Form Submit </title>
  </head>
  <body>
    
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="/mypractice/index.php">
    <img src="burger.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
  <strong>Burger King </strong><small> | Prabhat Creation</small>
  </a>
</nav>

<div class="container my-3">
<h3> Please Write Your Feedback </h3>
</div>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  echo '<div class="alert alert-success" role="alert">
  <strong> Thanks! </strong> For Your Valuable Feedback | Visit Us Again
</div>';

$sql = " INSERT INTO `feedback` (`name`, `email`, `feedback`, `datetime`) VALUES ('$name', '$email', '$feedback', current_timestamp())";
 mysqli_query($conn, $sql);
}
?>

 
 <div class="container my-4">
 <form action="/mypractice/index.php" method="post">
 <div class="form-group">
    <label for="name"> Your Name </label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name: Ex:Prabhat">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="feedback"> Your Vaulable Feedback </label>
   <textarea class="form-control" name="feedback" id="feedback" cols="30" rows="10" placeholder="Please leave your feedback"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Please! Submit</button>
</form>
 
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>