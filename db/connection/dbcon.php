<?php 

//require or include

require('user.php');



$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
echo"not establised connection",mysqli_connect_error();
}


?>