<?php
include('../includes/header.php');
?>
<div>
    <form action="" method="POST">
        <table border="">
            <tr>
            <tr>
                <th colspan="2">LOGIN</th>
            </tr>
            <td><label for="name">User Name:</label></td>
            <td><input type="text" name="email" id="email" placeholder="Enter Your Email ID"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password" placeholder="Enter Password"></td>
            </tr>
            <tr>
                <td></td>
                <td align="center">
                    <input type="submit" value="LOGIN" name="btnLogin">
                    <a href="../users/forgot_password.php">FORGET PASSWORD</a></td>
            </tr>
        </table>
    </form>
</div>
<?php

include('../includes/footer.php');
?>