<?php
// session_start();
$db = new mysqli('localhost','root','','cab_servies');

?>
<?php
include_once('./connection.php');
include('./includes/header.php');
//  print_r($_SESSION);
if (!$_SESSION['isLogin']) {
    header('location:./authenticate/login.php');
    // header('location:index.php');
    // exit;
}
?>

<div class="infoPart">
    <div>
        <!-- <h1>Book Your Ride</h1> -->
        <img src="./assets/images/infopart.jpg" alt="Infophoto" class="infoImage" style="width: 100%;">
    </div>
</div>
<div class="heroPart">
<div class="caption">
    <span class="border">Wel-Come RideOnCab</span><br>
    <span class="border">Book You Cab "Fast" AND Saftly</span>
  </div>


    
    <div class="contain">


        <div > 
            <img src="<?php //redirect_url('assest/images/logo.png');?>" alt="" sizes="" srcset="">
        </div>
        <div>
        </div>
    </div>
</div>
<div class="infoFooter">
    <div>

    </div>
</div>
<div name="footer">
    <?php include('./includes/footer.php'); ?>
</div>