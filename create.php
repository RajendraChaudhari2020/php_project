<?php
$conform_password = "";

include('connection.php');
if (isset($_POST['submit'])) {

    print_r($_FILES); echo"<br/>";
    $tempProfileImageName =$_FILES['profile_image_name']['tmp_name'];
    $profileImageName= $_FILES['profile_image_name']['name'];
    $destination="assets/files/";
    move_uploaded_file($tempProfileImageName,$destination.$profileImageName);


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform_password = $_POST['conform_password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $profile_image = $profileImageName;

    ////QUERYS///
    $selectQuery = "SELECT * FROM `admin`";


    ////////////////////////////
    $records = $db->query($selectQuery);
    $row = $records->fetch_object();

    // if ($password != $conform_password) {
    //     echo " password is not match";

    // // }
    // if ($row = $records->fetch_object() == $email) {
    // //  $errorEmail "Email Alrady Exit";
    // }
    $iQ = "INSERT INTO `admin`(`firstname`, `lastname`, `mobile`, `email`, `gender`, `password`, `address`, `city`,`profileImage`) 
    VALUES 
    ('$firstname','$lastname','$mobile','$email','$gender','$password','$address','$city','$profile_image')";

print_r($iQ);
    if ($db->query($iQ)) {
        echo "Query IS ok Data Inserted";
        // echo $iQ;

    } else {
        echo "Error IN Query";
    }
}


echo"<br/>";
print_r($_POST);
?>
<?php include('./includes/header.php'); ?>

<div>
    <form action="" method="POST" enctype="multipart/form-data">
        <table border="0">
            <tr>
                <td><label for="firstname">First Name:</label></td>
                <td><input type="text" name="firstname" id="firstname" placeholder="Enert First Name"></td>
            </tr>
            <tr>
                <td><label for="lastname">Last Name:</label></td>
                <td><input type="text" name="lastname" id="lastname" placeholder="Enert Last Name"></td>
            </tr>
            <tr>
                <td><label for="gender">Gender:</label></td>
                <td><input type="radio" name="gender" value="male" id="male" checked>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="female" id="female">
                    <label for="female">Female</label></td>
            </tr>
            <tr>
                <td><label for="mobile">Mobile Number:</label></td>
                <td><input type="number" name="mobile" id="mobile" placeholder="Enert Mobile Number"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" name="email" id="email" placeholder="Enert Email Address"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password" placeholder="Enert Password">
                    <input type="hidden">
                </td>

            </tr>
            <tr>
                <!-- <script> 
            function checking(){
                   var pw= document.getElementById($password);
                   var cpw= document.getElementById($conform_password);
                    if(pw != cpw){
                        alert("password not match");
                    }
            }
            </script> -->
                <td><label for="conform_password">Conform Password:</label></td>
                <td><input type="password" name="conform_password" id="conform_password" placeholder="Enert Confrom Password" onblur="checking()"><span></span></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td>
                    <textarea name="address" id="address" cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><label for="city">City:</label></td>
                <td><select name="city" id="city">
                        <option name="select-city">select-city</option>
                        <option value="surat">Surat</option>
                        <option value="navsari">Navsari</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="profileImage">ProfileImage</label></td>
                <td><input type="file" name="profile_image_name"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button name="submit">SUBMIT</button><button name="edit" value="<?php ?>">EDIT</button></td>
                <!-- <td></td> -->
            </tr>
        </table>
    </form>
</div>
<?php include('./includes/footer.php'); ?>