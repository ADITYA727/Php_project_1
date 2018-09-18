<html>
<head>
    <title>Insert Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
    <body>
        <br/>
        <a href="search.php">kk</a>
        <div class="container">
        
        <center><h2>Insert Website</h2></center>
            <br/><br/>
            <form method="post" action="study.php" enctype = "multipart/form-data" >
            <div class="form-group">
                <div class="row">
                    <label class="col-sm-2" for="stitle">Site Title</label>
                    <div class="col-sm-10">
                    
                    <input type="text" name="s_title" class="form-control" id="stitle" placeholder="Enter website title " required/>
                    </div>
                
                </div>
                </div>
               
                <br/>
                <div class="form-group">
                <div class="row">
                    <label class="col-sm-2" for="slink">Site Link</label>
                    <div class="col-sm-10">
                    
                    <input type="text" name="s_link" class="form-control" id="slink" placeholder="Enter website Link " required/>
                    </div>
                
                </div>
                </div>
                    <br/>
                    <div class="form-group">
                <div class="row">
                    <label class="col-sm-2" for="skey">Site Keyword</label>
                    <div class="col-sm-10">
                    
                    <input type="text" name="s_key" class="form-control" id="skey" placeholder="Enter website Keyword " required/>
                    </div> 
                </div>
            </div>
            <br/>
                              
                        <div class=form-group>
                <div class=row>
                    <label class="col-sm-2" for="sdes">Site Description</label>
                    <div class="col-sm-10">
                    
            <textarea name="s_des" class="form-control" id="sdes" placeholder="Enter website Descriptions" required></textarea> 
                    </div>
            </div>
            </div>
            <br/>  
                            <div class=form-group>
                <div class=row>
                    <label class="col-sm-2" for="simg">Site Image</label>
                    <div class="col-sm-10">
                     <input type="file" name="s_img" class="form-control-file" id="simg" placeholder="Enter website Keyword "  required/>
                    </div>
                    </div>
            </div>
            <br/>   
             <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                    <center>
    <input type="submit" class="btn btn-outline-success" name="submit" value="Add Website" />
                        &nbsp;&nbsp;&nbsp;
        <input type="reset" class="btn btn-outline-danger" name="cancel" value="Cancel" />
                    </center>
                    </div>
                 </div>
                    </div>
                           
         </form>
          
        </div>
        
       
        
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

<?php
include("../dbcon.php");
if(isset($_POST['submit']))
{
     $ss_title=addslashes($_POST["s_title"]);
     $ss_link=addslashes($_POST["s_link"]);
     $ss_key=addslashes($_POST["s_key"]);
     $ss_des=addslashes($_POST["s_des"]);
     $ss_imag= addslashes($_FILES['s_img']['name']);
     $temp = $_FILES['s_img']['tmp_name'];
   
    move_uploaded_file($temp, "img/$ss_imag");
    
$qry = "INSERT INTO `website`(`site_title`, `s_link`, `site_key`, `site_des`, `site_img`) VALUES ('$ss_title', '$ss_link', '$ss_key', '$ss_des' , '$ss_imag')";
        $run = mysqli_query($gog , $qry);
        if($run==true)
        {
         
        echo "<script>alert('Data Entered Successfully')</script>";

        }
      else
            {
      
       echo "<script>alert('Data not Entered Successfully')</script>";

     }       
            
        
        
        
        
    }

    


?>