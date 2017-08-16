<!DOCTYPE html>
<html>
<head>
    <title>Hotel Managment</title>
    <link rel="stylesheet" href="http://localhost/Hotel management/css/header.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/user.css">

    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
       <!-- --><?php /*$page = preg_replace('/[^A-Za-z]/','', $_GET['page']);
        $path = 'reservation/'.$page.'.php';
    if (file_exists($path)){ $output = file_get_contents($path); }
    else { header("HTTP/1.0 404 Not Found");
        $output = file_get_contents('pages/404.html'); }
    */?>
</head>
<body bgcolor="#4a49b5">
<div class="main" id="main" style="width: 100%; height:1300px; background-color: #4a49b5;" >
    <div class="top">
        <marquee  scrollamount="10" behavior="alternate" style="width: 900px; height: 45px; color: #f5e7f5; font-size: 40px; font-family: Palatino Linotype;">HOTEL LAVENDRA</marquee>
    </div>
    <div class="user">
        <div clas="user" id="login_logout">
            <a href="login.php">Login</a>
        </div>
        <div class="user" id="user_img">
            <img src="../images/user1.jpg">
        </div>
    </div>
    <div class="nav">
        <?php require('nav_reservation.php');?>
    </div>

    <div class="body" id="body_content" style="width: 72%; height: 60%" >

        <?php
        require "../db/connection/dbcon.php";
        if(isset($_GET['link'])){
            $link=$_GET['link'];
            if ($link == '1'){
                include 'home.php';
            }
            if ($link == '2'){
                include 'add_reservation.php';
            }
            if ($link == '3'){
                include 'update_reservation.php';
            }
            if ($link == '4'){
                include 'view_reservations.php';
            }
            if ($link == '5'){
                include 'reports.php';
            }
        }  ?>





    </div>
    <div id="reservation_content">

    </div>
    <div class="footer">

    </div>
</div>
<script type="text/javascript">

    /*$(document).ready('./reservation/nav_reservation.php #add_reservation').click(function(){
        $(" #body_content").load('./reservation/add_reservation.php ');

    });*/

</script>
</body>
</html>

