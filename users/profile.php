<?php
include('../connection.php');
include('../includes/header.php');

if (isset($_SESSION['isLogin'])) {
    print_r($_SESSION);
    echo "<br>";
    $user = $_SESSION['user'];

    $rid = $user->id;
    echo "$rid" . "<br>";
} else {
    echo "SESSION HAVE NO VALUES";
}

// print_r($_FILES);



$profileQuery = " SELECT * FROM `users` WHERE `id` = $rid";

$profileData = $db->query($profileQuery);
// print_r($profileData);
// echo "<br>";

$row = $profileData->fetch_object();
// echo "ROW-";
print_r($row);
// echo "<br>";

if (isset($_REQUEST['submit'])) {
    // $tempName = $_FILES['profilePhoto']['tmp_name'];
    // $p = $_FILES['profilePhoto']['name'];
    // $dc ="assets/file/";
    // move_uploaded_file($tempName,$db.$profilePhoto);

    $firstname = $_POST['firstname'];
    $middelname = $_POST['middelname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    // $profilePhoto = $p;

    /////////////////////////




    $updateQuery = "UPDATE `users` SET 
    `firstname`='$firstname',
    `middelname`='$middelname',
    `lastname`='$lastname',
    `gender`='$gender',
    `mobile`='$mobile',
    `email`='$email',
    `address`='$address',
    `city`='$city' 
    WHERE `id` = $rid";
    // `profileImage`='$profilePhoto'

    // print_r($updateQuery);
    // $db->query($updateQuery);

    if ($db->query($updateQuery)) {
        // echo "Update Ok" . "<br>";
        header('Location:../index.php');
    } else {
        echo "ERRROR" . "<br>";
    }
}



?>
<form class=form action="" method="post" enctype="multipart/form-data">
    <table class=userTable border="1">
        <tr>
            <td>
                <label for="firstname">First Name</label>
            </td>
            <td>
                <input type="text" name="firstname" value="<?php echo $row->firstname; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="middelname">Middel Name</label>
            </td>
            <td>
                <input type="text" name="middelname">
            </td>
        </tr>
        <tr>
            <td>
                <label for="lastname">Last Name</label>
            </td>
            <td>
                <input type="text" name="lastname" value="<?php echo $row->lastname ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="mobile">Mobile</label>
            </td>
            <td>
                <input type="text" name="mobile" value="<?php echo $row->mobile ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">Email</label>
            </td>
            <td>
                <input type="text" name="email" value="<?php echo $row->email ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="gender">Gender</label>
            </td>
            <td>
                <input type="radio" name="gender" id="male" value="male" <?php
                                                                            if ($row->gender == 'male') {
                                                                                echo "checked";
                                                                            }
                                                                            ?>><label for="male">Male</label>
                <input type="radio" name="gender" id=female value="female" <?php
                                                                            if ($row->gender == 'female') {
                                                                                echo "checked";
                                                                            }
                                                                            ?>><label for="female">Female</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="address">Address:</label>
            </td>
            <td>
                <textarea name="address" id="" cols="20" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="city">City:</label>
            </td>
            <td>
                <select name="city" id="city">
                    <option value="surat">surat</option>
                    <option value="navsari">navsari</option>
                </select>
            </td>
        </tr>
        <!-- <tr>
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
        </tr> -->
        <tr>
            <td>
                <label for="profilePhoto">Upload Your Photo</label>
            </td>
            <td>
                <input type="file" name="profilePhoto">
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
    <div>
        <div>

            <img src="./assets\uploding_files\20200118141820_IMG_9402.jpg" alt=""> </div>
    </div>
</form>

<?php
include('../includes/footer.php');
?>