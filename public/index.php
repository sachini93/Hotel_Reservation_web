<!DOCTYPE html>
<html>
<head>
    <title>Hotel Managment</title>
    <link rel="stylesheet" href="http://localhost/Hotel management/css/header.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/user.css">
<style>
    .body{
        background-image: url("../images/Swimming Pool at La Toubana hotel_HD.jpg");
    }
</style>
    <style>
        .footer p{
            color: white;

            text-align: center;
        }
    </style>

</head>
<body bgcolor="#4a49b5">
<div class="main" id="main" style="width: 100%; height:1300px; background-color: #4a49b5;" >
    <div class="top">
        <marquee  scrollamount="10" behavior="alternate" style="width: 900px; height: 45px; color: #f5e7f5; font-size: 40px; font-family: Palatino Linotype;">HOTEL LAVENDRA</marquee>
    </div>
    <div class="user">
        <?php
            //if(isset($_SESSION['username']))
        ?>
        <div clas="user" id="login_logout">
            <a href="logout.php">Logout</a>
        </div>
        <div class="user" id="user_img">
            <img src="../images/user1.jpg">
        </div>
    </div>
    <div class="nav">
        <?php require('nav_main.php');?>
    </div>

    <div class="body" id="body_content" style="width: 72%; height: 60%" >

        <?php
        //require "../db/connection/dbcon.php";
       /* if(isset($_GET['link'])){
            $link=$_GET['link'];
            if ($link == '1'){
                include './reservation/indexOfReceptionist.php';
            }
            if ($link == '2'){
                include './customer/indexOfCustomer.php';
            }
            if ($link == '3'){
                include './food/indexOfFoods.php';
            }
            if ($link == '4'){
                include './rooms/indexOfRooms.php';
            }
        } */ ?>





    </div>
    <div id="reservation_content">

    </div>
    <div class="footer">
        <div class="copyright"><p>&copy; www.lavendra.com  | Lavendra Hotel,Colombo 10 | Contact us 0112345678,01154545367 | All Right Reserved</p></div>
    </div>
</div>

</body>
</html>

