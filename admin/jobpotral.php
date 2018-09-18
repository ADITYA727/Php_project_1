<?php
  session_start();
 if (isset($_SESSION['uid']))
 {
     echo "" ;
     
 }
else
{
    header('location:../login.php');
}

?>
<?php
include('header.php');
include('titlehead.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add job</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Job</h2>
  <form class="form-horizontal" action="jobpotral.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Company Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="jname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Title:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jtitle">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Skills:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jskills">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Salary:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jsalary">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Company Mobile Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jcontact">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Company Location:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jlocation">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Created Date:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jdate">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">HR Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jhr">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Experience</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="jexeperience">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
<?php 
if(isset($_POST['submit']))
{
    
include('../dbcon.php');
$name=$_POST['jname'];
$title=$_POST['jtitle'];
$skill=$_POST['jskills'];
$salary=$_POST['jsalary'];
$contact=$_POST['jcontact'];
$location=$_POST['jlocation'];
$date=$_POST['jdate'];
$hrn=$_POST['jhr'];
$exepe=$_POST['jexeperience'];
    
$qry="INSERT INTO `job`(`id`, `jname`, `jjob`, `jcity`, `jcontact`, `jexperience`, `jsalary`, `jcreated`,`jskill`,`jhr`)VALUES('$name','$title','$location','$contact','$exepe','$salary','$date','$skill','$hrn')";
    $run=mysqli_query($con, $qry);
    if($run==true)
    {
        ?>
<script>
alert("Job Add Sucessfully");
</script>

<?php  
        }
    }


?>
