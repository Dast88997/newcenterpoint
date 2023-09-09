<html>
    <title>Centrepoint - Travels</title>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="Image/centerpoint.png" rel="icon">
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
</head>


<style>
.table{width:50%;margin:auto;background:#4040bf;border:2px solid green;}
th{text-align:center;color:#fff;}
.br{border:0.7px solid black;
width:100%;
display:block;
color:#fff;
padding:3px;
}

.bor{border:1px solid black;}

.header{width:100%;height:50px;background:lightgray;}
	  *{margin:0;box-sizing:border-box;}
	  body {font-family: "Lato", sans-serif;}
	  .table{width:80%;margin:auto;background:orange;border:2px solid green;}
th{text-align:center;color:#fff;}
.br{border:0.7px solid black;
width:100%;
display:block;
color:#fff;
padding:3px;
}

.bor{border:1px solid black;}
</style> 

</head>
<body>
<div style="background-color:orange">
              <nav class="navbar navbar-orange">
                        <h1 class="navbar-brand" href="#" style="color:#fff;font-family: 'Open Sans', sans-serif;">
                            <img src="./Image/barclays-bank-logo-png.png" width="170" height="50" style="float:left;"
                                class="d-inline-block align-top" alt="">
                            <span style="margin-top:10px;display:block;float:left;margin-left:10px;">Welcome To Barclays Bank Online Technology</span>
                            
                        </h1>
                       

                        <ul class="nav justify-content-end">
                        
                            <li class="nav-item">
                                <a class="nav-link" href="trader-profile.php"
                                style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;">  <img src="./image/1024px-User_icon_2.svg.png" width="50" height="52">Welcome:Admin</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;padding-top:20px;">Logout</a>
                            </li>


                        </ul>
                    </nav>
        </div>






        <div class="container">
<div class="row">
	<div class="col-md-3.5 border 2px solid black">
        <img src="Image/Barclays-1-1068x623.jpg" style="width:300px;height:120px;padding-top:0;margin:0;">
         </div>

<div class="col-md-3.5 border 2px solid black">
<img src="Image/OIPmmcbhuxss.jpg" style="width:400px;height:120px;padding-top:0;margin:0;">
</div>
<div class="col-md-3.5 border 2px solid black">
<img src="Image/fhihmliydgkjklhg.jpg" style="width:400px;height:120px;padding-top:0;margin:0;">


</div>
</div><br>
<div id="Sign-In" align="center" >
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
$flight_numbs=$_POST['flight_numbs'];
$d_transit=$_POST['d_transit'];
$f_arrival=$_POST['f_arrival'];
$terminal3=$_POST['terminal3'];
$a_abbre3=$_POST['a_abbre3'];
$terms3=$_POST['terms3'];
$terminal4=$_POST['terminal4'];
$a_abbre4=$_POST['a_abbre4'];
$terms4=$_POST['terms4'];
$airline2=$_POST['airline2'];
$time_transit=$_POST['time_transit'];
$final_arrival=$_POST['final_arrival'];
$checkin1=$_POST['checkin1'];
$d_travel1=$_POST['d_travel1'];
$aircraft2=$_POST['aircraft2'];
$meal2=$_POST['meal2'];
$distance2=$_POST['distance2'];
$type=$_POST['type'];
$current=$_POST['current'];
$initial=$_POST['initial'];
$final=$_POST['final'];
$ust=$_POST['ust'];
$past=$_POST['past'];
$name1=$_POST['name'];
$status=$_POST['status'];
$change_over_airport=$_POST['change_over_airport'];
$change_over_abbre=$_POST['change_over_abbre'];
$change_over_time=$_POST['change_over_time'];
$airfare=$_POST['airfare'];



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
	move_uploaded_file($_FILES['picture']['tmp_name'],'upload/'.$path_name);

$command="insert into details(name,email,flier,number,booking,issue_by,issue_date,issue_time,departure_time,
arrival_time,weight,flight_number,d_first,arr_transit,airport1,a_abbre1,terms1,airport2,a_abbre2,terms2,airline1,time_depart,
time_arrival,checkin,d_travel,aircraft1,meal1,distance1,carbin,flight_numbs,d_transit,f_arrival,terminal3,a_abbre3,terms3,
terminal4,a_abbre4,terms4,airline2,time_transit,final_arrival,checkin1,d_travel1,aircraft2,meal2,distance2,type,
current,initial,final,ust,past,image,status,change_over_airport,change_over_abbre,change_over_time,airfare)
 values('$name1','$email','$flier','$number','$booking','$issue_by','$issue_date','$issue_time','$departure_time',
 '$arrival_time','$weight','$flight_number','$d_first','$arr_transit','$airport1','$a_abbre1','$terms1',
 '$airport2','$a_abbre2','$terms2','$airline1','$time_depart','$time_arrival', '$checkin','$d_travel','$aircraft1',
 '$meal1','$distance1','$carbin','$flight_numbs','$d_transit','$f_arrival','$terminal3','$a_abbre3','$terms3',
 '$terminal4','$a_abbre4','$terms4','$airline2','$time_transit','$final_arrival','$checkin1','$d_travel1','$aircraft2',
 '$meal2','$distance2','$type','$current','$initial','$final','$ust','$past','$path_name','$status','$change_over_airport','$change_over_abbre','$change_over_time','$airfare')";
if($conn->query($command))
{
echo "<h3>Your Passport Photo And Other Information Is Uploaded Successfully</h3>";
}

	
	
	?>
<?php
}
?><br><br><br>
</div>
<!-----------SHOW IMAGE------------------>

<div class="section"><br>
<div style="height:30px"></div>
<div id="Sign-In" align="center" ><br><br>
<div style="width:350px;height:150px;border:1px solid black; background-color:white);margin:auto;padding:5px;">
<span style="font-family:kalinga;font-size:15px;color:#334d4d">Thak You for Successfully Updated The Datas</span><br><br>
<img src="Image/cash-mgmt-img.medium.medium_quality.jpg" style="width:150px;height:80px;">
</div>
</div>
</div><br><br>
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