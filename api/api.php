<?php
$s=file_get_contents("https://steppschuh-json-porn-v1.p.mashape.com/");

$response = json_decode($s, true);
   

?>
<html>
<head>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Result Found</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>  
    
    <br/>
    <br/>
    
     <div class="input-group" style="margin-top:10px;">
                    <input type="text" class="form-control" name="search" style="width:60%; margin-top:10px;">
                    <span class="input-group-btn">
                    <input class="btn btn-secondary" type="submit" name="ssubmit" value="Go">
                    </span>
                    
                    </div>
    <br/>
     <?php
    
    for($i=0; $i<count($response); $i++)
{

 ?>
            <div class="container">
            <div class="row">
                <div class="col-sm-3">
                <?php echo "<img src=".$response[$i]['image_url']." height='100' />"; ?>
                </div>
                <div class="col-sm-3">
                <?php print_r($response[$i]['name']); ?></div>
                <div class="col-sm-3">
                <p><?php print_r($response[$i]['description']); ?></p></div>
                </div>
           
                </div>
    <hr/>
            
          <?php 
    }
    ?>  
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    </body>
</html>
