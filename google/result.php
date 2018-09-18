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
        <form method="get" action="result.php" >
            
            <div class="row" style="background:#f2f2f2;">
            <div class="col-sm-1">
                <a href="search.php" ><img src="img/g.png" height="60px"></a>
                </div>
                <div class="col-sm-6" style="margin-left:13px;" >
                <div class="input-group" style="margin-top:10px;">
                    <input type="text" class="form-control" name="search">
                    <span class="input-group-btn">
                    <input class="btn btn-secondary" type="submit" name="submit" value="Go">
                    </span>
                    
                    </div>
                
                </div>
            </div>
          
          </form>
        </div>
        <div class="result">
        <table>
        <tr>
            
            <?php
           
         
            include('../dbcon.php');
            if(isset($_GET["submit"]))
            {
                $s_search=$_GET['search'];
                if($s_search=="")
                {
                    echo "<center><b>enter some text please</b></center>";
                    exit();
                    
                }
                $qry="select * from website where site_key like '%$s_search%' limit 0, 5";
                $data=mysqli_query($gog , $qry);
                $run=mysqli_num_rows($data);
                    if($run<0)
                    {
                     echo "<h2><b>oops Data not found</b></h2>" ;  
                       exit(); 
                    }
                
                echo "<font size='+1' color='#1a1aff' margin-right=10px > images for $s_search</font>";
                echo "<br/>";
                $file_path = 'img/';
            while($row = mysqli_fetch_assoc( $data ))
            {
               $src = $file_path.$row['site_img'];
               echo "<td><table style='margin-top:10px;' ><tr><td><a target='_blank' href='images.php?id=$s_search'><font size='+1' color='#1a1aff' margin-right=10px ><img align='left' src=".$src." height='50' ></td></tr></table></td> ";
                  }
          
                
            }
            ?>
            </tr>
        </table>
            
            <?php  
            
             echo "<a target='_blank' href='images.php?id=$s_search'><font size='+1' color='#1a1aff' margin-right=10px >more images for $s_search</font></a>";
            echo "<hr/>" ;
            $sql="select * from website where site_key like '%$s_search%'";
                $getdata = mysqli_query($gog , $sql);
    
             while($getrow = mysqli_fetch_assoc( $getdata ))
            {
              echo "<a href=".$getrow['s_link']."><font size='4' color='#1a1aff'>".$getrow['site_title']."</font></a>";
             echo "<p size='+1'>".$getrow['site_des']."</p>";
                  echo "<hr/>" ;
             }
            ?>
       </div>
         
            
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>