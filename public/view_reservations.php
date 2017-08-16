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
                    <td><input type="submit" value="search" name="search"></td>
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

            $sql = "SELECT `reservation_id`, `customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type` FROM `reservation` WHERE  `customer_id`='$p_customer_nic'";

            $res = mysqli_query($con, $sql);

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
                echo "<td>" . $row['reservation_id'] . "</td>";
                echo "<td>" . $row['customer_id'] . "</td>";
                echo "<td>" . $row['check_in'] . "</td>";
                echo "<td>" . $row['check_out'] . "</td>";
                echo "<td>" . $row['room_type'] . "</td>";
                echo "<td>" . $row['room_capacity'] . "</td>";
                echo "<td>" . $row['package_cost'] . "</td>";
                echo "<td>" . $row['adults'] . "</td>";
                echo "<td>" . $row['kids'] . "</td>";
                echo "<td>" . $row['meal_type'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($con);
        }
        ?>



    </div>
</div>
</body>
</html>