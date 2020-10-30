<?php
// session_start();
$db = new mysqli('localhost','root','','cab_servies');

?>
<?php

    $hostname = $_SERVER['DOCUMENT_ROOT'];
    $projectName = explode("/",$_SERVER['REQUEST_URI']);
// include($hostname."/".$projectName[1].'/connection.php');
// include('../connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RideOnCab</title>
  <link rel="stylesheet" href="<?php echo redirect_url('assets/css/style.css');?>">
  <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->
</head>

<body>
  <div class="logo">
    <!-- <img src="<?php// redirect_url('assest/images/logo.png');?>" alt="" class="logo"> -->
  </div>
  <div class="topnav">

    <a href="<?php echo redirect_url('/index.php') ?>">Home</a>
    <a href="<?php echo redirect_url('/booking/create.php')?>">Book</a>
    <a href="<?php echo redirect_url('/about.php')?>">About</a>
    <a href="<?php echo redirect_url('/driver/login.php')?>">Driver </a>
    <div class="action">
      <?php
      if (isset($_SESSION['isLogin'])) {
        $user = $_SESSION['user'];
        // $profile = $_SESSION['profileImage'];
      ?>
        <p > Wel-Come . </p>
        <p ></p>
        <!-- <img src="/assets/images/logo.png" alt="" sizes="" srcset=""> -->
        <a  href="<?php echo redirect_url('/users/profile.php'); ?>""><?php echo ucfirst(strtolower($user->firstname));?></a>
        <a  href="<?php echo redirect_url('/authenticate/logout.php'); ?>"">LOGOUT</a>
      <?php
      } else {
      ?>
        <a  href="<?php echo redirect_url('/authenticate/login.php'); ?>">Login</a>
        <a  href="<?php echo redirect_url('/users/register.php');?> ">Register</a>

      <?php
      }
      ?>
    </div>
  </div>