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
                <?php
                //require previous php customer file here.(it must have nic and name variables)
                $customer_nic_set="001";
                $customer_name_set="abs";
                //$package_cost="1000";
                ?>
                <tr>
                    <td><label class="naming-label">Customer NIC</label></td>
                    <td><input type="text"  name="customer_nic" value="<?php echo $customer_nic_set; ?>"></td>

                </tr>
                <tr>
                    <td><label class="naming-label">Customer Name</label></td>
                    <td><input type="text" name="customer_name" value="<?php echo $customer_name_set; ?>"></td>
                    <!--<td><label class="data-load-lable" id="customer_name" name="customer_name">--><?php //echo $customer_name_set ?><!--</label></td>-->
                </tr>
                <tr>
                    <td><label class="naming-label">Check In</label></td>
                    <td><input type="date" class="calender"  id="check_in" name="check_in"></td>
                </tr>
                <tr>
                    <td><label class="naming-label">Check Out</label></td>
                    <td><input type="date" class="calender" id="check_out" name="check_out"></td>
                </tr>
                <tr>
                    <td><label class="naming-label">Room Type</label></td>
                    <td><select class="selection" id="room_type" name="room_type">
                            <option>Sea view</option>
                            <option>Garden view</option>
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
<!--                    <td rowspan="2"><label class="naming-label">Package Cost</label></td>-->
<!--                    <td><input type="text" name="package_cost" value="--><?php ////echo $package_cost; ?><!--"></td>-->
                    <!--<td rowspan="2"><label class="data-load-lable" id="package_cost" name="package_cost">1000</label></td>-->
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
                   <td><input type="submit" value="submit" name="send"></td>
                </tr>
            </table>
        </form>


        <?php
        require "../db/connection/dbcon.php";
        //var_dump($_POST['send']);
        //change to insert when submit is clicked only!!
        function alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        if(isset($_POST['send'])){
            if(!empty($_POST['customer_nic']) && !empty($_POST['check_in']) && !empty($_POST['check_out'])&& !empty($_POST['room_type'])&& !empty($_POST['capacity'])&& !empty($_POST['adults'])&& !empty($_POST['kids'])&& !empty($_POST['meal_type'])) {

                $p_customer_nic = $_POST['customer_nic'];
                //$p_check_in = new DateTime($_POST['check_in']);
                // $p_check_out = new DateTime($_POST['check_out']);
                // $diff = date_diff($p_check_in,$p_check_out);
                //echo $diff->format('%d days');
                //$p_check_in=date_create($_POST['check_in']);
                $p_check_in = $_POST['check_in'];
                //$p_check_out=date_create($_POST['check_out']);
                $p_check_out = $_POST['check_out'];
                $p_room_type = $_POST['room_type'];
                $p_room_capacity = $_POST['capacity'];
                // $p_package_cost=$_POST['package_cost'];
                $p_adults = $_POST['adults'];
                $p_kids = $_POST['kids'];
                $p_meal_type = $_POST['meal_type'];
                //echo $_POST['check_in'];
                //echo $diff;
                //echo $diff->format('%a')*10;
                /*if (isset($_POST['room_type']) && !empty($_POST['room_type'])){

                   // $package_cost=$diff->format('%a')*10;
                    $_POST['package_cost']=$diff->format('%a')*10;
            }*/


                //  if(isset($subName) && !empty($subName) && isset($subEmail) && !empty($subMail)) {
                //           echo 'Name: '.$subName.'<br> Email: '.$subEmail;
                //       }

                $sql = "INSERT INTO `reservation`
                 (`customer_nic`, `check_in`, `check_out`, `room_type`, `room_capacity`, `adults`, `kids`, `meal_type`)
                 VALUES ('$p_customer_nic','$p_check_in','$p_check_out','$p_room_type','$p_room_capacity','$p_adults','$p_kids','$p_meal_type')";

                $res = mysqli_query($con, $sql);

                if ($res) {
                    alert('Record Added');


                } else {
                    //echo "insert error!" . mysqli_error($con);
                    alert("insert error!" . mysqli_error($con));
                }
            }
            else{
                alert('Enter all feilds!');
            }
        }
        mysqli_close($con);
        ?>


    </div>
    </div>


</body>
</html>

