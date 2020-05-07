<?php
include "mysql_connect.php";
if(isset($_GET['edit_id']))
{
 $id = $_GET['edit_id'];
 //echo "id :".$id;
 //$sql_query="SELECT * FROM bbank WHERE user_id='$id'";
 //echo " $sql_query";
 //$result_set=mysql_query($sql_query);
 //echo "$result_set";
 //$count = mysql_num_rows($result_set);

 //$fetched_row=mysql_fetch_array($result_set);
 //echo $fetched_row;

}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $name = $_POST['bname'];
 $address = $_POST['baddress'];
 $contact = $_POST['bcontact'];
 $area = $_POST['barea'];
 $city = $_POST['bcity'];
 $state = $_POST['bstate'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE bbank SET bname='$name',baddress='$address',bcontact='$contact',barea='$area',bcity='$city',bstate='$state'
 WHERE id='$id'";
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}

if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <!-- <td><input type="text" name="first_name" placeholder="First Name" value="<?php //echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php //echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" value="<?php //echo $fetched_row['user_city']; ?>" required /></td> -->
    <td><input type="text" name="bname" placeholder="Name"  required /></td>
    </tr>
    <tr>
    <td><input type="text" name="baddress" placeholder="Address"  required /></td>
    </tr>
    <tr>
    <td><input type="text" name="bcontact" placeholder="Contact"  required /></td>
    </tr>
    <tr>
    <td><input type="text" name="barea" placeholder="Area"  required /></td>
    </tr>
    <tr>
    <td><input type="text" name="bcity" placeholder="City"  required /></td>
    </tr>
    <tr>
    <td><input type="text" name="bstate" placeholder="State"  required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>