<!doctype html>
<html>
<head>
<title>Update Customer</title>
</head>

<body>
<div class="reservation_body" id="ss" style="padding-right: 220px">
    <h1 style="color: white;font-size: 40px">Update Customer Details</h1>
        <form method="post" action="update_customer.php">
            <table border="0">
                <tbody>
                <tr>
                    <td><label class="naming-label" style="font-size: 25px;">Enter Customer NIC</label></td>
                    <td><input name="nic" class="input-txt" type="text" id="nic" size="10"></td>
                    <td><input type="submit" name="search" id="search" value="Search Customer"></td>
                </tr>
                </tbody>
            </table>
        </form>
    <?php
    //require '../../db/user/user.php';
        require '../../db/connection/dbcon.php';

        if(isset($_POST['button3'])){
            $nic=$_POST['nic'];

            $sql ="SELECT * FROM customer_table WHERE nic='$nic'";
            $result=mysqli_query($con,$sql);
            if($result!=""){
                while ($row = mysqli_fetch_array($result))
                {
                    echo '<form method="post" action="update_customer.php">';
                    echo '<table width="600px" align="center" cellpadding="10"><tbody>';
                    echo '<tr><td>Cutomer ID</td>';
                    echo '<td>';
                    echo '<input name="customer_id" type="text" id="customer_id" size="35" value="'.$row['customer_id'].'">'  ;

                    echo '</td>';
                    echo "</tr>";
                    echo '<tr><td>Cutomer Name</td>';
                    echo '<td>';
                    echo '<input name="name" type="text" id="name1" size="35" value="'.$row['name'].'">'  ;
                    echo '</td>';
                    echo "</tr>";
                    echo '<tr><td>Cutomer NIC</td>';

                    echo '<td>';
                    echo '<input name="nic" type="text" id="nic" size="35" value="'.$row['nic'].'">'  ;
                    echo '</td>';
                    echo "</tr>";
                    echo '<tr><td>Email</td>';
                    echo '<td>';
                    echo '<input name="Email" type="text" id="Email" size="35" value="'.$row['Email'].'">'  ;

                    echo '</td>';
                    echo "</tr>";
                    echo '<tr><td>Gender</td>';
                    echo '<td>';
                    echo '<input name="gender" type="text" id="gender" size="35" value="'.$row['gender'].'">'  ;

                    echo '</td>';
                    echo "</tr>";
                    echo '<tr><td>Address 3</td>';
                    echo '<td>';
                    echo '<input name="address" type="text" id="Address" size="35" value="'.$row['Address'].'">'  ;

                    echo '</td>';
                    echo "</tr>";
                    echo '<tr><td>City</td>';
                    echo '<td>';
                    echo '<input name="City" type="text" id="City" size="35" value="'.$row['City'].'">'  ;
                    echo '</td>';
                    echo "</tr>";
                    echo '<tr><td>Phone Number</td>';
                    echo '<td>';
                    echo '<input name="PhoneNo" type="text" id="PhoneNo" size="35" value="'.$row['PhoneNo'].'">'  ;
                    echo '</td>';
                    echo "</tr>";

                }
            }
            /*elseif(mysqli_fetch_array($result)===''){
                echo '<script language="javascript">';
                echo 'alert("Passwords Do not match ");';  //not showing an alert box.
                echo '</script>';
            }*/

        }

        echo '
        <tr>
            <td>
              <input type="submit" name="button2" id="button2" value="Update">
              
            </td>
            <td>
              <input type="submit" name="button4" id="button4" value="Delete">
              
            </td>
           
        </tbody>
        
      </table></form>';


        if(isset($_POST['button2'])){
            $customer_id=$_POST['customer_id'];
            $name=$_POST['name'];
            $nic=$_POST['nic'];
            $Email=$_POST['Email'];
            $gender=$_POST['gender'];
            $Address=$_POST['address'];
            $City=$_POST['City'];
            $PhoneNo=$_POST['PhoneNo'];
            $sql = "UPDATE customer_table SET customer_id ='$customer_id',name='$name',nic='$nic',Email='$Email',gender='$gender',address='$Address',City='$City',PhoneNo='$PhoneNo' WHERE nic='$nic'";
            //echo $sql;
            $res1=mysqli_query($con,$sql);
           // phpAlert("Information Updated");
            if(!$res1){
                echo mysqli_error($con);
            }

        }

        if(isset($_POST['button4'])){
            $customer_id=$_POST['customer_id'];
            $name=$_POST['name'];
            $nic=$_POST['nic'];
            $Email=$_POST['Email'];
            $gender=$_POST['gender'];
            $Address=$_POST['address'];
            $City=$_POST['City'];
            $PhoneNo=$_POST['PhoneNo'];
            $sql = "DELETE FROM `customer_table` WHERE nic='$nic'";
            //echo $sql;
            $res1=mysqli_query($con,$sql);
           // phpAlert("Information Deleted");
            if(!$res1){
                echo mysqli_error($con);
            }

        }
        ?>

        <?php     //alert message
        function phpAlert($msg) {
            echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        }
        ?>
        </tbody>
        </table>

    </div>
</body>
</html>
