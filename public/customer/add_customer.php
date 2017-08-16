<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
</head>
<body>
<h1>Customer Registration</h1>
<form action="#" method="post">
<table border="0" >
<tr>
    <td> Customer ID</td>
    <td><input type="text" name="customer_id"required ></td>
</tr>
<tr>
    <td> Name</td>
    <td><input type="text" name="name" required></td>
</tr>
<tr>
    <td> NIC</td>
    <td><input type="text" name="nic" required></td>
</tr>
<tr>
<tr>
    <td> Email</td>
    <td><input type="text" name="Email"></td>
</tr>
    <td>Gender</td>
    <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  </td>
  </tr>
<tr>
    <td> Address</td>
    <td><textarea name="Address" rows="4" cols="40"></textarea> </td>
</tr>

<tr>
      <td> City</td>
      <td><select name="City" > 

                    <option> Ampara</option>
                    <option> Anuradhapura</option>
                    <option> Badulla</option>
                    <option> Colombo</option>
                    <option> Galle</option>
                    <option> Gampaha</option>
                    <option> Jaffna</option>
                    <option> Kandy</option>
                    <option> Kurunegala</option>
                    <option> Mathara</option>
                    <option> Nuwera Eliya</option>
                    <option> Polonnaruwa</option>
                    <option> Rathnapura</option>
                    <option> Trincomalee</option>
                    
                    </select>

       </td>
</tr>
<tr>
    <td> Phone Number</td>
    <td><input type="text" name="PhoneNo" rowspan="10"></td>
</tr>



<tr>
<td><input type="submit" name="button" value="Submit"></td>
<td><input type="reset" name="button2" value="Cancel"></td> </tr>
</tr>

</table>
</form>

<?php
//require '../../db/user/user.php';
require '../../db/connection/dbcon.php';
?>

<?php

if(isset($_POST['button'])){
    $customer_id=$_POST['customer_id'];
    $name=$_POST['name'];
    $nic=$_POST['nic'];
    $Email=$_POST['Email'];
    $Gender=$_POST['gender'];
    $Address=$_POST['Address'];
    $City=$_POST['City'];
    $PhoneNo=$_POST['PhoneNo'];
    //$sql = "INSERT INTO customer_table ('customer_id','name','nic','Email','Address','City','PhoneNo')";
    $sql="INSERT INTO `customer_table`(`customer_id`, `name`, `nic`, `Email`,`gender`, `Address`, `City`, `PhoneNo`) VALUES ('$customer_id','$name','$nic','$Email','$Gender','$Address','$City','$PhoneNo')";
	$resl=mysqli_query($con,$sql);
	//if(!$res1){
		//echo mysqli_error($con);
	//}
    //phpAlert("Customer added to database");


}
else{
//echo 'rror';
}
?>
</body>
</html>
  