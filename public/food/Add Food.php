<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
    <div class="reservation_body" id="ss" style="padding-right: 220px">
        <h1 style="color: white;font-size: 40px">Add Foods</h1>
		<form action="#" method="post">
			<table border="0">
				<tr>
					<td><label class="naming-label">Food Category</label></td>
					<td><input type="text" class="input-txt" name="category"required></td>
				</tr>
				<tr>
					<td><label class="naming-label">Food Name</label></td>
					<td><input type="text" class="input-txt" name="name"required></td>
				</tr>
				<tr>
					<td><label class="naming-label">Food ID</label></td>
					<td><input type="text" class="input-txt" name="food_id"required></td>
				</tr>
				<tr>
					<td><label class="naming-label">Unit Price</label></td>
					<td><input type="text" class="input-txt" name="price"required></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Save"></td>
					<td><input type="reset" name="reset" value="Cancel"></td>
			</tr>
			</table>
		</form>
<?php
	require'../../db/connection/dbcon.php';
?>

<?php
	if(isset($_POST['submit'])){
		$Food_Category=$_POST['category'];
		$Food_Name=$_POST['name'];
		$Food_ID=$_POST['food_id'];
		$Unit_Price=$_POST['price'];

		//$sql="INSERT INTO 'food_table'('category', 'name', 'food_id', 'price') VALUES ('$Food_Category','$Food_Name','$Food_ID','$Unit_Price')";
		$sql="INSERT INTO `food_table`(`category`, `name`, `food_id`, `price`) VALUES ('$Food_Category','$Food_Name','$Food_ID','$Unit_Price')";
		$res=mysqli_query($con,$sql);
		if(!$res){
			echo mysqli_error($con);
		}
	}
	else {
		//echo 'Correct';
	}
 ?>
    </div>
	</body>
</html>
