<!DOCTYPE html>
<html>
<head>

    <script type="text/javascript">
        function set_values() {
            //db-->reservation_id`, `customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type
            var p_customer_id=document.getElementById("customer_id").textContent;
            var p_check_in=document.getElementById("check_in").value;
            var p_check_out=document.getElementById("check_out").value;
            var roomType=document.getElementById("room_type");
            var p_room_type = roomType.options[roomType.selectedIndex].value;

            var roomCapacity=document.getElementsByName("capacity").value;
            var p_room_capacity;
            for(var i = 0; i < roomCapacity.length; i++){
                if(roomCapacity[i].checked){
                    p_room_capacity = roomCapacity[i].value;
                }
            }
            var p_package_cost=document.getElementById("package_cost").textContent;
            var p_adults=document.getElementById("adults").value;
            var p_kids=document.getElementById("adults").value;
            var mealType=document.getElementsByName("meal_type").value;
            var p_meal_type;
            for(var i = 0; i < mealType.length; i++){
                if(mealType[i].checked){
                    p_meal_type = mealType[i].value;
                }
            }

        }
    </script>

</head>
<body bgcolor="#cc99ff">
    <div class="">
    <div class="reservation_body">
        <form id="add_reservation" method="post" action="./db_classes/add_reservation_db.php">
            <!--reservation_id`, `customer_id`, `check_in`, `check_out`, `room_type`, `room_capacity`, `package_cost`, `adults`, `kids`, `meal_type-->
            <table>
                <tr>
                    <td><label class="naming-label">Customer ID</label></td>
                    <td><label class="data-load-lable" id="customer_id">001</label> </td>
                </tr>
                <tr>
                    <td><label class="naming-label">Customer Name</label></td>
                    <td><label class="data-load-lable" id="customer_name">GPS</label> </td>
                </tr>
                <tr>
                    <td><label class="naming-label">Check In</label></td>
                    <td><input type="datetime-local" class="calender"  id="check_in"></td>
                </tr>
                <tr>
                    <td><label class="naming-label">Check Out</label></td>
                    <td><input type="datetime-local" class="calender" id="check_out"></td>
                </tr>
                <tr>
                    <td><label class="naming-label">Room Type</label></td>
                    <td><select class="selection" id="room_type">
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
                    <td><label class="naming-label">Adults</label></td> <td><input type="text" class="input-txt" id="adults"></td>
                    <td><label class="naming-label">Kids</label></td> <td><input type="text" class="input-txt" id="kids"></td>
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
                    <td><button class="submit" id="add_reservation_btn" onclick="set_values()">Reserve</button></td>
                </tr>

            </table>
        </form>
    </div>
    </div>

</body>
</html>

