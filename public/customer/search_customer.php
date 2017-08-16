<!doctype html>
<html>
<head>
<title>Search customer</title>
</head>

<body>
<div class="reservation_body" id="ss" style="padding-right: 220px">
    <h1 style="color: white;font-size: 40px">Search Customer</h1>
        <form method="post" action="search_customer.php">


        <table border="0">
        <tbody>
          <tr>
              <td><label class="naming-label" style="font-size: 25px;">Enter Customer NIC</label></td>
            <td><input name="nic" class="input-txt" type="text" id="nic" size="10"></td>
            <td><input type="submit" name="search" id="search" value="Search Customer"></td>
          </tr>


        </form>
          <?php
          require '../../db/user/user.php';
          require '../../db/connection/dbcon.php';
          if(isset($_POST['search'])){
              $nic=$_POST['nic'];
              $sql ="SELECT * FROM customer_table WHERE nic='$nic'";
              $result=mysqli_query($con,$sql);
              var_dump($result);
              if($result!=""){
                  echo "<div>";
                  while ($row = mysqli_fetch_array($result))
                  {
                      require 'cus_search_details.php';



                  }echo"</div>";
              }
              elseif (mysqli_fetch_array($result)===''){
                  echo '<script language="javascript">';
                  echo 'alert("Passwords Do not match ");';  //not showing an alert box.
                  echo '</script>';
              }
              else{
                  alert(mysqli_error($con));
              }

          }



          ?>



        </tbody>
      </table>
</div>

</body>
</html>