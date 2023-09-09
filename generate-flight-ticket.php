<html>


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




</head>

<body>


    <?php
$conn=new mysqli("localhost","root","","ticketing");
$SQL = "SELECT * FROM details";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{

        ?>

<title> <?=$data ['flier']?> E-Ticket</title>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tbody>
                        <tr style="width:100%">
                            <th style="border:1px dotted #5d8aa8;width:950px;">
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
                                                style="font-size:14px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:2em;">
                                                <img src="upload/<?=$data ['image']?>" width="30%"> <span
                                                    style="font-size:35px"><?=$data ['flier']?></span>
                                            </p>
                                        </a>
                                    </li>
                            </th>
                            <th style="border:1px dotted #5d8aa8;width:300px;">
                                <p style="text-align:center">
                                    <span style="font-size:20px;color:#000000;font-family: 'Encode Sans', sans-serif;">
                                        RESERVATION: <?=$data ['status']?></span><br><br><img
                                        src="Image/chart-checkpoint.png" style="width:30%">
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
                                    <div style="background-color:#a9a9a9;width:180px;height:20px;margin: auto;">
                                        <p
                                            style="font-family: 'Encode Sans', sans-serif;text-align:left;color:#000000;text-indent:1em;">
                                            <?=$data ['flier']?></p>
                                    </div>
                                    </p>
                                    <p style="text-align:left;text-indent:4em;">
                                    <div style="background-color:#a9a9a9;width:180px;height:20px;margin: auto;">
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
                                        <p style="text-align:left;text-indent:3em;padding-top:10px;"> <span
                                                style="font-size:15px;font-family: 'Encode Sans', sans-serif;color:#000000;">
                                                PREPARED FOR:</span><br>
                                            &nbsp &nbsp &nbsp &nbsp &nbsp<span
                                                style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;">
                                                <?=$data ['name']?></span></p>

                                        &nbsp &nbsp &nbsp &nbsp <span
                                            style="font-size:13px;font-family: 'Titillium Web', sans-serif;color:#000000;text-align:left;">
                                            If you need to change your trip, please contact our customer service.</span>
                                        <hr style="border-top:1px dotted black;width:800px;margin:2px;;">
                                    </div>
                                </th>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th style="width:600px;border:1px dotted #5d8aa8;">
                                    <div id="Sign In" align="left">
                                        <p style="text-align:left;text-indent:3em;padding-top:20px;"> <img
                                                src="Image/plane.png" style="width:30px;height:30px;">
                                            &nbsp<span
                                                style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;">Departure
                                                Date: <?=$data ['d_first']?></span></p>
                                </th>
                                <th style="width:600px;border:1px dotted #5d8aa8;">
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
                        style="background-color:#f0f5f5;width:250px;height:200px;border-bottom-left-radius: 25px;height:10px;border-left:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
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
                    <td
                        style="width:950px;height:200px;border:1px dotted #f0f5f5;border-left:1px dotted #5d8aa8;border-right:1px solid #5d8aa8;border-bottom:1px dotted #f0f5f5;">
                        <table>
                            <tr>
                                <td
                                    style="width:500px;height:50px;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;">
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
                                    style="width:243px;height:50px;border-right:1px solid #ffffff;border-top:1px solid #5d8aa8;border-left:1px dotted #5d8aa8;">
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
                                        <td
                                            style="width:250px;height:200px;border:1px dotted #f0f5f5;border-right:1px solid #5d8aa8;border-bottom:1px dotted #5d8aa8;">
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
                                        <td
                                            style="width:250px;height:200px;border-bottom:1px dotted border-bottom:1px dotted #5d8aa8; border-bottom:1px dotted #5d8aa8;border-top:1px dotted border-bottom:1px dotted #5d8aa8;;border-right:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8; ">
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
                                        <td style="width:243px;height:200px;border-top:1px dotted #5d8aa8;">
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
                        style="width:400px;height:10px;background-color:#f0f5f5;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            Passenger Name:</p>
                    </td>
                    <td
                        style="width:400px;height:10px;background-color:#f0f5f5;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            Seats:</p>
                    </td>
                    <td
                        style="width:400px;height:10px;background-color:#f0f5f5;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            eTicket (Receipts):</p>
                    </td>

                <tr>
                <tr>
                    <td
                        style="width:400px;height:10px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                        <p
                            style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;font-weight:bold;">
                            <?=$data ['name']?></p>
                    </td>
                    <td
                        style="width:400px;height:10px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            Check-In-Required</p>
                    </td>
                    <td
                        style="width:400px;height:10px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                        <p
                            style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                            <?=$data ['number']?></p>
                    </td>
                <tr>
            </table>
            <table>
                <tr>
                    <td
                        style="width:1200px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
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
                    <th
                        style="width:600px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                        <div id="Sign In" align="left">
                            <p style="text-align:left;text-indent:3em;padding-top:20px;"> <img src="Image/plane.png"
                                    style="width:30px;height:30px;">
                                &nbsp<span
                                    style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;">Departure
                                    Date: <?=$data ['d_transit']?></span></p>
                    </th>
                    <th style="width:600px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;>
                        <div id=" Sign In" align="left">
                        <p style="text-align:left;text-indent:3em;padding-top:20px;"> <img src="Image/plane.png"
                                style="width:30px;height:30px;">
                            &nbsp<span
                                style="font-size:18px;font-family: 'Encode Sans', sans-serif;color:#000000;">Arrival

                                Date: <?=$data ['f_arrival']?></span></p>
                    </th>
        </div>
        <table>
            <tr>
                <td
                    style="background-color:#f0f5f5;width:250px;height:200px;border-bottom-left-radius: 25px;height:10px;border-left:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
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
                <td
                    style="width:950px;height:200px;border-left:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;border-bottom:1px dotted #f0f5f5;">
                    <table>
                        <tr>
                            <td
                                style="width:500px;height:50px;border-right:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;">
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
                            <td
                                style="width:243px;height:50px;border-right:1px solid #ffffff;border-top:1px dotted #5d8aa8;border-left:1px dotted #5d8aa8;">
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
                                    <td
                                        style="width:250px;height:200px;border:1px dotted #f0f5f5;border-right:1px dotted #5d8aa8;">
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
                                    <td
                                        style="width:250px;height:200px;border-right:1px dotted #5d8aa8;">
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
                    style="width:400px;height:10px;background-color:#f0f5f5;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        Passenger Name:</p>
                </td>
                <td
                    style="width:400px;height:10px;background-color:#f0f5f5;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        Seats:</p>
                </td>
                <td
                    style="width:400px;height:10px;background-color:#f0f5f5;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        eTicket (Receipts):</p>
                </td>
            <tr>
            <tr>
                <td
                    style="width:400px;height:10px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                    <p
                        style="font-size:15px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;font-weight:bold;">
                        <?=$data ['name']?></p>
                </td>
                <td
                    style="width:400px;height:10px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        Check-In-Required</p>
                </td>
                <td
                    style="width:400px;height:10px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                    <p
                        style="font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-align:left;text-indent:4em;padding-top:8px;">
                        <?=$data ['number']?></p>
                </td>
            <tr>
        </table>
        <table>
            <tr>
                <td
                    style="width:321px;height:10px;background-color:#ffffff;border-left:1px dotted #5d8aa8;border-bottom:1px dotted #5d8aa8;border-top:1px dotted #5d8aa8;border-right:1px dotted #5d8aa8;">
                    <p
                        style="padding-top:20px;font-size:13px;color:#000000;font-family: 'Encode Sans', sans-serif;text-indent:4em;">
                        Ticket Payment: <b><?=$data ['current']?> <?=$data ['airfare']?></b></p>
                </td>
            </tr>
            <table>

                <div style="height:50px"></div>

                <table>
                    <tr>
                        <td style="width:1200px;height:10px;background-color:#ffffff;border:2px dotted #5d8aa8;border-left:2px dotted #5d8aa8">
                            <p
                                style="font-family: 'Encode Sans', sans-serif;text-align:center;font-size:17px;font-weight:bold;padding-top:10px;">
                                THIS ITINERARY IS YOUR OFFICIAL TRAVEL DOCUMENT</p>
                            <p
                                style="text-indent:1.5em;font-family: 'Encode Sans', sans-serif;font-weight:bold;padding-top:20px;font-size;15px;">
                                For Passengers Traveling From <?=$data ['airport1']?> To <?=$data ['terminal4']?> and
                                return:</p>
                            <p
                                style="text-indent:6em;font-family: 'Encode Sans', sans-serif;font-weight:bold;font-size;15px;">
                            <ul>
                                <li>
                                    Check-in-counters close 45minutes prior to the schedule departure time.
                                </li>
                                <li>
                                    Free baggage allowance of 30kg for Economy Class & 40kg for Business Class
                                    Passengers.
                                </li>
                                <li>
                                    Maximum weight permitted per individual piece of baggage is 32kg with total
                                    dimension of 160cm (W+D+L).
                                </li>
                                <li>
                                    Hand baggage allowance per passenger must not exceed 7kg with dimensions within 55 x
                                    40 x 20cms.
                                </li>
                                <li>
                                    Passenger bookes under Business Class will be entitled for free modification (fare
                                    differece will apply) upto 8hrs prior to departure.
                                </li>
                                <li>
                                    Economy and Business Class passengers are entitled for refund on cancellation,
                                    subjectto airline Terms and Conditions.
                                </li>
                                <li>
                                    Complimentary meals will be served on board Economy and Business Class passengers.
                                </li>
                            </ul>
                            </p>

                            <p
                                style="text-indent:1.5em;font-family: 'Encode Sans', sans-serif;font-weight:bold;padding-top:20px;font-size;15px;">
                                For Passengers Traveling From <?=$data ['airport1']?> To <?=$data ['terminal4']?> and
                                return:</p>

                            <p
                                style="text-indent:1.5em;font-family: 'Encode Sans', sans-serif;font-weight:bold;padding-top:10px;font-size;15px;">
                                Check In:</p>
                            <p
                                style="text-indent:6em;font-family: 'Encode Sans', sans-serif;font-weight:bold;font-size;15px;">
                            <ul>
                                <li>
                                    Check-in counters closes 1 hour 30minutes prior to the schedule time. Passengers
                                    failing to check-in on time will not be accepted for travel and will forfeit flight
                                    and their ticket.
                                </li>
                                <li>
                                    It is the passenger's responsibility to ensure that they have the neccessary valid
                                    documents, including visas, to meet the immigration requirements of their
                                    destination.
                                </li>
                            </ul>
                            </p>

                            <p
                                style="text-indent:1.5em;font-family: 'Encode Sans', sans-serif;font-weight:bold;padding-top:20px;font-size;15px;">
                                For Passengers Traveling From <?=$data ['airport1']?> To <?=$data ['terminal4']?> and
                                return:</p>

                            <p
                                style="text-indent:1.5em;font-family: 'Encode Sans', sans-serif;font-weight:bold;padding-top:10px;font-size;15px;">
                                Uaccompanied Minors:</p>
                            <p
                                style="text-indent:6em;font-family: 'Encode Sans', sans-serif;font-weight:bold;font-size;15px;">
                            <ul>
                                <li>
                                    We do not accept children traveling unaccompanied under their 12th birthday.
                                    Passengers accompanyong children should be above 16 years old.
                                </li>
                                <li>
                                    Infant under the age of 2 weeks are not allowed to travel.
                                </li>
                            </ul>
                            </p>

                            <p
                                style="text-indent:1.5em;font-family: 'Encode Sans', sans-serif;font-weight:bold;padding-top:20px;font-size;15px;">
                                Baggage Allownace Per Passenger (Excluding Infants:):</p>
                            <p
                                style="text-indent:6em;font-family: 'Encode Sans', sans-serif;font-weight:bold;font-size;15px;">
                            <ul>
                                <li>
                                    Checked baggage: every passenger can pre-book a baggage allowance while doing
                                    his/her reservation through our website, call center, sales shops or partner travel
                                    agents at the following discounted rates:<br><br>
                                    <ul>
                                        <li>
                                            20kg: <?=$data ['current']?> 10 to 20 /passenger/one way
                                        </li>
                                        <li>
                                            30kg: <?=$data ['current']?> 20 to 50 /passenger/one way
                                        </li>
                                        <li>
                                            40kg: <?=$data ['current']?> 150 /passenger/one way
                                        </li>
                                    </ul>
                                </li><br>
                                <li>
                                    At the airport, if a passenger didn't prebook his/her baggage (selected "No
                                    baggage") first 20kg will be charged a <?=$data ['current']?> 50 / passenger / one
                                    way, any weight above
                                    20kg is considered excess baggage. Excess baggage rates will continue to apply on
                                    any weight above the pre-booked allowance.
                                </li>
                                <li>
                                    Maximum weight permitted per individual peice of baggage is 30kg with total
                                    dimensions of 160cms (W+D+L).
                                </li>
                                <li>
                                    Hand baggage allowance per passenger must not exceed 7kg with dimensions within 55 x
                                    40 x 20cms.
                                </li>
                            </ul>
                            </p>

                            <p
                                style="text-indent:2em;font-family: 'Encode Sans', sans-serif;font-weight:bold;font-size;15px;font-weight:bold;">
                                Important Notice:<br> &nbsp &nbsp &nbsp &nbsp Liquid Container More Than 100ml In Hand
                                Baggege Is Not Allowed.
                        </td>
                    </tr>
                </table>
    </div>
    </div>
    </div>
    <?php
	
}
}
?>

    <script>
    (function() {
        window.print();
    })();
    </script>

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