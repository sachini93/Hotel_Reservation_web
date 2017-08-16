<!DOCTYPE html>
<html>
<head>
<!--    <title>Reservation</title>-->

    <link rel="stylesheet" href="../css/body.css">

</head>
<body bgcolor="#cc99ff">
<!--<div class="main" style="width: 100%; height:1300px; background-color: #cc66ff; border: dotted" >-->
    <!--<script type="text/javascript">
        function load(){
            document.getElementById("body").innerHTML='<object type="text/php" data="../index.php" ></object>';
        }
    </script>-->
    <div class="body">
        <div class="reservation_body">
            <form id="add_reservation" method="post">
                <table>
                    <tr>
                        <td><label class="naming-label">Customer ID</label></td>
                        <td><label class="data-load-lable">001</label> </td>
                    </tr>
                    <tr>
                        <td><label class="naming-label">Customer Name</label></td>
                        <td><label class="data-load-lable">GPS</label> </td>
                    </tr>
                    <tr>
                        <td><label class="naming-label">Check In</label></td>
                        <td><input type="datetime-local" class="calender"></td>
                    </tr>
                    <tr>
                        <td><label class="naming-label">Check Out</label></td>
                        <td><input type="datetime-local" class="calender"></td>
                    </tr>
                    <tr>
                        <td><label class="naming-label">Room Type</label></td>
                        <td><select class="selection">
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
                        <td rowspan="2"><label class="data-load-lable" id="package_cost">1000</label></td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><label class="naming-label">Number of Guests</label></td>
                    </tr>
                    <tr>
                        <td><label class="naming-label">Adults</label></td> <td><input type="text" class="input-txt"></td>
                        <td><label class="naming-label">Kids</label></td> <td><input type="text" class="input-txt"></td>
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
                        <td><button class="submit" id="add_reservation_btn">Reserve</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>
</html>

