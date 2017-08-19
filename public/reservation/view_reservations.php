<!DOCTYPE html>
<html>
<head>
    <style>
        table td{
            font-size: 20px;
            color: white;

        }
        table{
            margin: 10px;
        }
    </style>
</head>

<body bgcolor="#cc99ff">
<div class="">
    <div class="reservation_body" id="ss" style="padding-right: 220px">
        <form id="add_reservation" method="POST" action="#">
            <table>
                <tr>
                    <td><label class="naming-label">Customer NIC</label></td>
                    <td><input type="text" class="input-txt" name="customer_nic"></td>
                    <td><input type="submit" value="search" name="search"></td>
                </tr>
            </table>
        </form>
            <!--reservation_id`, `customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type-->

        <?php
        require '../../db/connection/dbcon.php';
        // require "../db/connection/dbcon.php";
//var_dump($_POST);
        //var_dump($_POST['search']);
        if(isset($_POST['search'])) {

            $p_customer_nic = $_POST['customer_nic'];

            $sql = "SELECT `reservation_id`, `customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type` FROM `reservation` WHERE  `customer_id`='$p_customer_nic'";

            $res = mysqli_query($con, $sql);

           /* echo "<table border='1'>
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
        </tr>";*/

        if($res!=""){
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">reservation id</label></td><td>" . $row['reservation_id'] . "</td>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">customer id</label></td><td>" . $row['customer_id'] . "</td>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">check in</label></td><td>" . $row['check_in'] . "</td>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">check out</label></td><td>" . $row['check_out'] . "</td>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">room type</label></td><td>" . $row['room_type'] . "</td>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">room capacity</label></td><td>" . $row['room_capacity'] . "</td>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">package cost</label></td><td>" . $row['package_cost'] . "</td>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">adults</label></td><td>" . $row['adults'] . "</td>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">kids</label></td><td>" . $row['kids'] . "</td>";
                echo "<td><label class=\"naming-label\" style=\"font-size: 25px;\">meal typet</label></td><td>" . $row['meal_type'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($con);
        }}
        ?>



    </div>
</div>
</body>
</html>