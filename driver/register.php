<?php
// include('../includes/header.php');
?>
<form action="" method="post">
    <table border="1">
        <tr>
            <td>
                <label for="firstname">First Name</label>
            </td>
            <td>
                <input type="text" name="firstname">
            </td>
        </tr>
        <!-- <tr>
            <td>
                <label for="middelname">Middel Name</label>
            </td>
            <td>
                <input type="text" name="middelname">
            </td>
        </tr> -->
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
        <!-- <tr>
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
        </tr> -->
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
        <input type="submit" name="submit" value="Register">
    </td>
</tr>
    </table>
</form>

<?php
include('../includes/footer.php');
?>