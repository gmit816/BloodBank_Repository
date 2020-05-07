<!-- <style type="text/css">
.thumbnail {
    padding:0px;
}
.panel {
	position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
	position:absolute;
	top:11px;left:-16px;
	right:100%;
	width:0;
	height:0;
	display:block;
	content:" ";
	border-color:transparent;
	border-style:solid solid outset;
	pointer-events:none;
}
.panel>.panel-heading:after{
	border-width:7px;
	border-right-color:#f7f7f7;
	margin-top:1px;
	margin-left:2px;
}
.panel>.panel-heading:before{
	border-right-color:#ddd;
	border-width:8px;
}</style> -->
<?php include('header.php'); ?>
 
      <?php

       
      //include('session.php'); // Includes Login Script
      //session_start();
      if(isset($_SESSION['login_user'])){
          $login_session = $_SESSION['login_user'];
          $login_uname = $_SESSION['login_uname'];
          
      $is_user = 1;
      //header("location: profile.php");
      }
      else{
          //echo "in loop";
          $is_user = 0;
      }


      

      
     ?>
     <center>
  <!-- <div class="jumbotron" style="background-image: url(img/bg1.jpg);"> -->
  <div class="jumbotron" style="background-image: url(img/bg1.jpg); background-size: cover;">
      <div class="container-fluid">
        <h2>POST</h2>
        <hr class="colorgraph"> 
        <!-- <form action="services.php" method="POST">
                
                <table <label for="tags">City</label>
                <input id="tags" type="text" name="tags" style="height: 30px;">
                <table <label for="tag">Area</label>
                <input id="tag" type="text" name="tag" style="height: 30px;">
                <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">
        </form> -->

<?php

if($is_user == 1)
{

$true = true;

$post_query="SELECT * FROM `post` where complete='$true' ORDER BY id DESC";
        $result_set=mysql_query($post_query);
        $count = mysql_num_rows($result_set);

        

            if($count != 0)
            {



      ?>
           
      <!-- <div class="container">
      <div class="row ">
        <table class="center-block"> -->
        <!-- <tr><th><center> Name </center></th> <th><center> City </center></th> <th><center> Blood Group </center></th>
        <th> <center>Contact No.</center></th></tr> -->
      <?php
                while($row=mysql_fetch_row($result_set))
                {

                    $var = $row[1];
                    $pname = mysql_fetch_row(mysql_query("SELECT name FROM `reg_user` WHERE contact='$var'"));
                    
                   /* echo "    <div class='container'>
							
							<div class='col-lg-4 col-lg-offset-4'>
							</div>
							</div>";
					*/
					echo "<div class='col-lg-4 col-lg-offset-4'>
							<div class='panel panel-default'>
							<div class='panel-heading'>
							<strong>Name : ".$pname[0]."</strong>
							</div>
							<div class='panel-body'>";
                    echo "Contact No. : <strong style'color:'>".$row[1]."</strong><br>" ;//contact no.
                    echo "Required Blood Group : <b>".$row[2]."</b><br>";
                    echo "".$row[3]."<br></div></div></div>";
                    echo "<br><br><br>";

                    // echo "<tr><td><center>".$row[1]."</center></td><td><center>".$row[6]."</center></td><td><center>".$row[3]."</center></td><td><center>
                    // ".$row[8]."</center></td></tr>";
          
                }
          
            }
            else{

                echo "<center>NO data availbale.";
          





?>
</table>
</div>
      </div>
    </div>
</center>
</div>
    <?php
}



if(isset($_POST['post']))
{

  if(!empty($_POST['rbgrp']) && !empty($_POST['text']))
  {
    //echo "**************************************************************";

    $rbgrp = $_POST['rbgrp'];
    $rtext = $_POST['text'];

    $rbgrp = stripslashes($rbgrp);
    $rtext = stripslashes($rtext);

    $rbgrp = mysql_real_escape_string($rbgrp);
    $rtext = mysql_real_escape_string($rtext);

    
    
    // $login_session = $_SESSION['login_user'];
    // $login_uname = $_SESSION['login_uname'];

    //echo "$login_uname".$rbgrp."$rtext".$true;
    $rpost_query = "INSERT INTO `post` (contact ,rbgrp,rtext,complete) VALUES ('$login_session','$rbgrp','$rtext','$true')" ;
    $r = mysql_query($rpost_query);
    

    //header("location:'AEbbank.php'");
    //<!-- window.location.href='AEbbank.php'; -->
    
 //   $count = mysql_num_rows($r);
    ?>

    <meta http-equiv="refresh" content="5" >
    <meta http-equiv="refresh" content="5" >
<?php
  }
  else{
    echo "Fill all data.";
  }
}




}
else 
{


echo "Please login to access this list.";
    ?>
    <a href="login_form.php">Login</a>

    <?php
}

?>


</table>
</div>
<br>
<br>
<br>
  <form method="post">
    <table>
      <tr><label>Required Blood Group:</label>
        <select name="rbgrp" required>
          <option value="a+" required>A+</option>
          <option value="a-" required>A-</option>
          <option value="ab+" required>AB+</option>
          <option value="ab-" required>AB-</option>
          <option value="b-" required>B-</option>
          <option value="b+" required>B+</option>
          <option value="o-" required>O-</option>
          <option value="o+" required>O+</option>
          </select>
      </tr>
      <tr><label>Request Text</label>
        <input type="text" name="text" placeholder="Enter Your request text" required></tr>
    </table>
    <button type="submit" class="btn btn-success" name="post" > Post </button>
  </form>


<?php include('footer.php'); ?>
<script>
function reload_page() {
    location.reload();
}
</script>