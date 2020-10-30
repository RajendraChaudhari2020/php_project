<?php
include('../connection.php');
include('../includes/header.php');
if (isset($_REQUEST['register'])) {


    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $conformpassword = $_REQUEST['conformpassword'];

    $registerQuery = "INSERT INTO `users`(`firstname`, `lastname`,`mobile`, `email`, `password`)
                                  VALUES ('$firstname','$lastname','$mobile','$email','$password')";

    if ($db->query($registerQuery)) {
        echo "DONE";
    } else {
        echo $db->error;
    }
    ///////////////////////////////////////


    $getId = "SELECT * FROM `users` WHERE `email`='$email'";
    // print_r($getId);echo"<br>";
    $records = $db->query($getId);
    // print_r($records);echo"<br>";
    // $row = $records->fetch_object();
    // print_r($row);
    if ($records->num_rows == 1){
        $_SESSION['isLogin'] = true;
        $_SESSION['user'] = $records->fetch_object();
        // $_SESSION['id']= 20;
        // print_r($_SESSION);
        // echo"SESSION OK"."<br>";
        // print_r($_SESSION);
        header('Location:../users/profile.php');
    
    }else{
        echo "session Error";
    }
}
// print_r($_REQUEST);


?>
<div>
    <div>
<img style="position: absolute;
 top: 90px;
 left: 400px;" src="../assets/images/register.jpg" alt="login" class="login">
    
    </div>
    <div>
<form action="" method="post">
    <table border="0">
        <tr>
            <td>
                <label for="firstname">First Name</label>
            </td>
            <td>
                <input type="text" name="firstname" placeholder="Enter Your First Name">
            </td>
        </tr>
        <tr>
            <td>
                <label for="lastname">Last Name</label>
            </td>
            <td>
                <input type="text" name="lastname" placeholder="Enter Your Last Name">
            </td>
        </tr>
        <tr>
            <td>
                <label for="mobile">Mobile</label>
            </td>
            <td>
                <input type="text" name="mobile" placeholder="Enter Mobile Number">
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">Email</label>
            </td>
            <td>
                <input type="text" name="email" placeholder="Eneter Your Email">
            </td>
        </tr>
        <tr>
            <td>
                <label for="gender">Gender</label>
            </td>
            <td>
                <input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
                <input type="radio" name="gender" id=female value="female"><label for="female">Female</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">Password:</label>
            </td>
            <td>
                <input type="password" name="password" placeholder="Enter Your Password">
            </td>
        </tr>
        <tr>
            <td>
                <label for="conformpassword">Conform Password</label>
            </td>
            <td>
                <input type="password" name="conformpassword" placeholder="Enter Your Conform Password">

            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="register" value="Register">
            </td>
        </tr>
    </table>
</form>
</div>
</div>
<?php
include('../includes/footer.php');
?>