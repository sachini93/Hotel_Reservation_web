<?php
    require "../../../db/connection/dbcon.php";
    require "../../../public/reservation/add_reservation.php";
    $sql=	"INSERT INTO `reservation`
            (`customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type`) 
            VALUES ($p_customer_id,$p_check_in,$p_check_out,$p_room_type,$p_room_capacity,$p_package_cost,$p_adults,$p_kids,$p_meal_type)";
    $res=mysqli_query($con,$sql);
    if($res){
        echo"success";

    }
    else{
        echo"insert error!".mysqli_error($con);
    }
?>