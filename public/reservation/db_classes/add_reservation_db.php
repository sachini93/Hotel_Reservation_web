<?php
    require "../../../db/connection/dbcon.php";
    require "../../../public/reservation/add_reservation.php";
    $sql=	"INSERT INTO `reservation`
            (`reservation_id`, `customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type`) 
            VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])";
    $res=mysqli_qurrey($con,$sql);
    if($res){

    }
    else{
        echo"mysqli_connect_error()";
    }
?>