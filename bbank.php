<?php include('header.php'); ?>
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
         <!-- <![endif]-->

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
      
      include "mysql_connect.php";

      $bbank_city = "Ahmedabad";
      $bbank_state = "Gujarat";
      $bbank_area = "";
     ?>
<center>
<div class="jumbotron">
      <div class="container">
        <h2>Search Blood Bank</h2>
        <!-- <form action="bbank.php" method="POST">
                
                <table <label for="tags">City</label>
                <input id="tags" type="text" name="tags" style="height: 30px;">
                <table <label for="tag">Area</label>
                <input id="tag" type="text" name="tag" style="height: 30px;">
                <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">
        </form> -->
<form  method="post" action="bbank.php" class="form-inline">
<!--action="nextpage.php"-->
<div class="form-group">
 State  <br>
 <select name="state" required>
            <?php
      //      include_once 'mysql_connect.php';
                $bbank_query="SELECT DISTINCT bstate FROM `bbank` ";
                $bbank_result=mysql_query($bbank_query);
                while($bbank_row=mysql_fetch_row($bbank_result))
                {
                ?>
              <option value= "<script language="php"> echo $bbank_row[0] ?>"><?php echo $bbank_row[0] ?></option>
                <?php
                }
            ?>
    </select></div>
    <div class="form-group">
    city<br>
    <!-- <input type = "text" name="contact"  required> -->
    <select name="city" required>
    <?php
    //include_once 'mysql_connect.php';
        $bbank_query="SELECT DISTINCT bcity FROM `bbank` ";
        $bbank_result=mysql_query($bbank_query);
        while($bbank_row=mysql_fetch_row($bbank_result))
        {
        ?>
        <option value= "<script language="php"> echo $bbank_row[0] ?>"><?php echo $bbank_row[0] ?></option>
        <?php
        }
		    ?>
    </select></div>
    <div class="form-group">
    Area <br>
     <select name="area" required>
    <?php
    //include_once 'mysql_connect.php';

        $bbank_query="SELECT DISTINCT barea FROM `bbank` ";
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
    <button type = "submit" name="btn_sub_search" class="btn btn-success"><strong>Search</strong></button>
</form>
      </div>
    </div>
</center>
  <!-- <div class="container">
  <table class="table table-striped">
  <tr><th> Blood Bank Name </th> <th> Area </th> <th> City</th></tr>
 -->
 <?php
      
      // if ($result->num_rows > 0) {
      //     // output data of each row
          
      //     while($row = $result->fetch_assoc()) {
      //        echo "<tr><td>".$row['BB_name']."</td><td>".$row['Area']."</td><td>".$row['City']."</td></tr>";
                        
      //     }
      // } else {
      //     echo "<tr><th>0 results</th></tr>";
      // }
      if(isset($_POST['btn_sub_search']))
      {
//      if(!empty(isset($_POST['area'])) && !empty(isset($_POST['city'])) && !empty(isset($_POST['state'])))
		if(isset($_POST['area']) && isset($_POST['city']) && isset($_POST['state']))
      {


        $bbank_city = $_POST['city'];
        $bbank_state = $_POST['state'];
        $bbank_area = $_POST['area'];
   
      
      // $sql = "SELECT * FROM Blood_bank_areas where City='".$_REQUEST['tags']."' AND Area='".$_REQUEST['tag']."'";
      // $result = $conn->query($sql);

      $bbank_query="SELECT * FROM `bbank` WHERE barea LIKE '$bbank_area%' and bcity LIKE '$bbank_city%' and bstate LIKE '$bbank_state%'";
   

      $bbank_result=mysql_query($bbank_query);
      $count = mysql_num_rows($bbank_result);

      

      if($count != 0)
      {

      	?>
		<div class="container">
  		<table class="table table-striped">
  		<tr><th> <center>Blood Bank Name </center></th> <th><center> Address </center></th> <th><center> Contact No.</center></th></tr>

      	<?php
      while($bbank_row=mysql_fetch_row($bbank_result))
      {

      echo "<tr><td><center>".$bbank_row[1]."</center></td><td><center>".$bbank_row[2]."</center></td><td><center>".$bbank_row[3]."</center></td></tr>";
      
      }
      
}
            else{

                echo "<center>wrong selection.Please enter valid choice.";
                ?>

                <a href="bbank.php">try other?</a></center>                
                <?php

                //header("location: bbdata_form.php"); // Redirecting To Other Page
                
            }

        
     }
    }
 ?>
</table>
</div>
</div>
<br>
<?php include('footer.php'); ?>
