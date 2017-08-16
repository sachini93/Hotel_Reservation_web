<!DOCTYPE html>
<html>
<head>




</head>
<body bgcolor="#cc99ff">
    <div class="">
    <div class="reservation_body" id="ss">
        <form id="add_reservation" method="POST" action="#">
            <!--reservation_id`, `customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type-->
            <table>
                <tr>
                    <td><label class="naming-label">Customer ID</label></td>
                    <td><label class="data-load-lable" id="customer_id" name="customer_id">001</label> </td>
                </tr>
                <tr>
                    <td><label class="naming-label">Customer Name</label></td>
                    <td><label class="data-load-lable" id="customer_name" name="customer_name">GPS</label> </td>
                </tr>
                <tr>
                    <td><label class="naming-label">Check In</label></td>
                    <td><input type="datetime-local" class="calender"  id="check_in" name="check_in"></td>
                </tr>
                <tr>
                    <td><label class="naming-label">Check Out</label></td>
                    <td><input type="datetime-local" class="calender" id="check_out" name="check_out"></td>
                </tr>
                <tr>
                    <td><label class="naming-label">Room Type</label></td>
                    <td><select class="selection" id="room_type" name="room_type">
                            <option>aaa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label class="naming-label">Room Capacity</label></td>
                    <td>
                        <input type="radio" value="single" name="capacity"><label class="naming-label-radio">Single</label>
                        <input type="radio" value="double" name="capacity"><label class="naming-label-radio">Double</label>
                        <input type="radio" value="general" name="capacity"><label class="naming-label-radio">General</label>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"><label class="naming-label">Package Cost</label></td>
                    <td rowspan="2"><label class="data-load-lable" id="package_cost" name="package_cost">1000</label></td>
                </tr>
                <tr></tr>

                <tr>
                    <td><label class="naming-label">Number of Guests</label></td>
                </tr>
                <tr>
                    <td><label class="naming-label">Adults</label></td> <td><input type="text" class="input-txt" id="adults" name="adults"></td>
                    <td><label class="naming-label">Kids</label></td> <td><input type="text" class="input-txt" id="kids" name="kids"></td>
                </tr>
                <tr>
                    <td ><label class="naming-label">Meals</label></td>
                    <td>
                        <ul>
                            <li><input type="radio" value="dinein" name="meal_type"><label class="naming-label-radio">Dine in</label></li>
                            <li><input type="radio" value="roomservice" name="meal_type"><label class="naming-label-radio">room Service</label></li>
                            <li><input type="radio" value="other" name="meal_type"><label class="naming-label-radio">Other</label></li>
                        </ul>
                    </td>
                </tr>
                <tr>
<!--                    <td><button class="submit" id="submit" name="submit">Reserve</button></td>-->
                    <td><input type="submit" value="submit" name="send"></td>
                </tr>

            </table>
        </form>


        <?php
        require "../../db/connection/dbcon.php";
        //include "add_reservation.php";
//$_POST['submit']='submit';
        var_dump($_POST['send']);
        if(isset($_POST['send'])){
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
//  if(isset($subName) && !empty($subName) && isset($subEmail) && !empty($subMail)) {
 //           echo 'Name: '.$subName.'<br> Email: '.$subEmail;
 //       }

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
            }
        }
        mysqli_close($con);
        ?>


    </div>
    </div>


</body>
</html>

