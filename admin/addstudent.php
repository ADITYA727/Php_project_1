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

<form method="post" action="addstudent.php" enctype="multipart/form-data">
 
   
   <table border="1">
         <tr>
       <td>Enter Roll number:</td> <td><input type="text" name="ssroll" placeholder="rollno....."  required></td>
       </tr>
         <tr>
       <td>Full Name:</td> <td><input type="text" name="ssname" placeholder="Full Name....." required></td>
       </tr>
         <tr>
       <td>City:</td> <td><input type="text" name="sscity" placeholder="City...." required></td>
       </tr>
         <tr>
       <td>Contact Number:</td> <td><input type="text" name="ssmob" placeholder="Contact Number...." required></td>
       </tr>
     
         <tr>
           <br>
           <td>Select Standard:</td>
       <td>
           <input type="number" name="ssstan" placeholder="Standard....." style="margin-right:35px;"  required>
           </td>
      </tr>
             <tr>
       <td>Student Inmage:</td> <td><input type="file" name="ssimg"  style="margin-left:60px;" required></td>
       </tr>
    <tr>
           <td colspan="2">
               <br><br>
    <input type="submit" value="Check Result" style="margin-left:150px;" name="submit">
       </td>
      </tr>
      </table>
      </fieldset>


</form>
</div>


</div>
</body>
</html>
<?php

if (isset($_POST['submit']))
{
    include('../dbcon.php');
    $sroll = $_POST['ssroll'];
    $sname = $_POST['ssname'];
    $scity = $_POST['sscity'];
    $scnumber = $_POST['ssmob']; 
    $sstan = $_POST['ssstan'];
     
    $imagename= $_FILES['ssimg']['name'];
    $tempname= $_FILES['ssimg']['tmp_name'];
   
    move_uploaded_file($tempname, "../img/$imagename");
  

    
    $qry="INSERT INTO `student`(`rollno`,`name`,`city`,`pcont`,`standard`, `image`) 
    VALUES ('$sroll','$sname','$scity','$scnumber','$sstan', '$imagename')";
    $run = mysqli_query($con, $qry);
    if ($run == true)
    {
        ?>
<script>
alert('Student Informtion ADD');
</script>
<?php
    }
}
?>