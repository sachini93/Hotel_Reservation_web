<!DOCTYPE html>
<html>
<head>
    <title>Hotel Managment</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/user.css">

    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>

</head>
<body bgcolor="#cc99ff">
<div class="main" id="main" style="width: 100%; height:1300px; background-color: #cc66ff; border: dotted" >
    <div class="top">
        <marquee style="scroll-padding: ">Hotel Levendra</marquee>
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
        <?php require ('./reservation/nav_reservation.php');?>
    </div>

    <div class="body" id="body_content">
    <?php
        //require ('./reservation/add_reservation.php');
    ?>
    </div>
    <div id="reservation_content">

    </div>
    <div class="footer">

    </div>
</div>
<script type="text/javascript">

    $(document).ready('./reservation/nav_reservation.php #add_reservation').click(function(){
        $("#body_content").load('./reservation/add_reservation.php ');
    });

</script>
</body>
</html>

