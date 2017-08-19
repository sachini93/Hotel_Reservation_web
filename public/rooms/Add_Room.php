<html>
<head>
    <title>Hotel Management-Rooms</title>
    <style rel="stylesheet/css">
        .reservation_body .naming-label-radio{
            font-size: 21px;
        }
    </style>
</head>
<body bgcolor="#cc99ff">
<div class="reservation_body" id="ss" style="padding-right: 185px">
    <h1 style="color: white;font-size: 40px">Add Rooms</h1>
    <form action="#" method="post">
    <table border="0">
    <tr>
        <td><label class="naming-label">Room No</label></td>
        <td><input type="text" name="RoomNo" ></td>
    </tr>
    <tr>
        <td><label class="naming-label">Room Type:</label></td>
         <td> <input type="radio" name="RoomType" value="sea view" checked><label class="naming-label-radio"> Sea view </label></td>
            <td>  <input type="radio" name="RoomType" value="garden view"><label class="naming-label-radio"> Garden view</label></td>

    </tr>

    <tr>
        <td><label class="naming-label"> Room Capacity</label></td>
          <td><select name="RoomCapacity">

                        <option> Single</option>
                        <option> Double</option>
                        <option> General</option>
                    </select>
           </td>
    </tr>
    <tr>
        <td><label class="naming-label">No. Of Days:</label></td>
                    <td><input type="text" name="days" size="3" maxlength="3"></td>
    </tr>
    <tr>
        <td><label class="naming-label">Air Conditioning:</label></td>
    <td><input type="radio" name="AC" value="AC" checked><label class="naming-label-radio">A/C</label>
                    <input type="radio" name="AC" value="Non AC"><label class="naming-label-radio">Non-A/C</label>
                    </td>
    </tr>
    <tr>
    <!-- <td>Other facilities:</td>
    <td><input type="checkbox" value="TV"> Cable TV <br>
                    <input type="checkbox" name="facilities" value="Laundry"> Laundry Service <br>
                    <input type="checkbox" name="facilities" value="Babysitting"> Babysitting <br>
                    <input type="checkbox" name="facilities" value="Parking"> Parking <br>
                    <input type="checkbox" name="facilities" value="WiFi"> WiFi <br>
                    <input type="checkbox" name="facilities" value="Telephone"> Telephone conversations <br>

                    </td> -->
    </tr>
    <tr>
    <td><input type="submit" name="reg" value="submit"></td>
    <td><input type="reset" name="reset" value="cancel"></td> </tr>
    </tr>

    </table>
    </form>
    <?php
    //require '../../db/user/user.php';
    require '../../db/connection/dbcon.php';
    ?>

    <?php
   // echo $x;

    if(isset($_POST['reg'])){
        $RoomNo=$_POST['RoomNo'];
        $RoomType=$_POST['RoomType'];
        $RoomCapacity=$_POST['RoomCapacity'];
        $days=$_POST['days'];
        $AC=$_POST['AC'];

        //$sql1="INSERT INTO `rooms`(`RoomNo`, `RoomType`, `RoomCapacity`, `days`, `AC`) VALUES ([$RoomNo],[value-2],[value-3],[value-4],[value-5])";
        $sql1="INSERT INTO `rooms`(`RoomNo`, `RoomType`, `RoomCapacity`, `days`, `AC`) VALUES ('$RoomNo','$RoomType','$RoomCapacity','$days','$AC')";
        $resl=mysqli_query($con,$sql1);
        if(!$resl){
            echo mysqli_error($con);
        }
        //phpAlert("Customer added to database");

    } else{
        //echo 'rror';
    }
    ?>



</div>
</body>
</html>