<?php

include_once("config.php");
print_r($_POST);
//exit;
if(isset($_POST['done'])) {
    $MovieName = $_POST['MovieName'];
    $Language = $_POST['Language'];
    $Budget = $_POST['Budget'];
    $Type = $_POST['Type'];
    try{
        echo $q =  "INSERT INTO movies(MovieName,Language,Budget,Type) VALUES('$MovieName','$Language','$Budget',' $Type')";
        $result = mysqli_query($mysqli,$q);
    }
   catch(Exception $e) {
       print_r($e);exit;

   }
}
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

    <div class="container">

    <form  method="post" >
       <div class="card">
           <div class="card-header bg-dark">
              <h4 class="text-white text-center">Insert operation</h4>
           </div>
           <br/>

           <div class="form-group-row">
           <label >MovieName :</label>
            <input type="text"  class="form-control" name="MovieName" > <br>
           </div>
           <br/>
            <div class="form-group-row ">
            <label for="Language">Language :</label>
            <br/>
            <div class="row-sm-5">
                <select name="Language" class="form-control" >
                <option selected="">Select Language</option>
                <option>English</option>
                <option>Hindi</option>
                <option>Marathi</option>
                </select>
            </div>
            <br/>
            <div class="form-group-row">
                <label >Budget :</label>
                <br/>
                <input type="text"  class="form-control" name="Budget"> <br>
           </div>
           <br/>
            <div class="form-group-row">
                <label for="Type">Type :</label>
                <br/>
                <select name="Type" class="form-control" >
                    <option>3D</option>
                    <option>2D</option>
                </select>
            </div>
            <br/>
          
        <div class="col">
            <input type="submit" class="btn btn-primary mb-2" name="done" value="Submit">
        </div>
        

       </div>
    </form>
    </div>
</body>
</html>