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
include('../dbcon.php');

$uid=$_GET['sid'];
$qry="SELECT * FROM `student` WHERE `id`='$uid' ";
$run = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($run);

?>


<form method="post" action="updatedata.php" enctype="multipart/form-data">
 
   
   <table border="1">
         <tr>
       <td>Enter Roll number:</td> <td><input type="text" name="ssroll" value="<?php echo $data['rollno']; ?>"  required></td>
       </tr>
         <tr>
       <td>Full Name:</td> <td><input type="text" name="ssname" value="<?php echo $data['name']; ?>" required></td>
       </tr>
         <tr>
       <td>City:</td> <td><input type="text" name="sscity" value="<?php echo $data['city']; ?>" required></td>
       </tr>
         <tr>
       <td>Contact Number:</td> <td><input type="text" name="ssmob" value="<?php echo $data['pcont']; ?>" required></td>
       </tr>
     
         <tr>
           <br>
           <td>Select Standard:</td>
       <td>
           <input type="number" name="ssstan" value="<?php echo $data['standard']; ?>" style="margin-right:35px;"  required>
           </td>
      </tr>
             <tr>
       <td>Student Inmage:</td> <td><input type="file" name="ssimg"  style="margin-left:60px;" required></td>
       </tr>
    <tr>
           <td colspan="2">
               <br><br>
    <input type="hidden" value="<?php echo $data['id']; ?>" style="margin-left:150px;" name="ssid">
    <input type="submit" value="Check Result" style="margin-left:150px;" name="submit">
       </td>
      </tr>
      </table>
     


</form>

</body>
</html>



