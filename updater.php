<html>

<head>
    <title>Barclays Bank - Update Bank Details</title>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="png" href="image/rbs-logo.png" style="width:200px;height:200px;">
        <link type="text/css" href="./css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="./css/dashboard.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <link href="bootstrap.min.css" rel="stylesheet" />

    </head>
    <script>
    $('.message a').click(function() {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    });
    </script>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }

    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }

    .form button:hover,
    .form button:active,
    .form button:focus {
        background: #43A047;
    }

    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }

    .form .message a {
        color: #4CAF50;
        text-decoration: none;
    }

    .form .register-form {
        display: none;
    }

    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }

    .container:before,
    .container:after {
        content: "";
        display: block;
        clear: both;
    }

    .container .info {
        margin: 50px auto;
        text-align: center;
    }

    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }

    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }

    .container .info span a {
        color: #000000;
        text-decoration: none;
    }

    .container .info span .fa {
        color: #EF3B3A;
    }

    body {
        background: #76b852;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(right, #76b852, #8DC26F);
        background: -moz-linear-gradient(right, #76b852, #8DC26F);
        background: -o-linear-gradient(right, #76b852, #8DC26F);
        background: linear-gradient(to left, #76b852, #8DC26F);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    </style>


    <div class="section">
        <div id="Sign-In" align="center">
            <?php
$conn=new mysqli("localhost","root","","ticketing");
if(isset($_GET['updatesubmit']))
{
$ID=$_GET['ID'];
$name=$_GET['name'];
$email=$_GET['email'];
$flier=$_GET['flier'];
$number=$_GET['number'];
$booking=$_GET['booking'];
$issue_by=$_GET['issue_by'];
$issue_date=$_GET['issue_date'];
$issue_time=$_GET['issue_time'];
$departure_time=$_GET['departure_time'];
$arrival_time=$_GET['arrival_time'];
$weight=$_GET['weight'];
$flight_number=$_GET['flight_number'];
$d_first=$_GET['d_first'];
$arr_transit=$_GET['arr_transit'];
$airport1=$_GET['airport1'];
$a_abbre1=$_GET['a_abbre1'];
$terms1=$_GET['terms1'];
$airport2=$_GET['airport2'];
$a_abbre2=$_GET['a_abbre2'];
$terms2=$_GET['terms2'];
$airline1=$_GET['airline1'];
$time_depart=$_GET['time_depart'];
$time_arrival=$_GET['time_arrival'];
$checkin=$_GET['checkin'];
$d_travel=$_GET['d_travel'];
$aircraft1=$_GET['aircraft1'];
$meal1=$_GET['meal1'];
$distance1=$_GET['distance1'];
$carbin=$_GET['carbin'];
$flight_numbs=$_GET['flight_numbs'];
$d_transit=$_GET['d_transit'];
$f_arrival=$_GET['f_arrival'];
$terminal3=$_GET['terminal3'];
$a_abbre3=$_GET['a_abbre3'];
$terms3=$_GET['terms3'];
$terminal4=$_GET['terminal4'];
$a_abbre4=$_GET['a_abbre4'];
$terms4=$_GET['terms4'];
$airline2=$_GET['airline2'];
$time_transit=$_GET['time_transit'];
$final_arrival=$_GET['final_arrival'];
$checkin1=$_GET['checkin1'];
$d_travel1=$_GET['d_travel1'];
$aircraft2=$_GET['aircraft2'];
$meal2=$_GET['meal2'];
$distance2=$_GET['distance2'];
$type=$_GET['type'];
$current=$_GET['current'];
$initial=$_GET['initial'];
$final=$_GET['final'];
$ustar=$_GET['ustar'];
$pasti=$_GET['pasti'];
$status=$_GET['status'];
$change_over_airport=$_GET['change_over_airport'];
$change_over_abbre=$_GET['change_over_abbre'];
$change_over_time=$_GET['change_over_time'];
$airfare=$_GET['airfare'];
$boarding=$_GET['boarding'];

$sql="update datas set name = '$name',email='$email',flier='$flier',number='$number',booking='$booking',
issue_by='$issue_by',issue_date='$issue_date',issue_time='$issue_time',departure_time='$departure_time',
arrival_time='$arrival_time',weight='$weight',
flight_number='$flight_number',d_first='$d_first',arr_transit='$arr_transit',airport1='$airport1',a_abbre1='$a_abbre1',
terms1='$terms1',airport2='$airport2',a_abbre2='$a_abbre2',terms2='$terms2',airline1='$airline1',time_depart='$time_depart',
time_arrival='$time_arrival',checkin='$checkin',d_travel='$d_travel',aircraft1='$aircraft1',meal1='$meal1',
distance1='$distance1',carbin='$carbin',flight_numbs='$flight_numbs',d_transit='$d_transit',f_arrival='$f_arrival',terminal3='$terminal3',
a_abbre3='$a_abbre3',terms3='$terms3',terminal4='$terminal4',a_abbre4='$a_abbre4',terms4='$terms4',airline2='$airline2',
time_transit='$time_transit',final_arrival='$final_arrival',checkin1='$checkin1',d_travel1='$d_travel1',
aircraft2='$aircraft2',meal2='$meal2',distance2='$distance2',type='$type',current='$current',initial='$initial',
final='$final',status='$status',change_over_airport='$change_over_airport',change_over_abbre='$change_over_abbre',change_over_time='$change_over_time',airfare='$airfare',boarding='$boarding',ustar='$ustar',pasti='$pasti' WHERE ID=$ID";

if($conn->query($sql))
{
	header('Location:access-flight-details.php');
	
}
echo "Your Details Has Been Updated. Thank You.";
}

?>
        </div>
    </div>



    <div style="height:50px"></div>



    <div class="section">
        <div id="Sign-In" align="center">


            <?php
if(isset($_GET['update']))
{
	$ID=$_GET['update'];
$sql="select * from datas WHERE ID=$ID";
$row=$conn->query($sql);
if($row->num_rows>0)
{
	while($data=$row->fetch_assoc())
	{
		?>



            <div style='float:center;width:100%;'>
                <div class="login-page">
                    <p style=""> Hello Admin<br> Update Cleints Account Details Below</p>
                    <div class="form">
                        <form action="updater.php">
                            
                            <input type="hidden" name="ID" value="<?php  echo $data['ID'];?>">
                            Passenger Name
                            <input type="tex" name="name" value="<?php  echo $data['name'];?>" Required>
                            Passenger Email
                            <input type="text" name="email" value="<?php  echo $data['email'];?>" Required>
                            Authorized Flier
                            <input type="text" name="flier" value="<?php  echo $data['flier'];?>">
                            E-Ticket Number
                            <input type="text" name="number" value="<?php  echo $data['number'];?>">
                            Booking Reference
                            <input type="text" name="booking" value="<?php  echo $data['booking'];?>">
                            Issued By
                            <input type="text" name="issue_by" value="<?php  echo $data['issue_by'];?>">
                            Issued Date
                            <input type="text" name="issue_date" value="<?php  echo $data['issue_date'];?>">
                            Time Of Booking
                            <input type="text" name="issue_time" value="<?php  echo $data['issue_time'];?>">
                            Departure Date
                            <input type="text" name="departure_time" value="<?php  echo $data['departure_time'];?>">
                            Arrival Date
                            <input type="text" name="arrival_time" value="<?php  echo $data['arrival_time'];?>">
                            Weight
                            <input type="text" name="weight" value="<?php  echo $data['weight'];?>">
                            Flight Number
                            <input type="text" name="flight_number" value="<?php  echo $data['flight_number'];?>">
                            Departure
                            <input type="text" name="d_first" value="<?php  echo $data['d_first'];?>">
                            Arrival (Transit)
                            <input type="text" name="arr_transit" value="<?php  echo $data['arr_transit'];?>">
                            Airport
                            <input type="text" name="airport1" value="<?php  echo $data['airport1'];?>">
                            Airport Abbreviation
                            <input type="text" name="a_abbre1" value="<?php  echo $data['a_abbre1'];?>">
                            Terminal
                            <input type="text" name="terms1" value="<?php  echo $data['terms1'];?>">
                            Transit Airport
                            <input type="text" name="airport2" value="<?php  echo $data['airport2'];?>">
                            Airport Abbreviation
                            <input type="text" name="a_abbre2" value="<?php  echo $data['a_abbre2'];?>">
                            Terminal
                            <input type="text" name="terms2" value="<?php  echo $data['terms2'];?>">
                            Name Of Airline
                            <input type="text" name="airline1" value="<?php  echo $data['airline1'];?>">
                            Time Of Departure
                            <input type="text" name="time_depart" value="<?php  echo $data['time_depart'];?>">
                            Time Of Arrival (Transit)
                            <input type="text" name="time_arrival" value="<?php  echo $data['time_arrival'];?>">
                            Check In
                            <input type="text" name="checkin" value="<?php  echo $data['checkin'];?>">
                            Duration Of Travel
                            <input type="text" name="d_travel" value="<?php  echo $data['d_travel'];?>">
                            Aircraft
                            <input type="text" name="aircraft1" value="<?php  echo $data['aircraft1'];?>">
                            Meal
                            <input type="text" name="meal1" value="<?php  echo $data['meal1'];?>">
                            Distance
                            <input type="text" name="distance1" value="<?php  echo $data['distance1'];?>">
                            Carbin
                            <input type="text" name="carbin" value="<?php  echo $data['carbin'];?>">
                            Flight Number
                            <input type="text" name="flight_numbs" value="<?php  echo $data['flight_numbs'];?>">
                            Departure (Transit)
                            <input type="text" name="d_transit" value="<?php  echo $data['d_transit'];?>">
                            Final Arrival
                            <input type="text" name="f_arrival" value="<?php  echo $data['f_arrival'];?>">
                            Airport
                            <input type="text" name="terminal3" value="<?php  echo $data['terminal3'];?>">
                            Airport Abbreviation
                            <input type="text" name="a_abbre3" value="<?php  echo $data['a_abbre3'];?>">
                            Terminal
                            <input type="text" name="terms3" value="<?php  echo $data['terms3'];?>">
                            Transit Airport
                            <input type="text" name="terminal4" value="<?php  echo $data['terminal4'];?>">
                            Airport Abbreviation
                            <input type="text" name="a_abbre4" value="<?php  echo $data['a_abbre4'];?>">
                            Terminal
                            <input type="text" name="terms4" value="<?php  echo $data['terms4'];?>">
                            Name Of Airline
                            <input type="text" name="airline2" value="<?php  echo $data['airline2'];?>">
                            Time Of Departure On Transit
                            <input type="text" name="time_transit" value="<?php  echo $data['time_transit'];?>">
                            Time Of Final Arrival
                            <input type="text" name="final_arrival" value="<?php  echo $data['final_arrival'];?>">
                            Check In
                            <input type="text" name="checkin1" value="<?php  echo $data['checkin1'];?>">
                            Duration Of Travel
                            <input type="text" name="d_travel1" value="<?php  echo $data['d_travel1'];?>">
                            Aircraft
                            <input type="text" name="aircraft2" value="<?php  echo $data['aircraft2'];?>">
                            Meal
                            <input type="text" name="meal2" value="<?php  echo $data['meal2'];?>">
                            Distance
                            <input type="text" name="distance2" value="<?php  echo $data['distance2'];?>">
                            Other Duty Descriptions
                            <input type="text" name="type" value="<?php  echo $data['type'];?>">
                            Currency
                            <input type="text" name="current" value="<?php  echo $data['current'];?>">
                            Other Duty Payment
                            <input type="number" name="initial" value="<?php  echo $data['initial'];?>">
                            Total Balance
                            <input type="number" name="final" value="<?php  echo $data['final'];?>">
                            Username
                            <input type="text" name="ustar" value="<?php  echo $data['ustar'];?>">
                            Password
                            <input type="text" name="pasti" value="<?php  echo $data['pasti'];?>">
                            Booking Status
                            <input type="text" name="status" value="<?php  echo $data['status'];?>">
                            Change Over Airport
                            <input type="text" name="change_over_airport"
                                value="<?php  echo $data['change_over_airport'];?>">
                            Change Over Aiport Abbreviation
                            <input type="text" name="change_over_abbre"
                                value="<?php  echo $data['change_over_abbre'];?>">
                            Change Over Time
                            <input type="text" name="change_over_time" value="<?php  echo $data['change_over_time'];?>">
                            Amount For Ticket Purchase
                            <input type="number" name="airfare" value="<?php  echo $data['airfare'];?>">
                            Boarding Time
                            <input type="text" name="boarding" value="<?php  echo $data['boarding'];?>">
                           
                            <button type="submit" name="updatesubmit">Update Now</button>
                        </form>
                    </div>
                </div>

                <?php
		
		
	}
}
	
}

?>

            </div><br><br>

            <div style="height:50px"></div>
            <div id="Sign-In" align="center">
                <a href="dashboard1.php"><input type="submit" value="Log Out" name="updatesubmit">
            </div>
        </div>
    </div>


    </body>
    <script>
document.addEventListener('contextmenu', event => event.preventDefault());

$(document).keydown(function(event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});
</script>
</html>