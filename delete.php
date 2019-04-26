<?php
include("config.php");
 $Id = $_GET['Id'];

//$result = mysqli_query($mysqli, "DELETE FROM users WHERE Id=$Id");
 try{
        echo $q = "DELETE FROM movies WHERE Id=$Id";
        $result = mysqli_query($mysqli,$q);
    }
   catch(Exception $e) {
       print_r($e);exit;

   }
   header("Location:index.php");
?>