<!DOCTYPE html>
<html>
<head>
    <title>Hotel Managment</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/user.css">
</head>
<body bgcolor="#cc99ff">
    <div class="main" style="width: 100%; height:1300px; background-color: #cc66ff; border: dotted" >
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
                        <td><a href="index.php">Home</a></td>
                    </tr>
                    <tr>
                        <td><a href="index.php">About Us</a></td>
                    </tr>
                    <tr>
                        <td><a href="index.php">Contact Us</a></td>
                    </tr>
                    <tr>
                        <td><a href="index.php">Gallery</a></td>
                    </tr>
                    <tr>
                        <td><a href="index.php">Register</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
            require ('./reservation/reservation.php');
        ?>
        <div class="footer">

        </div>
    </div>
</body>
</html>

