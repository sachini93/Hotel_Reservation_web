<!doctype html>
<html>
<head>
<title>Search Room</title>
    <style>
        table td{
            font-size: 20px;
            color: white;

        }
        table{
            margin: 10px;
        }
    </style>
</head>

<body>
<div class="reservation_body" id="ss" style="padding-right: 220px">
<h1 style="color: white;font-size: 40px">Search Rooms</h1>
    <form method="post" action="#">


    <table border="0">
    <tbody>
      <tr>
        <td><label class="naming-label" style="font-size: 25px;">Enter Room Number</label></td>
        <td><input name="RoomNo" class="input-txt" type="text" id="RoomNo" ></td>
        <td width="120"><input type="submit" name="search" id="search" value="Search Room"></td>
      </tr>


    </form>
      <?php
      require '../../db/user/user.php';
      require '../../db/connection/dbcon.php';
	  
	  ?>
	  
	  <?php
      if(isset($_POST['search'])){
          $RoomNo=$_POST['RoomNo'];
          $sql ="SELECT * FROM rooms WHERE RoomNo='$RoomNo'";
          $result=mysqli_query($con,$sql);
          if($result!=""){
              while ($row = mysqli_fetch_array($result))
              {
                  require 'room_search_details.php';

              }
          }
          elseif(mysqli_fetch_array($result)===''){
              echo '<script language="javascript">';
              echo 'alert("Passwords Do not match ")';  //not showing an alert box.
              echo '</script>';
          }

      }



      ?>



    </tbody>
  </table>

</div>
</body>
</html>