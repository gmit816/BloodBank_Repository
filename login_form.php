<?php
session_start(); // Starting Session
//

$error=''; // Variable To Store Error Message


if(isset($_POST['btn_sub_log']))
{

//if (empty($_POST['contact']) || empty($_POST['password']) || empty($_POST['bgroup'])) 
if (empty($_POST['contact']) || empty($_POST['password']) ) 
{
    $error = "Fill all fields.";
}
else
{
    $user_contact   = $_POST['contact'];
    $user_pass   = $_POST['password'];
    //$user_bgroup = $_POST['bgroup'];


    include "mysql_connect.php";
// To protect MySQL injection for Security purpose
    $user_contact   = stripslashes($user_contact);
    $user_pass   = stripslashes($user_pass);
    //$user_bgroup = stripslashes($user_bgroup);
    $user_contact   = mysql_real_escape_string($user_contact);
    $user_pass   = mysql_real_escape_string($user_pass);
    //$user_bgroup = mysql_real_escape_string($user_bgroup);

    $user_pass = md5($user_pass);

    //$sql_query = "SELCET * from `".$user_bgroup."` WHERE name = '".$user_name."' AND password = '".$user_pass."'";
    //echo $sql_query;

    
    //$query = mysql_query("select * from `".$user_bgroup."` where contact='$user_contact' and password='$user_pass'");

    $query = mysql_query("select * from `reg_user` where contact='$user_contact' and password='$user_pass'");


    //$query = mysql_query("SELCET * from `".$user_bgroup."` WHERE name = '".$user_name."' AND password = '".$user_pass."'");
    //echo "query = ".$query."";
    //$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
    $rows = mysql_num_rows($query);
    //echo "rows = ".$rows."";
    if ($rows == 1) {
    $_SESSION['login_user']=$user_contact; 
    //$_SESSION['login_bgroup']=$user_bgroup; // Initializing Session
    
    header("location: index.php"); // Redirecting To Other Page
    } else {
        
        //header("location: login_form.php"); // Redirecting To Other Page
        $error = "Username or Password is invalid";
//        echo "".$error."";
		
		//echo $error;
    }

    
        mysql_close($conn); // Closing Connection
}
    
     
        

}

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
        <script type="text/javascript">
  		 //var bb_areas = '<?php //echo json_encode($rows) ?>';
		</script>

    </head>
    
    <body class="bd front">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="mainNav">
        <li id="home" class="active"><a href="index.php"> Home <span class="sr-only">(current)</span></a></li>
        <li id="blooddonor"><a href="bdonor.php">Find blood Donner</a></li>
        <li id="bloodbank"><a href="bbank.php">Blood Bank Center</a></li>
      </ul>
      
      <ul class=" navbar-right">
        <form class="navbar-form" role="form">
        <button type="submit" id="signupbtn" class="btn btn-success"> <a href="user_signup.php" style="text-decoration: none">Sign up</a></button>
        </form>
        </ul>
        </div>
      </div>
      <!-- /.navbar-collapse -->
      <!-- /.container-fluid -->
</nav>


 <div class="container">
 <center>
 <legend><h1>LOGIN HERE</h1></legend>
<form class="form-horizontal" action = "" method="post" style="padding-bottom:8%;padding-top:4.2%">
  <fieldset>
  
    

<!--action="nextpage.php"-->

<table>
    Contact No: <br>
    <input type = "tel" name="contact" pattern="[0-9]{10}" title="Enter Contact Number" placeholder="Enter your Contact Number" required>
    <br>

<!-- ******************************** -->
    <!-- Blood Group :<br>
    <select name="bgroup" required>
    <option value="a+" required>A+</option>
	<option value="a-" required>A-</option>
	<option value="a-" required>AB+</option>
	<option value="a-" required>AB-</option>
	<option value="a-" required>A-</option>
	<option value="a-" required>B-</option>
	<option value="a-" required>B+</option>
	<option value="a-" required>O-</option>
	<option value="a-" required>O+</option>
	</select>
	<br> -->
<!-- ******************************** -->
    Password <br>
    <input type = "password" name="password" placeholder="Enter Password" pattern=".{6,}" title="Please enter at least 6 letters."  required>

    <br><br>
    <button type = "submit" name="btn_sub_log" id="btn_sub_log" value="login" ><strong>Login</strong></button>
		<p class="alert"><?php echo $error; ?></p>
</table>
</form>
</center>
</fieldset>
    

</form>

</div>
<?php include('footer.php'); ?>