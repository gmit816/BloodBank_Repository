<?php
//include_once 'dbconfig.php';
include "mysql_connect.php";

// delete condition
if(isset($_GET['delete_id']))
{
 $id = $_GET['delete_id'];
 echo " id :".$id;
 $sql_query="DELETE FROM bbank WHERE id='$id'";
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Bank Admin Portal</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='AEbbank.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='AIbbank.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Blood Bank Admin Portal<a href="AdminHome.php" target="_blank">  Home</a></label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="8"><a href="AAbbank.php">add data here.</a></th>
    </tr>
    <th>Blood Bank</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Area</th>
    <th>City</th>
    <th>State</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
$sql_query="SELECT * FROM bbank";
 //$sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" width="20px" height="20px" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png"  width="20px" height="20px" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>