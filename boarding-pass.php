<html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="Image/centerpoint.png" rel="icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Codystar&display=swap" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

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

<title> <?=$data ['flier']?> Boarding-Pass Details</title>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table
                    style="width:1000px;background-color:#318ce7;border-top-left-radius:30px;border-top-right-radius:30px;">
                    <tr>
                        <td>
                            <p style="text-indent:2em;font-size:30px;color:#e0ebeb;padding-top:20px;"> BOARDING PASS<br>
                                &nbsp &nbsp &nbsp &nbsp <span style="font-size:20px;">PASSENGER TICKET AND
                                    BAGGAGE PASS</p>
                        </td>
                        <td>
                            <p style="text-indent:3em;font-size:25px;color:#e0ebeb;padding-top:70px;">FLIER:
                                <?=$data ['flier']?>
                            </p>
                        </td>
                        <td>
                            <p style="text-indent:2em;font-size:30px;color:#e0ebeb;padding-top:20px;"> BOARDING PASS<br>
                                &nbsp &nbsp &nbsp &nbsp <span style="font-size:20px;">FIRST CLASS</p>
                        </td>

                        <table style="background-color:#f0f5f5;width:1000px;">
                            <tr>
                                <td>
                                    <table style="margin-top:10px">
                                        <tr>
                                            <td>
                                                <img src="Image/barcode.png" style="width:100;height:200px;">
                                            </td>
                                            <td style="width:30px">

                                            </td>
                                            <td style="background-color:#f0f5f5;border:1px solid #f0f5f5;width:150px;">
                                                <p style="padding-top:15px;font-size:15px;">Passenger Name.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;font-size:15px;"><strong>
                                                            <?=$data ['name']?></strong></span>
                                                </p>

                                                <p style="padding-top:15px;font-size:15px;">From.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;font-size:15px;"><strong>
                                                            <?=$data ['airport1']?></strong></span>
                                                </p>

                                                <p style="padding-top:15px;font-size:15px;">Departure Date.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;font-size:15px;"><strong>
                                                            <?=$data ['d_first']?></strong></span>
                                                </p>

                                                <p style="padding-top:15px;font-size:15px;">Departure Time.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;font-size:15px;"><strong><?=$data ['time_depart']?></strong></span>
                                                </p>
                                            </td>

                                            <td style="width:100px">

                                            </td>

                                            <td style="background-color:#f0f5f5;border:1px solid #f0f5f5;width:120px;">

                                                <p style="padding-top:15px;font-size:15px;">Seat Number.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;font-size:15px;"><strong>30A</strong></span>
                                                </p>

                                                <p style="padding-top:15px;font-size:15px;">To.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;font-size:15px;"><strong><?=$data ['airport2']?></strong></span>
                                                </p>

                                                <p style="padding-top:15px;font-size:15px;">Arrival Date.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;font-size:15px;"><strong><?=$data ['f_arrival']?></strong></span>
                                                </p>
                                                <p style="padding-top:15px;font-size:15px;">Arrival Time.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;font-size:15px;"><strong>
                                                            <?=$data ['final_arrival']?></strong></span>
                                                </p>
                                            </td>

                                            <td style="width:100px">

                                            </td>
                                            <td style="background-color:#f0f5f5;border:1px solid #f0f5f5;width:120px;">
                                                <p style="padding-top:15px">Gate Number.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;"><strong>07</strong></span>
                                                </p>

                                                <p style="color:#000000">Seq Number.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;color:#000000;"><strong>0028</strong></span>
                                                </p>

                                                <p style="color:#000000">Boarding Time.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;color:#000000;"><strong><?=$data ['boarding']?></strong></span>
                                                </p>
                                                <p style="color:#000000">Ticket Number.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;color:#000000;"><strong><?=$data ['number']?></strong></span>
                                                </p>
                                            </td>

                                            <td style="width:100px">

                                            </td>

                                            <td style="background-color:#f0f5f5;border:1px solid #f0f5f5;width:120px;">
                                                <p style="padding-top:15px">Check In.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;"><strong><?=$data ['weight']?></strong></span>
                                                </p>

                                                <p style="color:#000000">Flight Number.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;color:#000000;"><strong><?=$data ['flight_number']?></strong></span>
                                                </p>

                                                <p style="color:#000000">Ticket Status.<br>
                                                    <span
                                                        style="font-family: 'Codystar', cursive;color:#000000;"><strong><?=$data ['status']?></strong></span>
                                                </p>
                                                <p style="color:#f0f5f5"><img src="Image/barcode.png"
                                                        style="width:170px;height:40px;">
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </tr>
                </table>
                <table
                    style="width:1000px;background-color:#318ce7;border-bottom-left-radius:30px;border-bottom-right-radius:30px;height:40px;">
                    <tr>
                        <td style="height:40px">
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

</html>