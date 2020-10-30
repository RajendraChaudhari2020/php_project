<?php 
include('../connection.php');
 include('../includes/header.php'); 
$db = new mysqli('localhost', 'root', '', 'cab_servies');

?>


<div class="">
    <form action="" method="POST">
        <label for="name">User Name:</label>
        <input type="text" name="email" id="email" placeholder="Enter Your Email ID">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter Password">
        <input type="submit" value="LOGIN" name="btnLogin">
        <a href="<?php echo ('authenticate/forgot_password.php'); ?>">FORGET PASSWORD</a>
        <a href="<?php echo ('register.php'); ?>">REGISTER</a>
    </form>
</div>
<?php include('../includes/footer.php'); ?>
