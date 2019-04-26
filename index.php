<?php

include_once("config.php");

$q="SELECT * FROM movies";

$result = mysqli_query($mysqli,$q ); 
?>
 
<html >
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <a  class="text-right" href="insert.php">Insert Data</a><br/><br/>
 <div class="container">
 <table class="table table-hover">
 <thead class="thead-dark">
    <tr>
      <td scope="col">#</td>
      <td scope="col">MovieName</td>
      <td scope="col">Language</td>
      <td scope="col">Budget</td>
      <td scope="col">Type</td>
      <td scope="col">Actions</td>
    </tr>

  </thead>
  <?php 
        
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['Id']."</td>";
            echo "<td>".$res['MovieName']."</td>";
            echo "<td>".$res['Language']."</td>";
            echo "<td>".$res['Budget']."</td>";   
            echo "<td>".$res['Type']."</td>";   
            echo "<td ><a href=\"update.php?Id=$res[Id]\">Update</a> | <a href=\"delete.php?Id=$res[Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
        }
        ?>
</table>

 </div>
 

</body>
</html>