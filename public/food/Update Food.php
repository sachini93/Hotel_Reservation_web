<!doctype html>
<html>
<head>
<title>Update Food</title>
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
    <h1 style="color: white;font-size: 40px">Update Foods</h1>
    <form method="post" action="#">
        <table border="0">
            <tbody>
            <tr>
                <td><label class="naming-label" style="font-size: 25px;">Enter Food ID</label></td>
                <td><input name="food_id" class="input-txt" type="text" id="Food"></td>
                <td><input type="submit" name="button1" id="button1" value="Search Food"></td>
            </tr>
            </tbody>
        </table>
    </form>
<?php
    require'../../db/connection/dbcon.php';

    if(isset($_POST['button1'])){
        $Food_ID=$_POST['food_id'];
		$sql ="SELECT * FROM food_table WHERE food_id='$Food_ID'";
        $res2=mysqli_query($con,$sql);
        if($res2!=""){
            while ($row = mysqli_fetch_array($res2))
            {
                echo '<form method="post" action="#">';
                echo '<table width="600px" align="center" cellpadding="10"><tbody>';
                echo '<tr><td>Food Category</td>';
                echo '<td>';
                echo '<input name="category" type="text" id="category" size="35" value="'.$row['category'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Food Name</td>';
                echo '<td>';
                echo '<input name="name" type="text" id="name" size="35" value="'.$row['name'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Food ID</td>';
                echo '<td>';
                echo '<input name="food_id" type="text" id="food id" size="35" value="'.$row['food_id'].'">'  ;
                echo '</td>';
                echo "</tr>";
                echo '<tr><td>Unit Price</td>';
                echo '<td>';
                echo '<input name="price" type="text" id="price" size="35" value="'.$row['price'].'">' ;
                echo '</td>';
                echo "</tr>";


            }
        }

    }

    echo '
    <tr>
        <td>
          <input type="submit" name="button2" id="button2" value="Update">

        </td>
		<td>
          <input type="submit" name="button3" id="button2" value="Delete">

        </td>
      </tr>
    </tbody>

  </table>
  </form>';


    if(isset($_POST['button2'])){
        $Food_Category=$_POST['category'];
        $Food_Name=$_POST['name'];
        $Food_ID=$_POST['food_id'];
        $Unit_Price=$_POST['price'];

        $sql = "UPDATE food_table SET category='$Food_Category',name='$Food_Name',food_id='$Food_ID',price='Unit_Price' WHERE food_id='$Food_ID'";
        //echo $sql;
		$res1=mysqli_query($con,$sql);
       // phpAlert("Table Updated");
			if(!$res1){
			echo mysqli_error($con);
		}
    }
	
	if(isset($_POST['button3'])){
        $Food_Category=$_POST['category'];
        $Food_Name=$_POST['name'];
        $Food_ID=$_POST['food_id'];
        $Unit_Price=$_POST['price'];

        $sql = "DELETE FROM food_table WHERE food_id='$Food_ID'";
        //echo $sql;
		$res1=mysqli_query($con,$sql);
       // phpAlert("Table Updated");
			if(!$res1){
			echo mysqli_error($con);
		}
    }
    ?>

    <?php
    //function phpAlert($msg) {
        //echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    //}
    ?>
    </tbody>
    </table>

</div>
</body>
</html>
