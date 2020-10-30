<?php
// include('connection.php')
include('../connection.php');
if (isset($_SESSION['isLogin'])) {
    $user = $_SESSION['user'];
}
$userDataQuery = "SELECT * FROM `users`";
$userData = $db->query($userDataQuery);
// $row =$userData->fetch_object();
// print_r($row);
$bookingDataQuery = "SELECT * FROM `booking`";
$bookingData = $db->query($bookingDataQuery);

$driverDataQuery = "SELECT * FROM `driver`";
$drivedata = $db->query($driverDataQuery);
?>

<div>
    <div style="background-color: #5B1647;">
        <p style="color: white;">WEL COME ADMIN DASHBORD</p>
        <p style="color: white;"><?php echo ucfirst(strtolower($user->firstname)); ?></p>
    </div>
    <div>
        <p>login Information</p>
    </div>
    <div>
        <nav>
            <div>

            </div>

        </nav>
        <p>ADMIN ACTION NAV</p>

    </div>
    <div>
        <label for="userData">USER DATA </label>

        <table border="1">
            <tr>
                <td>First Name</td>
                <td>Middel Name</td>
                <td>Last Name</td>
                <td>Gender</td>
                <td>Mobile</td>
                <td>Email</td>
                <td>Address</td>
                <td>City</td>
                <td>Profile</td>
                <td>Status</td>
                <td colspan="3" align="center">Action</td>
            </tr>
            <?php while ($row = $userData->fetch_object()) { ?>
                <tr>
                    <td>
                        <?php echo $row->firstname ?>
                    </td>
                    <td>
                        <?php echo $row->middelname ?>
                    </td>
                    <td>
                        <?php echo $row->lastname ?>
                    </td>
                    <td>
                        <?php echo $row->gender ?>
                    </td>
                    <td>
                        <?php echo $row->mobile ?>
                    </td>
                    <td>
                        <?php echo $row->email ?>
                    </td>
                    <td>
                        <?php echo $row->address ?>
                    </td>
                    <td>
                        <?php echo $row->city ?>
                    </td>
                    <td>
                        <?php echo $row->profileImage ?>
                    </td>
                    <td>
                        <!-- SHOW -->
                    </td>
                    <td>
                        <a href="">SHOW</a>
                    </td>
                    <td>
            <a href="" >EDIT</a>
                    </td>
                    <td>
                       <a href="DELETE">DELETE</a> 
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- ///////////////BOOKING_DATA////////////////// -->
    <div>
        <label for="bookingData">BOOKING DATA </label>
        <table border="1">
            <tr>
                <td>Cus.Name</td>
                <td>Mobile</td>
                <td>Atl Mobile</td>
                <td>Passenger</td>
                <td>From Location</td>
                <td>From Address</td>
                <td>From State</td>
                <td>To Location</td>
                <td>To Address</td>
                <td>To State</td>
                <td>Book Date</td>
                <td>Book Time</td>
                <td>Pick Time</td>
            </tr>
            <?php while ($row = $bookingData->fetch_object()) {  ?>
                <tr>
                    <td>
                        <?php echo $row->customerName; ?>
                    </td>
                    <td>
                        <?php echo $row->mobile; ?>
                    </td>
                    <td>

                        <?php echo $row->altNumber; ?>
                    </td>
                    <td>
                        <?php echo $row->passenderNumber; ?>
                    </td>
                    <td>
                        <?php echo $row->fromLocation; ?>
                    </td>
                    <td>
                        <?php echo $row->fromAddress; ?>
                    </td>
                    <td>
                        <?php echo $row->fromState; ?>
                    </td>
                    <td>
                        <?php echo $row->toLocation; ?>
                    </td>
                    <td>
                        <?php echo $row->toAddress; ?>
                    </td>
                    <td>
                        <?php echo $row->tostate; ?>
                    </td>
                    <td>
                        <?php echo $row->bookDate; ?>
                    </td>
                    <td>
                        <?php echo $row->bookTime; ?>
                    </td>
                    <td>
                        <?php echo $row->pickUpTime; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- //////////////////////DRIVER_DATA//////////////////// -->
    <div>
        <label for="driverData">DRIVER DATA </label>

        <table border="1">
            <tr>
                <td>
                    name
                </td>
                <td>
                    mobile,
                </td>
                <td>
                    email,
                </td>
                <td>
                    password,
                </td>
                <td>
                    car_number,
                </td>
                <td>
                    car_model,
                </td>
                <td>
                    car_color,
                </td>
                <td>
                    car_image,
                </td>
                <td>
                    car_owner_sign,
                </td>
                <td>
                    car_rc_number,
                </td>
                <td>
                    car_type,
                </td>
                <td>
                    car_puc,
                </td>
                <td>
                    car_insurance,
                </td>
                <td>
                    car_owner_photo,
                </td>
                <td>car_status,</td>
                <td>status</td>
            </tr>
            <?php while ($row = $drivedata->fetch_object()) {  ?>
                <tr>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->mobile; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->car_number; ?></td>
                    <td><?php echo $row->car_model; ?></td>
                    <td><?php echo $row->car_color; ?></td>
                    <td><?php echo $row->car_image; ?></td>
                    <td><?php echo $row->car_owner_sign; ?></td>
                    <td><?php echo $row->car_rc_number; ?></td>
                    <td><?php echo $row->car_type; ?></td>
                    <td><?php echo $row->car_puc; ?></td>
                    <td><?php echo $row->car_insurance; ?></td>
                    <td><?php echo $row->cal_owner_photo; ?></td>
                    <td><?php echo $row->car_status; ?></td>
                    <td><?php echo $row->status; ?></td>
                </tr>

            <?php } ?>
        </table>
    </div>
</div>
<div style="background-color: #5B1647;">
    <?php //include('./includes/footer.php');
    ?>
</div>