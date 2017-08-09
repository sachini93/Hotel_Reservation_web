<!DOCTYPE html>
<html>
<head>
    <title>Hotel Managment</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/nav.css">
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
        <div class="user" id="menu">
            <table>
                <tr>
                    <td><a href="#" id="home_Reciptionist">Home</a></td>
                </tr>
                <tr>
                    <td><a href="#" id="add_reservation">Add Reservation</a></td>
                </tr>
                <tr>
                    <td><a href="#">Modify Reservation</a></td>
                </tr>
                <tr>
                    <td><a href="#">All Reservations</a></td>
                </tr>
                <tr>
                    <td><a href="#">Reports</a></td>
                </tr>
            </table>
        </div>
    </div>
    <div id="reservation_content">

    </div>
    <?php
/*    require ('./reservation/add_reservation.php.php');
    */?>
    <script>
        $document.ready(function () {
            $("#home_indexOfReciptionist").on("click", function () {
                $("#reservation_content").load("home_Reciptionist.php");
            });
            $("#add_reservation").on("click", function () {
                $("#reservation_content").load("./reservation/add_reservation.php");
            });
        });
    </script>
    <div class="footer">

    </div>
</div>
</body>
</html>

