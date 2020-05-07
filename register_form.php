<?php 



include('header.php'); 

if(isset($_SESSION['login_user']))
{
header("location: index.php"); // Redirecting To Other Page	
}
else
{



$error= "" ;

if(isset($_POST['btn_sub_reg']))
{

  if (empty($_POST['name']) || empty($_POST['gender']) || empty($_POST['address']) || empty($_POST['area']) || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['contact']) || empty($_POST['password']) || empty($_POST['cpassword']) || empty($_POST['bgroup']) || empty($_POST['age']) ) 
  {
      $error = "Fill all fields.";
  }
  else{
    

    
  if($_POST['password'] == $_POST['cpassword'])
  {
  
    //variable for input data
    $user_name = $_POST['name'];
    $user_gender = $_POST['gender'];
    $user_add = $_POST['address'];
    $user_area = $_POST['area'];
    $user_city = $_POST['city'];
    $user_state = $_POST['state'];
    $user_phone=$_POST['contact'];
    $user_pass = $_POST['password'];  
    $user_cpass = $_POST['cpassword'];
    $user_blood = $_POST['bgroup']; 
    $user_age = $_POST['age'];  

    // To protect MySQL injection for Security purpose
    $user_name = stripslashes($user_name);
    $user_gender = stripslashes($user_gender);
    $user_add = stripslashes($user_add);
    $user_area = stripslashes($user_area);
    $user_city = stripslashes($user_city);
    $user_state = stripslashes($user_state);
    $user_phone = stripslashes($user_phone);
    $user_pass = stripslashes($user_pass);
    $user_cpass = stripslashes($user_cpass);
    $user_blood = stripslashes($user_blood);
    $user_age = stripslashes($user_age);



    $user_name = mysql_real_escape_string($user_name);
    $user_gender = mysql_real_escape_string($user_gender);
    $user_add = mysql_real_escape_string($user_add);
    $user_area = mysql_real_escape_string($user_area);
    $user_city = mysql_real_escape_string($user_city);
    $user_state = mysql_real_escape_string($user_state);
    $user_phone = mysql_real_escape_string($user_phone);
    $user_pass = mysql_real_escape_string($user_pass);
    $user_cpass = mysql_real_escape_string($user_cpass);
    $user_blood = mysql_real_escape_string($user_blood);
    $user_age = mysql_real_escape_string ($user_age);
    

    $user_pass = md5($user_pass);
    include "mysql_connect.php";    
    // sql query for inserting data into database
    
    // $sql_query = "INSERT INTO `".$user_blood."` (name,gender,bgroup,age,address,area,city,state,contact,password) VALUES ('$user_name',
    // '$user_gender','$user_blood','$user_age','$user_add','$user_area','$user_city','$user_state','$user_phone','$user_pass')" ;
    // mysql_query($sql_query);


    $sql_query = "INSERT INTO `reg_user` (name,gender,bgroup,age,address,area,city,state,contact,password) VALUES ('$user_name',
    '$user_gender','$user_blood','$user_age','$user_add','$user_area','$user_city','$user_state','$user_phone','$user_pass')" ;
    mysql_query($sql_query);



    $query_ck = mysql_query("SELECT * FROM `reg_user` WHERE contact='$user_phone' and password='$user_pass'");

    //$query = mysql_query("SELCET * from `".$user_bgroup."` WHERE name = '".$user_name."' AND password = '".$user_pass."'");
    //echo "query = ".$query."";
    //$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
    $rows = mysql_num_rows($query_ck);
    //echo "rows = ".$rows."";
    if ($rows == 1) {

    $_SESSION['login_user']=$user_phone;
    $_SESSION['name'] = $user_name;
    //$_SESSION['login_bgroup']=$user_blood; // Initializing Session
    
    // echo " contact :".$_SESSION['login_user'];
    // echo " Blood group : ".$_SESSION['login_bgroup'];
    header("location: index.php"); // Redirecting To Other Page
    } 
    else {
    //$error = "Something goes wrong.Already user exists.";
    
    ?>

    <script>
  
    window.alert("Something goes wrong.Already user exists.");
    </script>
    <?php
    }

    
        mysql_close($conn); // Closing Connection


  }
    
    else
    { 
    echo "your password & conform password is different."; 
    }
  }
  }


?>


<center>
 <div class="container">
<form  action = "" method="POST" >

  <fieldset>
    <div id="legend">
      <legend><h1>REGISTER HERE</h1></legend>
    </div>
    <div class="form-group">

      <!-- CONTACT NO -->
      <label for="contact">Contact No.</label>
        <input type="tel" id="contact" name="contact" placeholder="Contact Number is Username" maxlength="10" pattern="[0-9]{10}" title="Enter Contact Number" required>
    </div>
 
    <div class="form-group">

      <!-- NAME -->
      <label>Name</label>
        <input type="text" id="name" name="name" placeholder="Enter Your Full Name" required>
      </div>


 	 <div class="form-group">
      <!-- BLOOD GROUP -->
      <label>Blood Group</label>
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
          <br>
    </div>

     <div class="form-group">
      <!-- GENDER -->
      <label>Gender</label>
    <input type="radio" name="gender" value="Male"required>Male<br>
	<input type="radio" name="gender" value="Female"required>Fmale
	</div>


     <div class="form-group">
      <!-- AGE -->
      <label>age</label>
        <input type="number" id="age" name="age" placeholder="Enter Your Age" required>
    </div>


     <div class="form-group">
      <!-- ADDRESS -->
      <label>address</label>
        <textarea type="text" id="address" name="address" placeholder="Address" required></textarea>
      </div>
    


     <div class="form-group">
      <!-- AREA -->
      <label>area</label>
        <input type="text" id="area" name="area" placeholder="Enter Area Name" required>
    </div>
    
       <div class="form-group">
      <!-- CITY -->
      <label>city</label>
        <input type="text" id="city" name="city" placeholder="Enter City Name" required>
    </div>
    <div class="form-group">
      <!-- STATE -->
      <label>State</label>
        <input type="text" id="state" name="state" placeholder="Enter State Name" required>
    </div>


    <div class="form-group">
      <!-- PASSWORD -->
      <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" pattern=".{6,}" title="Please enter at least 6 letters." id="password" required >
        
      </div>
 	 

    <div class="form-group">
      <!-- CONFORM PASSWORD -->
      <label>Password (Confirm)</label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Enter Confirm Password" id="cpassword" required>
        
        
    </div>
 
    <div class="form-group">
      <!-- Button -->
        <button type="submit" class="btn btn-success" name="btn_sub_reg" >Register</button>
        <p id="error"><?php echo $error; ?></p>

        
      
    </div>
  </fieldset>
</form>

</div>
</center>
<script>
var password = document.getElementById("password")
  , cpassword = document.getElementById("cpassword");

function validatePassword(){
  if(password.value != cpassword.value) {
    cpassword.setCustomValidity("Passwords Don't Match");
  } else {
    cpassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
cpassword.onkeyup = validatePassword;
</script>
<?php include('footer.php'); }?>