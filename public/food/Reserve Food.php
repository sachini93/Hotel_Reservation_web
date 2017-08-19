<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<h1>Food Reservation</h1>
		<form action="" method="post">
			<table border="0">
				<tr>
					<td>Customer ID</td>
					<td><input type="text" name="customer id"></td>
				</tr>
				<tr>
					<td>Food Category</td>
					<td><select name="category">
								<option>Breakfast</option>
								<option>Lunch</option>
								<option>Dinner</option>
								<option>Desserts</option>
						  </select>
					</td>
				</tr>
				<tr>
					<td>Food Name</td>
					<td><select name="name">
								<option>Rice</option>
								<option>Hoppers</option>
								<option>String Hoppers</option>
								<option>Dhal curry</option>
								<option>Chicken curry</option>
								<option>Ice Cream</option>
								<option>Watalappan</option>
								<option>Pudding</option>
							</select>
					</td>
				</tr>
				<tr>
					<td>Unit Price</td>
					<td><input type="text" name="price"></td>
				</tr>
				<tr>
					<td>Amount</td>
					<td><input type="text" name="amount"></td>
				</tr>
				<tr>
					<td>Full Amount</td>
					<td><input type="text" name="full amount"></td>
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
			if(isset($_POST['button'])){
				$Food_Category=$_POST['Food_Category'];
				$Food_Name=$_POST['Food_Name'];
				$Food_ID=$_POST['Food_ID'];
				$Unit_Price=$_POST['Unit_Price'];

				$sql="INSERT INTO 'add food'('Food_Category', 'Food_Name', 'Food_ID', 'Unit_Price') VALUES ('$Food_Category','$Food_Name','$Food_ID','$Unit_Price')";
				$res=mysqli_query($con,$sql);
				if(!$res){
					echo mysqli_error($con);
				}
			}
			else {
				echo 'Correct';
			}
		 ?>

	</body>
</html>
