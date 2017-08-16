<!doctype html>
<html>
  <head>
    <title>Search food</title>
  </head>

  <body>
  <div class="reservation_body" id="ss" style="padding-right: 220px">
      <h1 style="color: white;font-size: 40px">Search Foods</h1>
        <form method="post" action="SearchFood.php">


        <table border="0">
        <tbody>
          <tr>
              <td><label class="naming-label" style="font-size: 25px;">Enter Food_ID</label></td>
            <td><input name="food_id" class="input-txt" type="text" id="Food"></td>
            <td><input type="submit" name="search" id="search" value="Search Food"></td>
          </tr>


        </form>
          <?php
            require '../../db/connection/dbcon.php';

            if(isset($_POST['search'])){
                $Food_ID=$_POST['food_id'];
                $sql ="SELECT * FROM food_table WHERE food_id='$Food_ID'";
                $res1=mysqli_query($con,$sql);
                if($res1!=""){
                    while ($row = mysqli_fetch_array($res1))
                    {
                        require '/FoodDetails.php';

                    }
                }
                /*elseif(mysqli_fetch_array($res1)===''){
                    echo '<script language="javascript">';
                    echo 'alert("Passwords Do not match ")';
                    echo '</script>';
                }*/

            }



          ?>



        </tbody>
    </table>
  </div>

  </body>
</html>
