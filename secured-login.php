<!DOCTYPE html>
<html lang="en">

<head>

    <title>Centrepoint Travels - Admin Panel</title>
    <link href="Image/centerpoint.png" rel="icon">
    <link type="text/css" href="./css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="./css/dashboard.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
</head>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.input-container {
    display: -ms-flexbox;
    /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color: dodgerblue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>

<body
    style="background-image:url('./Image/giphy.gif');background-repeat:no-repeat;background-size:100% 100vh;background-attachment:fixed;">
    <section style="margin:0;box-shadow: 0 1px 2px rgb(0 0 0 / 10%);background-color:rgba(0,0,0,0.8);height:100vh;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-3"
                    style="transform:translateY(10%);background:rgba(0,0,0,0.5);padding-top:20px;padding-bottom:20px;">
                    <center><img src="./Image/river-night-in-bangkok-thailand-tanatat-pongphibool-thailand.jpg"
                            style="width:90%;height:auto;"></center>
                    <form action="passenger-flight-details.php" method="get">
                        <div style="height:50px"></div>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" placeholder="Username" name="ustar">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="input-field" type="password" placeholder="Password" name="pasti">
                        </div>
                        <button type="submit" class="btn">Proceed</button><br><br>
                        <p
                            style="color:#ffffff;font-size:13px;text-indent:1em; font-family: 'Source Sans Pro', sans-serif;">
                            @ Centerpoint Travels 2019. All Rights Reserved</p>
                </div>
                </form>
            </div>
            ;
        </div>
        </div>
    </section>

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
</html