<?php
include('../connection.php');
include('../includes/header.php');

if(isset($_SESSION['isLogin'])){
$bookingUser= $_SESSION['user'];
// print_r($_SESSION['user']);
print_r($bookingUser);
// echo $bookingUser->id;
}else{
    header('Location:../authenticate/login.php');
}

if (isset($_REQUEST['submit'])) {

    $userName = $_REQUEST['userName'];
    $mobile = $_REQUEST['mobile'];
    $altNumber = $_REQUEST['altNumber'];
    $passenderNumber = $_REQUEST['passenderNumber'];
    $fromLocation = $_REQUEST['fromLocation'];
    $fromAddress = $_REQUEST['fromAddress'];
    $fromState = $_REQUEST['fromState'];
    $toLocation = $_REQUEST['toLocation'];
    $toAddress = $_REQUEST['toAddress'];
    $tostate = $_REQUEST['tostate'];
    $bookDate = $_REQUEST['bookDate'];
    $bookTime = $_REQUEST['bookTime'];
    $pickUpTime = $_REQUEST['pickUpTime'];
    // $userName=$_REQUEST['userName'];

    $bQuery = "INSERT INTO `booking`(`userName`, 
    `mobile`, `altNumber`, `passenderNumber`, 
    `fromLocation`, `fromAddress`, `fromState`,
     `toLocation`, `toAddress`, `tostate`,
      `bookDate`, `bookTime`,
     `pickUpTime`) VALUES ('$userName','$mobile','$altNumber',
     '$passenderNumber','$fromLocation','$fromAddress',
     '$fromState','$toLocation','$toAddress',
     '$tostate','$bookDate','$bookTime','$pickUpTime')";

    print_r($bQuery);
    $db->query($bQuery);
    echo "<br/>";
    echo "<br/>";
    print_r($_REQUEST);


    if (isset($_REQUEST['returnBooking'])) {
        $r_date = $_REQUEST['r_date'];
        $r_time = $_REQUEST['r_time'];
        $pickUpTime = $_REQUEST['pickUpTime'];
        $location = $_REQUEST['location'];
        $passenderNumber = $_REQUEST['passenderNumber'];
        $returnAddress = $_REQUEST['returnAddress'];
        $state = $_REQUEST['state'];
        // print_r($_REQUEST);
        $rBookingQuery = "INSERT INTO `returnbooking`(`r_location`, `r_address`, `state`, `r_date`, `r_time`, `r_pick_up_time`, `passenger_number`) 
    VALUES ('$location','$returnAddress','$state','$r_date','$r_time','$pickUpTime','$passenderNumber')";

        $db->query($rBookingQuery);

        print_r($rBookingQuery);
    }
}
?>

<head>
    <style>
        .onclickHide {
            display: none;
        }
    </style>
</head>
<div>
<img src="../assets/images/booking-image.jpg" alt="login" class="bookingImage">

</div>
<div class="bg-img" style="background-image:url(assets/images/register.jpg) ;">
    <form class="bookingForm" action="" method="post">
        <label for="username">User Name:</label>
        <input type="text" name="userName" id="username" placeholder="Enter Your Name"
        value="<?php echo $bookingUser->firstname; ?>">
        <label for="mobile">Mobile</label>
        <input type="number" name="mobile" id="mobile" placeholder="Enter Your Mobile "
        value="<?php echo $bookingUser->mobile; ?>">
        <label for="altNumber">Alter Number</label>
        <input type="text" name="altNumber" placeholder="Enter Your Alternet Mobile">
        <label for="passenderNumber">Passender:</label>
        <input type="number" name="passenderNumber" id="passenderNumber" placeholder="How Many Persons?">
        <label for="fromLoc">From Location :</label>
        <select name="fromLocation" id="fromLocation">
            <option value="navsari">Navsari</option>
            <option value="surat">Surat</option>
            <option value="baroda">baroda</option>
        </select>
        <label for="from">From Address:</label><br/>
        <textarea name="fromAddress" id="" cols="20" rows="5" placeholder="Enter Your Address Manualy"></textarea><br/>
        <label for="fromState">From State</label>
        <select name="fromState" id="fromState">
            <option value="gujarat">Gujarat</option>
            <option value="mahrastra">Mahrastra</option>
            <option value="pune">Pure</option>
        </select>
        <label for="toLoc">To Location :</label>
        <select name="toLocation" id="toLcation">
            <option value="navsari">Navsari</option>
            <option value="surat">Surat</option>
            <option value="baroda">baroda</option>
        </select>
        <label for="toAddress">To Address:</label><br/>
        <textarea name="toAddress" id="" cols="20" rows="5" placeholder="Enter Your Address Manualy"></textarea><br/>
        <label for="toStat">To State</label>
        <select name="tostate" id="tostate">
            <option value="gujarat">Gujarat</option>
            <option value="mahrastra">Mahrastra</option>
            <option value="pune">Pure</option>
        </select>
        <label for="date">Date</label>
        <input type="date" name="bookDate" id="date">
        <label for="time">Time</label>
        <input type="time" name="bookTime" id="time">
        <label for="pickUpTime">Pick Up Time</label>
        <input type="time" name="pickUpTime" id="pickUpTime">
        <button>Book Your Ride</button>
      </form>
    <!-- ////////////////////Return Ride///////////////////// -->
    <input type="checkbox" id="rr" value="yes" onclick="myCheckBox()">
    <script>
        function myCheckBox() {
            if (document.getElementById('rr').checked) {
                document.getElementById('onclickHide').style.display = "list-item";
            } else {
                document.getElementById('onclickHide').style.display = "none";
            }
        }
    </script>

    <label for="returnRied">Return Ride Book</label>
    <form  style="
    position: absolute;
    width: 40%;
    float: left;
    left: 50%;
    top: 120%; "class="returnBookingForm" action=" " method="POST" class="onclickHide">
                <label for="returndate">Return Date</label>
                <input type="date" name="r_date">
                <label for="returntime">Time </label>
                <input type="time" name="r_time">
                <label for="pickUpTime">Pick Up Time</label>
                <input type="time" name="pickUpTime">
                <label for="returnLoc">Return Location :</label>
                <select name="location" id="location">
                    <option value="navsari">Navsari</option>
                    <option value="surat">Surat</option>
                    <option value="baroda">baroda</option>
                </select>
                <label for="passenderNumber">Passender:</label>
                <input type="number" name="passenderNumber" id="passenderNumber" placeholder="How Many Persons?">
                <label for="returnAddress">Return Address:</label><br/>
                <textarea class="textArea" name="returnAddress" id="" cols="20" rows="5" placeholder="Enter Your Address Manualy"></textarea><br/>                <label for="returnStat">Return State</label>
                <select name="state" id="state">
                    <option value="gujarat">Gujarat</option>
                    <option value="mahrastra">Mahrastra</option>
                    <option value="pune">Pure</option>
                </select>
                <button name="returnBooking" value="submit">Book</button>
    </form>
</div>
<div>

</div>
<?php
include('../includes/footer.php');
?>