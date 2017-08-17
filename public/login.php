<?php
if (isset($_POST['login'])) {
    //header("Location: index.php");


    include '../db/connection/dbcon.php';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "select * from user where username='" . $user . "'";
        $result = mysqli_query($con, $sql);
        var_dump($result);

        if (!($result)) {
            echo "unexpected error";
        }
        $rowcount = mysqli_num_rows($result);

        if ($rowcount == 0) {
            echo "User not found";
        } elseif ($rowcount == 1) {
            $r = mysqli_fetch_array($result);
            $rpass = $r['password'];
            if ($rpass == $pass) {
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['usertype'] = 'adm';
                header('Location: index.php');

            } else {
                header('Location: errors.php');
            }
        }
    }
}

?>
