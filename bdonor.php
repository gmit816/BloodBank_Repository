<?php include('header.php'); ?>
 
      <?php
 

      //*****************************************************************************************
      // $servername = "localhost";
      // $username = "root";
      // $password = "";
      // $dbname = "Blood_bank";

      // // Create connection
      // $conn = new mysqli($servername, $username, $password, $dbname);
      // // Check connection
      // if ($conn->connect_error) {
      //     die("Connection failed: " . $conn->connect_error);
      // } 
      //*****************************************************************************************
 

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
        <h2>Search Blood donor</h2>
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

?>

<form method="post" action="bdonor.php" class="form-inline" >
<!--action="nextpage.php"-->
<div class="form-group">
 <label>Blood Group </label><br>
	     <select name="bgroup" required>
          <option value="a+" required>A+</option>
          <option value="a-" required>A-</option>
          <option value="ab+" required>AB+</option>
          <option value="ab-" required>AB-</option>
          <option value="b-" required>B-</option>
          <option value="b+" required>B+</option>
          <option value="o-" required>O-</option>
          <option value="o-" required>O+</option>
          </select>     
          </div>
<div class="form-group">
            <label>State</label><br>

 <select name="state" required>
            <?php
      //      include_once 'mysql_connect.php';

                $bbank_query="SELECT DISTINCT state FROM `reg_user` ";
                $bbank_result=mysql_query($bbank_query);



                while($bbank_row=mysql_fetch_row($bbank_result))
                {

                ?>
                
                <option value= "<script language="php"> echo $bbank_row[0] ?>"><?php echo $bbank_row[0] ?></option>
                

                
                <?php
                }

            ?>
    
    </select>
    </div>
    <div class="form-group">
<label>City</label><br>
    <!-- <input type = "text" name="contact"  required> -->
      
    <select name="city" required>
    <?php
    //include_once 'mysql_connect.php';

        $bbank_query="SELECT DISTINCT city FROM `reg_user` ";
        $bbank_result=mysql_query($bbank_query);



        while($bbank_row=mysql_fetch_row($bbank_result))
        {

        ?>
        
        <option value= "<script language="php"> echo $bbank_row[0] ?>"><?php echo $bbank_row[0] ?></option>
        

        
        <?php
        }

    ?>
    
    </select>
    </div>
    <div class="form-group">
<label> Area</label><br>
      <select name="area" required>
    <?php
    //include_once 'mysql_connect.php';

        $bbank_query="SELECT DISTINCT area FROM `reg_user` ";
        $bbank_result=mysql_query($bbank_query);



        while($bbank_row=mysql_fetch_row($bbank_result))
        {

        ?>
        
        <option value="<script language="php"> echo $bbank_row[0] </script>" ><?php echo $bbank_row[0]; ?></option>
        

        
        <?php
        }

    ?>
    
    </select>
    </div>
    <br><br>
<label>    <button type = "submit" name="btn_search" class="btn btn-success" ><strong>Search</strong></button></label>
	  </div>
</form>
      </div>
    </div>
</center>
</div>
    <?php
}

else 
{


echo "Please login to access this list.";
    ?>
    <a href="login_form.php">Login</a>

    <?php
}

?>




<!-- </div>
  <div class="container">
  <table class="table table-striped">
  <tr><th> Name </th> <th> City </th> <th> Blood Group </th><th> Contact No.</th></tr> -->
<?php
      
      // if ($result->num_rows > 0) {
      //     // output data of each row
          
      //     while($row = $result->fetch_assoc()) {
      //        echo "<tr><td>".$row['BB_name']."</td><td>".$row['Area']."</td><td>".$row['City']."</td></tr>";
                        
      //     }
      // } else {
      //     echo "<tr><th>0 results</th></tr>";
      // }
      



        $bgrp = "a+";
        $city = "";
        $state = "";
        $area = "";

      if(isset($_POST['btn_search']))
      {

          //if(empty(isset($_POST['bgroup'])) || empty(isset($_POST['area'])) || empty(isset($_POST['city'])) ||
		  //empty(isset($_POST['state'])))
		  
		  if(isset($_POST['bgroup']) || isset($_POST['area']) || isset($_POST['city']) ||
		  isset($_POST['state']))

          //if(1==1)
          {

            $bgrp = $_POST['bgroup'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $area = $_POST['area'];




        include_once 'mysql_connect.php';
        
        //$sql_query="SELECT * FROM `".$bgrp."` WHERE area LIKE '$area%' and city LIKE '$city%' and state LIKE '$state%'";
        $sql_query="SELECT * FROM `reg_user` WHERE area LIKE '$area' and city LIKE '$city' and state LIKE '$state' and bgroup ='$bgrp' and 
        age >=18";
        $result_set=mysql_query($sql_query);
        $count = mysql_num_rows($result_set);

				

            if($count != 0)
            {


			?>
    		        
 			<div class="container">
  			<table class="table table-striped">
  			<tr><th><center> Name </center></th> <th><center> City </center></th> <th><center> Blood Group </center></th>
  			<th> <center>Contact No.</center></th></tr>
			<?php
                while($row=mysql_fetch_row($result_set))
                {

                    echo "<tr><td><center>".$row[1]."</center></td><td><center>".$row[6]."</center></td><td><center>".$row[10]."</center></td>
                    <td><center>".$row[8]."</center></td></tr>";
          
                }
          
            }
            else{

                echo "<center>NO data availbale.";
           ?>

           <a href="bdonor.php">try other?</a></center>
           <?php

                //header("location: bbdata_form.php"); // Redirecting To Other Page
                
            }

        
     }
    }
 ?>
</table>
</div>
<br>
<?php include('footer.php'); ?>