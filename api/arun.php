<?php
$s=file_get_contents("http://192.168.0.103:8080/OrhWebservice/rest/login/loginDetails/cris@756/cris@567");

$response = json_decode($s, true);


?>
<html>
<head>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Result Found</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body> <table>
    <th>Master Entry</th>
    <?php
    for($i=0; $i<count($response); $i++)
    {
       ?>
      <tr><?php print_r($response[$i]['functionLink']); ?></tr>
    <hr/>
        <?php
 echo "<br/>";
 
           ?>
      
   
    
    </table>
    
    <?php
    
        }

    
    ?>
    
   
    
    <table>
    <th>User Management</th>
    <?php
    for($i=0; $i<count($response); $i++)
    {
       ?>
      <tr><?php print_r($response[$i]['function']); ?></tr>
        <hr/>
        <?php
 echo "<br/>";
 
           ?>
      
   
    
    </table>
    
    <?php
    
        }


    ?>
   
    <table>
    <th>Enquiry</th>
    <?php
    for($i=0; $i<count($response); $i++)
    {
       ?>
      <tr><?php print_r($response[$i]['functionLink']); ?></tr>
        <hr/>
        <?php
 echo "<br/>";
 
           ?>
      
   
    
    </table>
    
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
