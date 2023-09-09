<!DOCTYPE html>
<html lang="en">

<head>
    <title>Centrepoint - Travels</title>
    <link href="Image/centerpoint.png" rel="icon">
    <link type="text/css" href="./css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="./css/dashboard.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Handlee&family=Jaldi&display=swap"
        rel="stylesheet">
</head>

<body>
    <div style="background-color:orange">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-orange">
                    <div class="col-md-6">
                        <h1 class="navbar-brand" href="#" style="color:#fff;font-family: 'Open Sans', sans-serif;">
                            <img src="./Image/centerpoint.png" width="80" height="80" style="float:left;"
                                font-weight="bold" class="d-inline-block align-top" alt="">
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
                                <a class="nav-link" href="trader-profile.php"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;"> <img
                                        src="Image/purepng.com-user-iconsymbolsiconsapple-iosiosios-8-iconsios-8-721522596134a4bio.png" width="50" height="52">Welcome:&nbsp
                                    Admin</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="dashboard1.php"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;padding-top:20px;">Logout</a>
                            </li>
                        </ul>
                </nav>
            </div>
        </div>
    </div>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1" style="padding:0;background:#EBEAEA;">

                </div>

                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-12" style="padding-top:30px;padding-bottom:30px;">
                            <form action="files.php" method="post" enctype="multipart/form-data">
                                <div id="Sign In" align="center">
                                    <h4 style="font-family: 'Encode Sans', sans-serif;">Passenger / Ticket Information
                                        </h1>
                                </div>
                                <div style="height:50px"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="fullnames4">Passenger Name</label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Passenger Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="accountnumber4">Email Address</label>
                                        <input type="text" class="form-control" name="email" id="accountnumber4"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="accountnumber4">Frequent Flier</label>
                                        <input type="text" class="form-control" name="flier" id="accountnumber4"
                                            placeholder="Frequent Flier">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">E-Ticket Number</label>
                                        <input type="text" class="form-control" name="number" id="inputPassword4"
                                            placeholder="E-Ticket Number">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="pannumber4">Booking Reference</label>
                                        <input type="text" class="form-control" name="booking" id="inputPassword4"
                                            placeholder="Booking Reference">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="pannumber4">Issued By</label>
                                        <input type="text" class="form-control" name="issue_by" id="inputPassword4"
                                            placeholder="Issued By">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="pannumber4">Issued Date</label><br>
                                        <input type="date" id="birthday" name="issue_date">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="pannumber4">Time Of Booking</label>
                                        <input type="text" class="form-control" name="issue_time" id="inputPassword4"
                                            placeholder="Time Of Booking">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="mobilenumber">Departure Time</label><br>
                                        <input type="date" id="birthday" name="departure_time">

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="emailaddress">Arrival Time </label><br>
                                        <input type="date" id="birthday" name="arrival_time">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="pannumber4">Weight</label>
                                        <input type="text" class="form-control" name="weight" id="inputPassword4"
                                            placeholder="Weight">
                                    </div>
                                </div>

                                <div style="height:50px"></div>

                                <div id="Sign In" align="center">
                                    <h4 style="font-family: 'Encode Sans', sans-serif;">Flight Information I</h1>
                                </div>
                                <div style="height:50px"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Flight Number</label>
                                        <input type="text" class="form-control" id="bankbranch" name="flight_number"
                                            placeholder="Flight Number">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="mobilenumber">Departure </label><br>
                                        <input type="date" id="birthday" name="d_first">

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="emailaddress">Arrival (Transit)</label><br>
                                        <input type="date" id="birthday" name="arr_transit">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Departure Airport </label>
                                        <input type="text" class="form-control" id="bankbranch" name="airport1"
                                            placeholder="Airport">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Airport Abbreviation</label>
                                        <input type="text" class="form-control" id="bankbranch" name="a_abbre1"
                                            placeholder="Airport Abbreviation">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Terminal</label>
                                        <input type="text" class="form-control" id="bankbranch" name="terms1"
                                            placeholder="Terminal">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Arrival Airport</label>
                                        <input type="text" class="form-control" id="bankbranch" name="airport2"
                                            placeholder="Airport (Transit)">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Airport Abbreviation</label>
                                        <input type="text" class="form-control" id="bankbranch" name="a_abbre2"
                                            placeholder="Airport Abbreviation">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Terminal</label>
                                        <input type="text" class="form-control" id="bankbranch" name="terms2"
                                            placeholder="Terminal">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Name Of Airline</label>
                                        <input type="text" class="form-control" id="bankbranch" name="airline1"
                                            placeholder="Name Of Airline">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch"> Time Of Departure</label>
                                        <input type="text" class="form-control" id="bankbranch" name="time_depart"
                                            placeholder="Time Of Departure">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Time Of Arrival</label>
                                        <input type="text" class="form-control" id="bankbranch" name="time_arrival"
                                            placeholder="Time Of Arrival (Transit)">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Check In</label>
                                        <input type="text" class="form-control" id="bankbranch" name="checkin"
                                            placeholder="Check In">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Duration Of Travel</label>
                                        <input type="text" class="form-control" id="bankbranch" name="d_travel"
                                            placeholder="Duration Of Travel">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Aircraft</label>
                                        <input type="text" class="form-control" id="bankbranch" name="aircraft1"
                                            placeholder="Aircraft">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Meal</label>
                                        <input type="text" class="form-control" id="bankbranch" name="meal1"
                                            placeholder="Meal">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Distance</label>
                                        <input type="text" class="form-control" id="bankbranch" name="distance1"
                                            placeholder="distance">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="bankbranch">Carbin</label>
                                        <input type="text" class="form-control" id="bankbranch" name="carbin"
                                            placeholder="Carbin">
                                    </div>
                                </div>

                                <div style="height:50px"></div>

                                <div id="Sign In" align="center">
                                    <h4 style="font-family: 'Encode Sans', sans-serif;">Other Informations</h1>
                                </div>
                                <div style="height:50px"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Other Duty Descriptions</label>
                                        <select id="inputState" class="form-control" name="type">
                                            <option selected>Choose Below</option>
                                            <option selected>Extra Luggage Fee</option>
                                            <option>Goods / Products Duty Fee</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Currency</label>
                                        <select id="inputState" class="form-control" name="current">
                                            <option selected>Choose Below</option>
                                            <option selected>₹</option>
                                           
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="initialbalance4">Other Duty Payment</label>
                                        <input type="number" class="form-control" name="initial" id="initialbalance4"
                                            placeholder="Other Fees / Taxes">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="finalbalance4">Total Balance</label>
                                        <input type="number" class="form-control" name="final" id="finalbalance4"
                                            placeholder="Final Balance">
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="username4">Username</label>
                                        <input type="text" name="usta" class="form-control" id="username4"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="password4">Password</label>
                                        <input type="text" class="form-control" name="pastis" id="currency4"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Booking Status</label>
                                        <select id="inputState" class="form-control" name="status">
                                            <option selected>Choose Below</option>
                                            <option selected>Confirmed</option>
                                            <option>Not Confimed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="passport">Upload Airline Logo</label>
                                        <input type="file" name="picture" placeholder="Passport Photo">
                                    </div>
                                </div>
                                <div style="height:50px"></div>
                                <div style="text-align:center">                                 
                                    <div class="form-row">                                      
                                        <div class="form-group col-md-3">
                                            <label for="password4">Amount For Ticket</label>
                                            <input type="text" class="form-control" name="airfare" id="currency4"
                                                placeholder="Amount For Ticket">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="password4">Boarding Time</label>
                                            <input type="text" class="form-control" name="boarding" id="currency4"
                                                placeholder="Boarding Time">
                                        </div>
                                    </div>
                                    <div style="height:50px"></div>
                                    <div style="text-align:center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div><br><br>
                                        <button type="submit" class="btn btn-primary" style="">Submit Ticket
                                            Details</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.getElementsByClassName('list-group-item')[0].style.backgroundColor = "#046469";
    document.getElementsByClassName('menu-list')[0].style.color = "#fff";
    </script>


</body>
