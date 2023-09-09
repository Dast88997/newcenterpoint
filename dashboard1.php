<?php
session_start();

?>

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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Handlee&family=Jaldi&display=swap"
        rel="stylesheet">
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
</style>

</head>

<?php
$conn=new mysqli("localhost","root","","ticketing");
$SQL = "SELECT * FROM deeds";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{

        ?>

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
                                        width="100" height="100">Welcome:<?=$data ['name']?></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="admin-user.php"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;padding-top:42px;">Logout</a>
                            </li>
                        </ul>
                </nav>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-md-2">
               
            </div>
            <div class="col-md-3">
                <div id="Sign In" align="center">
                    <div class="card"
                        style="width: 12rem;background-color:#534b4f;border:1px solid #534b4f;border-radius:20px;">
                        <div class="card-body">
                            <a href="create-flight-ticket.php" style="text-decoration:none;"><i class='fa fa-save'
                                    style='font-size:40px;color:#fbec5d'></i>
                                <h6 style="padding-top:20px;color:#ffffff;">Add Flight Ticket Details</h6>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>

            <div class="col-md-3">
                <div id="Sign In" align="center">
                    <div class="card"
                        style="width: 12rem;background-color:#534b4f;border:1px solid #534b4f;border-radius:20px;">
                        <div class="card-body">
                            <a href="access-flight-details.php" style="text-decoration:none;"><i
                                    class='fa fa-file-archive-o' style='font-size:40px;color:#fbec5d'></i>
                                <h6 style="padding-top:20px;color:#ffffff;">View And Update Flight Ticket</h6>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>

    <?php
	
}
}
?>

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