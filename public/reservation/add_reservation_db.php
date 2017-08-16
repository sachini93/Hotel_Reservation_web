<?php
//require "../../db/connection/dbcon.php";
//include "add_reservation.php";

echo $_POST['submit'];
if(isset($_POST['submit'])){
    echo '$con';
    $p_customer_id = $_POST['customer_id'];
    $p_check_in=$_POST['check_in'];
    $p_check_out=$_POST['check_out'];
    $p_room_type=$_POST['room_type'];
    $p_room_capacity=$_POST['capacity'];
    $p_package_cost=$_POST['package_cost'];
    $p_adults=$_POST['adults'];
    $p_kids=$_POST['kids'];
    $p_meal_type=$_POST['meal_type'];


echo $p_customer_id;
//echo 'hi hi';


     $sql=	"INSERT INTO `reservation`
             (`customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type`)
             VALUES ('$p_customer_id','$p_check_in','$p_check_out','$p_room_type','$p_room_capacity','$p_package_cost','$p_adults','$p_kids','$p_meal_type')";

    $res=mysqli_query($con,$sql);

    if($res){
        echo"success";
       // require 'aa.php';

    }
    else{
        echo"insert error!".mysqli_error($con);
    }}
?>