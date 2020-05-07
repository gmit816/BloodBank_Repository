<?php

session_start();
$text = $_SESSION['post_text'];
$bgrp = $_SESSION['post_bloodGroup'];
$contact = $_SESSION['post_contact'];
mysql_query("UPDATE `post` SET complete='0' where rbgrp='$bgrp' and rtext='$text' and contact='$contact'");

header("location: editpost.php");


?>