<html>
<title>Centrepoint - Travels</title>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="Image/centerpoint.png" rel="icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>


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
h3{
    padding-top:50px;
    font-family: 'Open Sans', sans-serif;
    font-weight:bold;
}
</style>

</head>

<body>
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
                                        width="100" height="100">Welcome:Admin</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;padding-top:42px;">Logout</a>
                            </li>
                        </ul>
                </nav>
            </div>
        </div>
    </div>






    <div class="container">
        <div class="row">
            <div class="col-md-3.5 border 2px solid black">
                <img src="Image/newtajmahal.jpg" style="width:300px;height:120px;padding-top:0;margin:0;">
            </div>

            <div class="col-md-3.5 border 2px solid black">
                <img src="Image/Jinshanling-Chinese-Wall-10.webp" style="width:400px;height:120px;padding-top:0;margin:0;">
            </div>
            <div class="col-md-3.5 border 2px solid black">
                <img src="Image/hague-2d65a2a46448.webp" style="width:400px;height:120px;padding-top:0;margin:0;">


            </div>
        </div><br>
        <div id="Sign-In" align="center">
            <?php
$conn=new mysqli("localhost","root","","ticketing");
$name=$_FILES['picture']['name'];
$email=$_POST['email'];
$flier=$_POST['flier'];
$number=$_POST['number'];
$booking=$_POST['booking'];
$issue_by=$_POST['issue_by'];
$issue_date=$_POST['issue_date'];
$issue_time=$_POST['issue_time'];
$departure_time=$_POST['departure_time'];
$arrival_time=$_POST['arrival_time'];
$weight=$_POST['weight'];
$flight_number=$_POST['flight_number'];
$d_first=$_POST['d_first'];
$arr_transit=$_POST['arr_transit'];
$airport1=$_POST['airport1'];
$a_abbre1=$_POST['a_abbre1'];
$terms1=$_POST['terms1'];
$airport2=$_POST['airport2'];
$a_abbre2=$_POST['a_abbre2'];
$terms2=$_POST['terms2'];
$airline1=$_POST['airline1'];
$time_depart=$_POST['time_depart'];
$time_arrival=$_POST['time_arrival'];
$checkin=$_POST['checkin'];
$d_travel=$_POST['d_travel'];
$aircraft1=$_POST['aircraft1'];
$meal1=$_POST['meal1'];
$distance1=$_POST['distance1'];
$carbin=$_POST['carbin'];
$type=$_POST['type'];
$current=$_POST['current'];
$initial=$_POST['initial'];
$final=$_POST['final'];
$usta=$_POST['usta'];
$pastis=$_POST['pastis'];
$name1=$_POST['name'];
$status=$_POST['status'];
$airfare=$_POST['airfare'];
$boarding=$_POST['boarding'];

$picsize=$_FILES['picture']['size'];

$found=0;
//echo $name."<br>";

//echo $picsize;


$ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));

if($picsize<=2000000)
{
$found=1	;
}else{
	$found=0;
	echo "picture is too large";
	exit;
}


if($ext=="jpg" || $ext=="png"||$ext=="jpeg" ||$ext=="pdf")
{
	$found=1;
}
else{
	$found=0;
	echo "file format not support";
	exit;
}

if($found==1)
{
$path_name='img'.date('dmYhmi').'.jpg';
	move_uploaded_file($_FILES['picture']['tmp_name'],'upload2/'.$path_name);

$command="insert into local(name,email,flier,number,booking,issue_by,issue_date,issue_time,departure_time,
arrival_time,weight,flight_number,d_first,arr_transit,airport1,a_abbre1,terms1,airport2,a_abbre2,terms2,airline1,time_depart,
time_arrival,checkin,d_travel,aircraft1,meal1,distance1,carbin,type,current,initial,final,usta,pastis,image,status,airfare,boarding)
 values('$name1','$email','$flier','$number','$booking','$issue_by','$issue_date','$issue_time','$departure_time',
 '$arrival_time','$weight','$flight_number','$d_first','$arr_transit','$airport1','$a_abbre1','$terms1',
 '$airport2','$a_abbre2','$terms2','$airline1','$time_depart','$time_arrival', '$checkin','$d_travel','$aircraft1',
 '$meal1','$distance1','$carbin','$type','$current','$initial','$final','$usta','$pastis','$path_name','$status','$airfare','$boarding')";
if($conn->query($command))
{
echo "<h3>Local Flight Ticket Details Has Been Successfully Created</h3>";
}

	
	
	?>
            <?php
}
?><br><br><br>
        </div>
        <!-----------SHOW IMAGE------------------>

        <div class="section"><br>
<div style="height:30px"></div>
<div id="Sign-In" align="center" ><br><br><br>
<div style="width:450px;height:250px;border:1px solid black; background-color:white);margin:auto;padding:5px;">
<br><br>
<img src="Image/thankyou.gif" style="width:350px;height:150px;">
</div>
</div>
</div><br><br>

<p style="font-family:kalinga;font-size:25px;color:#334d4d;text-align:center;padding-top:50px;">Thank You for Visiting CenterPoint Travels. A Whole New Dimension In Travel!!!</p>
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