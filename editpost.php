
<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>My Post</title>
  <script type="text/javascript">
  function delete_id(id)
  {
   if(confirm('Sure to Delete ?'))
   {
    window.location.href='editpost.php?delete_id='+id;
   }
  }
  </script>
</head>

<body>

</body>
</html>
 
      <?php

      if(isset($_GET['delete_id']))
      {
       $id = $_GET['delete_id'];
       echo " id :".$id;
       $sql_query="DELETE FROM post WHERE id='$id'";
       mysql_query($sql_query);
       header("Location: $_SERVER[PHP_SELF]");
      }
       
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
  <div class="jumbotron">
      <div class="container-fluid">
        <h2> My POST</h2>
        <hr size="2" width="80">
        <br>
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

$post_query="SELECT * FROM `post` where complete='$true' and contact='$login_session' ORDER BY id DESC";
        $result_set=mysql_query($post_query);
        $count = mysql_num_rows($result_set);

        

            if($count != 0)
            {



      ?>
                
      <div class="container">
        <table class="table table-striped">
        <!-- <tr><th><center> Name </center></th> <th><center> City </center></th> <th><center> Blood Group </center></th>
        <th> <center>Contact No.</center></th></tr> -->
      <?php


                // $row=mysql_fetch_row($result_set);
                // $false = false;
                // function remove_post()
                //   {
                // //     $false = false;
                // mysql_query("UPDATE `post` SET complete='0' where rbgrp='$row[2]' and rtext='$row[3]' and contact='$login_session'");
                    
                //   }
                while($row=mysql_fetch_row($result_set))
                {

                    $var = $row[1];
                    $pname = mysql_fetch_row(mysql_query("SELECT name FROM `reg_user` WHERE contact='$var'"));

                    $_SESSION['post_user'] = $pname[0];//user name
                    $_SESSION['post_contact'] = $row[1];//contact no
                    $_SESSION['post_bloodGroup'] = $row[2];//blood group
                    $_SESSION['post_text'] = $row[3];//text
                    //echo "<a href='removePost.php'>remove</a>";
                    
                    //echo " id :".$row[0];
                    echo "<div class='col-lg-4 col-lg-offset-4'>
              <div class='panel panel-default'>
              <div class='panel-heading'>
              <strong>Name : ".$pname[0]."</strong>
              </div>
              <div class='panel-body'>";
                    echo "Contact No. : <strong style'color:'>".$row[1]."</strong><br>" ;//contact no.
                    echo "Required Blood Group : <b>".$row[2]."</b><br>"; ?>

                  <?php  echo "".$row[3]."</div>";  ?>
 <a href="javascript:delete_id('<?php echo $row[0]; ?>')"><button>Remove</button></a></div></div>

                   
                    <!-- <button action="removePost.php">Remove</button> -->

                    


                    <br><br><br>
                    <?php
                    // echo "<tr><td><center>".$row[1]."</center></td><td><center>".$row[6]."</center></td><td><center>".$row[3]."</center></td><td><center>
                    // ".$row[8]."</center></td></tr>";
          
                  
                }
                
          
            }
            else{

                echo "<center>NO data availbale.";
          





?>


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
    echo "**************************************************************";

    $rbgrp = $_POST['rbgrp'];
    $rtext = $_POST['text'];

    $rbgrp = stripslashes($rbgrp);
    $rtext = stripslashes($rtext);

    $rbgrp = mysql_real_escape_string($rbgrp);
    $rtext = mysql_real_escape_string($rtext);

    
    
    // $login_session = $_SESSION['login_user'];
    // $login_uname = $_SESSION['login_uname'];

    echo "$login_uname".$rbgrp."$rtext".$true;
    $rpost_query = "INSERT INTO `post` (contact ,rbgrp,rtext,complete) VALUES ('$login_session','$rbgrp','$rtext','$true')" ;
    $r = mysql_query($rpost_query);
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
<div align="center">
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
</div>


<?php include('footer.php'); ?>
<script>
function reload_page() {
    location.reload();
}
</script>