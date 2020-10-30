<!-- <div class=main> -->
<?php
// session_start();
$db = new mysqli('localhost', 'root', '', 'cab_servies');

?>
<?php
include('../connection.php');
// include('../includes/header.php');
// $hostname = $_SERVER['DOCUMENT_ROOT'];
// $projectName = explode("/",$_SERVER['REQUEST_URI']);
// include($hostname."/".$projectName[1].'/connection.php');
if (isset($_REQUEST['btnLogin'])) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $loginAdmin = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = $password ";
    $loginAdminImageQuery = "SELECT * FROM `admin` WHERE `email` = '$email'";
    $recordsAdmin = $db->query($loginAdmin);
    $adminProfileImage = $db->query($loginAdminImageQuery);
    // $profilephoto =$adminProfileImage->fetch_object();
    // print_r($profilephoto); echo"<br>";


    $loginUser = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = $password";
    $loginUserImageQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
    $recordsUser = $db->query($loginUser);
    $userProfileImage = $db->query($loginUserImageQuery);
    // $db->query($lQ);
    // $row = $records->fetch_object();
    // print_r($row);
    // print_r($records);
    // echo "<br>";
    // echo $lQ . "<br>";
    // if ($email == $row->email) {
    //     if ($passwprd == $row->password) {
    //         echo "SUCCESSFULLY LOGIN";
    //     } else {
    //         echo "CHECK YOUR PASSWORD";
    //     }
    // } else {
    //     echo "CHECK YOU EMAIL ID";
    // }
    /////////////SESSION/////////////

    // print_r($records);echo"<br/>";
    if ($recordsAdmin->num_rows == 1) {
        $_SESSION['isLogin'] = true;
        $_SESSION['user'] = $recordsAdmin->fetch_object();
        $_SESSION['profileImage'] = $adminProfileImage->fetch_object();
        header('location:../admin/admin.php');
        // echo"OK";
        // print_r($_SESSION);
    } elseif ($recordsUser->num_rows == 1) {
        $_SESSION['isLogin'] = true;
        $_SESSION['user'] = $recordsUser->fetch_object();
        $_SESSION['profileImage'] = $userProfileImage->fetch_object();
        header('location:../index.php');
    }
}
// print_r($_REQUEST);
?>
<?php include('../includes/header.php'); ?>
<div class="">

    <div>
        <img src="../assets/images/register.jpg" alt="login" class="loginImage">
    </div>
    <form class="loginForm" action="" method="POST">
        <label for="name">User Name:</label>
        <input type="text" name="email" id="email" placeholder="Enter Your Email ID">
        <br />
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter Password">
        <br />
        <input type="submit" value="LOGIN" name="btnLogin">
        <a href="<?php echo ('authenticate/forgot_password.php'); ?>">FORGET PASSWORD</a>
    </form>
</div>
</div>
<?php include('../includes/footer.php'); ?>