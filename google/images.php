<html>
<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Result Found</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .result{
            
             margin-left:10%;
        margin-right:25%;
        margin-top: :10px;
        }
        
           </style>
</head>
    <body>
      <div class="container-fluid">
          <?php
       $a=$_GET['id'];
          include("../dbcon.php");
          $qry="select * from website where site_key like '%$s_search%' ";
                $data=mysqli_query($gog , $qry);
          
                $file_path = 'img/';
            while($row = mysqli_fetch_assoc( $data ))
            {
               $src = $file_path.$row['site_img'];
               echo "<a href='.$src.' download='.$src.'><img align='left' src=".$src." height='200'style='margin-top:15px;' ></a>";
                  }
          ?>
          
       </div>
         
            
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>