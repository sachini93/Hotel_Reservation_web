<html>
<head>
    <title>RoomNew</title>
    
</head>
<body bgcolor="#cc99ff">

<h1>Room</h1>
<form action="#" method="post">
<table border="0">
<tr>
	<td>Room No</td>
	<td><input type="text" name="RoomNo" ></td>
</tr>
<tr>
     <td>Room Type:</td>
	 <td> <input type="radio" name="RoomType" value="sea view" checked> Sea view </td>
        <td>  <input type="radio" name="RoomType" value="garden view">Garden view</td>
    
</tr>

<tr>
      <td> Room Capacity</td>
	  <td><select name="RoomCapacity" multiple size="2"> 

					<option> Single</option>
					<option> Double</option>
					<option> General</option>
				</select>
	   </td>
</tr>
<tr>
<td>No. Of Days:</td>
				<td><input type="text" name="days" size="3" maxlength="3"></td>
</tr>
<tr>
<td>Air Conditioning:</td>
<td><input type="radio" name="AC" value="AC"> A/C
				<input type="radio" name="AC" value="Non AC"> Non-A/C
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
echo $x;

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


<table>
<tr><td><a href="RoomCategory.php">Room Category</a> </td></tr>
<tr><td><a href="RoomSub.php">Room</a> </td></tr>
<tr><td><a href="RoomRent.php">Room Rent</a> </td></tr>
<tr><td><a href="AvailableRooms.php">Available Rooms</a> </td></tr>
</table>

</body>
</html>