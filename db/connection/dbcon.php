<?php 

//require or include

include('C:\wamp\www\Hotel management\db\connection\user.php ');



$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
echo"not established connection",mysqli_connect_error();
}

else{
    echo"sucess";
}


?>