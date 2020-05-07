<?php
include "mysql_connect.php";
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['bname'];
 $address = $_POST['baddress'];
 $contact = $_POST['bcontact'];
 $area = $_POST['barea'];
 $city = $_POST['bcity'];
 $state = $_POST['bstate'];

 // sql query for inserting data into database
 $sql_query = "INSERT INTO bbank(bname,baddress,bcontact,barea,bcity,bstate) VALUES('$name','$address','$contact','$area','$city',
 '$state')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    <td align="center"><a href="AdminHome.php">back to main page</a></td>
    </tr>
    <tr>
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
    <td><center><button type="submit" name="btn-save"><strong>save</strong></button></center></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>