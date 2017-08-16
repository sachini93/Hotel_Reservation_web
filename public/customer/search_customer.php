<!doctype html>
<html>
<head>
<title>Search customer</title>
</head>

<body>
<h1>Search Customer</h1>
    <form method="post" action="search_customer.php">


    <table border="0">
    <tbody>
      <tr>
        <td>Enter Customer NIC</td>
        <td><input name="nic" type="text" id="nic" size="10"></td>
        <td width="120"><input type="submit" name="search" id="search" value="Search Customer"></td>
      </tr>


    </form>
      <?php
      //require '../../db/user/user.php';
      require '../../db/connection/dbcon.php';
      if(isset($_POST['search'])){
          $nic=$_POST['nic'];
          $sql ="SELECT * FROM customer_table WHERE nic='$nic'";
          $result=mysqli_query($con,$sql);
          if($result!=""){
              while ($row = mysqli_fetch_array($result))
              {
                  require '/cus_search_details.php';

		

              }
          }
          elseif (mysqli_fetch_array($result)===''){
              echo '<script language="javascript">';
              echo 'alert("Passwords Do not match ");';  //not showing an alert box.
              echo '</script>';
          }

      }



      ?>



    </tbody>
  </table>


</body>
</html>