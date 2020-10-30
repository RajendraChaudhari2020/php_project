<?php
include('../includes/header.php');
?>
<form class=form action="" method="post">
    <table class=driverTable border="1">
        <tr>
            <td>
                <label for="firstname">First Name</label>
            </td>
            <td>
                <input type="text" name="firstname">
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
                <input type="text" name="lastname">
            </td>
        </tr>
        <tr>
            <td>
                <label for="mobile">Mobile</label>
            </td>
            <td>
                <input type="text" name="mobile">
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">Email</label>
            </td>
            <td>
                <input type="text" name="email">
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
                <label for="address">Address:</label>
            </td>
            <td>
                <textarea name="" id="" cols="20" rows="5"></textarea>
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
                <label for="driverPhoto">Upload Your Photo</label>
            </td>
            <td>
                <input type="file" name="driverPhoto">
            </td>
        </tr>
        <tr>
            <td>
                <label for="driverSing">Upload Your Sing In Image</label>
            </td>
            <td>
                <input type="file" name="driverSing">
            </td>
        </tr>
        <tr>
            <td>
                <label for="license">License Number And Image</label>
            </td>
            <td>
                <input type="text" name="license"><br/>
                <input type="file" name=licenseImage>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
    <table class=carTable border="1">
        <tr>
            <td><label for="car_number">Car Number</label></td>
            <td><input type="text" name="car_number"></td>
        </tr>
    </table>
</form>

<?php
include('../includes/footer.php');
?>