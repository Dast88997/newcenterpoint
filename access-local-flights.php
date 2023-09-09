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
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Jaldi&display=swap"
        rel="stylesheet">
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
    background: #ffffed;
    border: 2px solid green;
}

th {
    text-align: center;
    color: #000000;
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

h4 {
    font-family: 'Jaldi', sans-serif;
    text-align: center;
    padding-top: 80px;
}
</style>

</head>

<?php
$conn=new mysqli("localhost","root","","ticketing");
$SQL = "select * from huds ";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{

        ?>

<body>
<title>Centrepoint Travels - Admin Panel</title>
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
                                    style="margin-top:10px;display:block;float:left;margin-left:10px;font-family: 'Handlee', cursive;">Welcome
                                    To Center Point Travels Admin Panel. This Panel Is Only Meant For Admin Purpose
                                    Only.
                                    Online
                                    Technology</span>
                            </marquee>
                        </h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;"> <img
                                        src="Image/purepng.com-user-iconsymbolsiconsapple-iosiosios-8-iconsios-8-721522596134a4bio.png"
                                        width="100" height="100">Welcome:&nbsp <?=$data ['name']?></a>`
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;padding-top:42px;">Log
                                    Out</a>
                            </li>
                        </ul>
                </nav>
            </div>
        </div>
    </div>

    <?php
	
}
}
?>


    <section>

        <?php
$conn=new mysqli("localhost","root","","ticketing");
$SQL="select * from local";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{
		
		?>
        <div class="col-xs-12" style="padding-top:100px;">
            <table summary="This table shows how to create responsive tables using Datatables' extended functionality"
                class="table table-bordered table-hover dt-responsive">

                <tr>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Passenger
                            Image</span></th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Passenger
                            Name</span></th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Passenger
                            Email</span></th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Flier</span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">E-Ticket
                            Number</span> </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Booking
                            Reference</span> </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Issued
                            By</span> </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Issued
                            Date</span> </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">
                            Time Of Booking</span></th>

                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Departure
                            Date</span></th>
                </tr>

                <tr>
                    <td><span style="font-size:12px"> <img src="upload2/<?=$data ['image']?>" width="50"
                                height="50"></span></td>
                    <td><span style="font-size:12px"> <?=$data ['name']?></span></td>
                    <td><span style="font-size:12px"> <?=$data ['email']?></span></td>
                    <td><span style="font-size:12px"> <?=$data ['flier']?></span></td>
                    <td><span style="font-size:12px"> <?=$data ['number']?></span></td>
                    <td><span style="font-size:12px"> <?=$data ['booking']?></span></td>
                    <td><span style="font-size:12px"> <?=$data ['issue_by']?></span></td>
                    <td><span style="font-size:12px"> <?=$data ['issue_date']?></span></td>
                    <td><span style="font-size:12px"> <?=$data ['issue_time']?></span></td>
                    <td><span style="font-size:12px"> <?=$data ['departure_time']?></span></td>
                </tr>
            </table>
            <br>
            <table summary="This table shows how to create responsive tables using Datatables' extended functionality"
                class="table table-bordered table-hover dt-responsive">
                <tr>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Arrival
                            Date</span></th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Weight</span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Flight
                            Number</span></th>
                    <th style="width:100px"><span
                            style="font-size:12px;font-family: 'Jaldi', sans-serif;">Departure</span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Arrival
                            </span></th>
                    <th style="width:100px"><span
                            style="font-size:12px;font-family: 'Jaldi', sans-serif;">Airport</span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Airport
                            Abbreviation</span></th>
                    <th style="width:100px"><span
                            style="font-size:12px;font-family: 'Jaldi', sans-serif;">Terminal</span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Arrival 
                            Airport</span></th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Airport
                            Abbreviation</span></th>
                </tr>
                <tr>
                    <td><span style="font-size:12px">
                            <?=$data ['arrival_time']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['weight']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['flight_number']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['d_first']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['arr_transit']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['airport1']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['a_abbre1']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['terms1']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['airport2']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['a_abbre2']?>
                        </span></td>
                </tr>
            </table>

            <br>
            <table summary="This table shows how to create responsive tables using Datatables' extended functionality"
                class="table table-bordered table-hover dt-responsive">
                <tr>

                    <th style="width:100px"><span
                            style="font-size:12px;font-family: 'Jaldi', sans-serif;">Terminal</span></th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Name Of
                            Airline</span></th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Time Of
                            Departure</span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Time Of
                            Arrival </span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Check
                            In</span></th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Duration
                            Of Travel</span>
                    </th>
                    <th style="width:100px"><span
                            style="font-size:12px;font-family: 'Jaldi', sans-serif;">Aircraft</span></th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Meal</span>
                    </th>
                    <th style="width:100px"><span
                            style="font-size:12px;font-family: 'Jaldi', sans-serif;">Distance</span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Carbin</span>
                    </th>
                </tr>
                <tr>
                    <td><span style="font-size:12px">
                            <?=$data ['terms2']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['airline1']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['time_depart']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['time_arrival']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['checkin']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['d_travel']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['aircraft1']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['meal1']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['distance1']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['carbin']?>
                        </span></td>
                </tr>
            </table>

            <br>
            <table summary="This table shows how to create responsive tables using Datatables' extended functionality"
                class="table table-bordered table-hover dt-responsive">
                <tr>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Type Of
                            Flight Taxes</span></th>
                    <th style="width:100px"><span
                            style="font-size:12px;font-family: 'Jaldi', sans-serif;">Currency</span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Amount
                            For Fees / Taxes</span></th>
                </tr>
                <tr>             
                    <td><span style="font-size:12px">
                            <?=$data ['type']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['current']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['initial']?>
                        </span></td>
                </tr>
            </table>      

            <br>
            <table summary="This table shows how to create responsive tables using Datatables' extended functionality"
                class="table table-bordered table-hover dt-responsive">
                <tr>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Total
                            Fee</span></th>
                    <th style="width:100px"><span
                            style="font-size:12px;font-family: 'Jaldi', sans-serif;">Username</span>
                    </th>
                    <th style="width:100px"><span
                            style="font-size:12px;font-family: 'Jaldi', sans-serif;">Password</span>
                    </th>
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">status</span>
                    </th>
                  
                    <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Amount For
                            Flight Ticket</span></th>

                            <th style="width:100px"><span style="font-size:12px;font-family: 'Jaldi', sans-serif;">Boarding Time</span></th>
                  
                </tr>
                <tr>
                    <td><span style="font-size:12px">
                            <?=$data ['final']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['usta']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['pastis']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['status']?>
                        </span></td>
                    <td><span style="font-size:12px">
                            <?=$data ['airfare']?>
                        </span></td>
                        <td><span style="font-size:12px">
                            <?=$data ['boarding']?>
                        </span></td>
                   
                </tr>
            </table>

            <br>
            <table summary="This table shows how to create responsive tables using Datatables' extended functionality"
                class="table table-bordered table-hover dt-responsive" style="width:400px">
                <tr>
                    <th style="width:100px">
                        <p style="font-size:12px;font-family: 'Jaldi', sans-serif;text-ialign:center;">Delete</p>
                    </th>
                    <th style="width:100px">
                        <p style="font-size:12px;font-family: 'Jaldi', sans-serif;text-align:center;">Update Ticket</p>
                    </th>

                </tr>
                <tr>
                    <td>
                        <p style="text-align:center;"><a
                                href="access-local-flights.php?delete=<?php echo $data['ID'];?>"><button>DELETE</button></a>
                        </p>
                    </td>
                    <td>
                        <p style="text-align:center;"><a
                                href="updated.php?update=<?php echo $data['ID'];?>&1=<?php echo $data['name'];?>&2=<?php echo $data['email'];?>&3=<?php echo $data['flier'];?>
                                        &4=<?php echo $data['number'];?>&5=<?php echo $data['booking'];?>&6=<?php echo $data['issue_by'];?>&7=<?php echo $data['issue_date'];?>
                                        &8=<?php echo $data['issue_time'];?>&9=<?php echo $data['departure_time'];?>&10=<?php echo $data['arrival_time'];?>&11=<?php echo $data['weight'];?>
                                        &12=<?php echo $data['flight_number'];?>&13=<?php echo $data['d_first'];?>&14=<?php echo $data['arr_transit'];?>&15=<?php echo $data['airport1'];?>
                                        &16=<?php echo $data['a_abbre1'];?>&17=<?php echo $data['terms1'];?>&18=<?php echo $data['airport2'];?>&19=<?php echo $data['a_abbre2'];?>
                                        &20=<?php echo $data['terms2'];?>&21=<?php echo $data['airline1'];?>&22=<?php echo $data['time_depart'];?>&23=<?php echo $data['time_arrival'];?>
                                        &24=<?php echo $data['checkin'];?>&25=<?php echo $data['d_travel'];?>&26=<?php echo $data['aircraft1'];?>&27=<?php echo $data['meal1'];?>
                                        &28=<?php echo $data['distance1'];?>&29=<?php echo $data['carbin'];?>&47=<?php echo $data['type'];?>
                                        &48=<?php echo $data['current'];?>&49=<?php echo $data['initial'];?>&50=<?php echo $data['final'];?>&51=<?php echo $data['usta'];?>
                                        &52=<?php echo $data['pastis'];?>&53=<?php echo $data['status'];?>&57<?php echo $data['airfare'];?>&58<?php echo $data['boarding'];?>"><button>UPDATE</button></a>
                        </p>
                    </td>
                </tr>
            </table>
            <?php
	
}
}

else {
    echo "<h1>Opps!!. There Are No Flight Information For Now. <br> Do Contact Our Customer Service For More Details.</h1>";
  }

if(isset($_GET['delete']))
{
$id=$_GET['delete'];
$sql="delete from local where id=$id";
if($conn->query($sql))
{
echo "<h4> Deleted Successfully</h4>";

}

}




  ?>

	

 

            
            </table>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.getElementsByClassName('list-group-item')[1].style.backgroundColor = "#046469";
    document.getElementsByClassName('menu-list')[1].style.color = "#fff";
    </script>


</body>

