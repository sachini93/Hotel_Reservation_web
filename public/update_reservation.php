<!DOCTYPE html>
<html>
<head>

</head>

<body bgcolor="#cc99ff">
<div class="">
    <div class="reservation_body" id="ss" style="padding-right: 130px">
        <form id="add_reservation" method="POST" action="#">
            <table>
                <tr>
                    <td><label class="naming-label">Customer NIC</label></td>
                    <td><input type="text" class="input-txt" name="customer_nic"></td>
                    <td><input type="submit" value="update" name="update"></td>
                </tr>
            </table>
        </form>
        <!--reservation_id`, `customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type-->

        <?php
        require "../db/connection/dbcon.php";
        //var_dump($_POST);
        //var_dump($_POST['search']);
        if(isset($_POST['search'])) {

            $p_customer_nic = $_POST['customer_nic'];

            $sql = "SELECT `reservation_id`, `customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type` FROM `reservation` WHERE  `customer_nic`='$p_customer_nic'";
            $resl=mysqli_query($con,$sql);
            if(!$res){
                echo mysqli_error($con);
            }
//change table into td and input feilds(form type)
            echo "<table border='1'>
        <tr>
        <th>reservation id</th>
        <th>customer id</th>
        <th>check in</th>
        <th>check out</th>
        <th>room type</th>
        <th>room capacity</th>
        <th>package cost</th>
        <th>adults</th>
        <th>kids</th>
        <th>meal type</th>
        </tr>";

            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td><label class='naming-label'>reservation id</label></td><td><input type='text' name='reservation_id' value='".$row['reservation_id']."'></td>";
                echo "<td><label class='naming-label'>customer id</label></td><td><input type='text' name='customer_id' value='".$row['customer_id']."'></td>";
                echo "<td><label class='naming-label'>check in</label></td><td><input type='text' name='check_in' value='".$row['check_in']."'></td>";
                echo "<td><label class='naming-label'>check out</label></td><td><input type='text' name='check_out' value='".$row['check_out']."'></td>";
                echo "<td><label class='naming-label'>room type</label></td><td><input type='text' name='room_type' value='".$row['room_type']."'></td>";
                echo "<td><label class='naming-label'>room capacity</label></td><td><input type='text' name='room_capacity' value='".$row['room_capacity']."'></td>";
                echo "<td><label class='naming-label'>package cost</label></td><td><input type='text' name='package_cost' value='".$row['package_cost']."'></td>";
                echo "<td><label class='naming-label'>adults</label></td><td><input type='text' name='adults' value='".$row['adults']."'></td>";
                echo "<td><label class='naming-label'>kids</label></td><td><input type='text' name='kids' value='".$row['kids']."'></td>";
                echo "</tr>";
            }
            echo "</table>";


            //update
            $sql="UPDATE `reservation` SET `reservation_id`=[value-1],`customer_id`=[value-2],`check_in`=[value-3],`check_out`=[value-4],`room_type`=[value-5],`room_capacity`=[value-6],`package_cost`=[value-7],`adults`=[value-8],`kids`=[value-9],`meal_type`=[value-10] WHERE 1";
            $res = mysqli_query($con, $sql);

            mysqli_close($con);
        }
        ?>



    </div>
</div>
</body>
</html>