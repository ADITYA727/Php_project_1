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

    <br>

<form method="post" action="updatestudent.php">

 
   <table border="1">
         <tr>
       <td><input type="number" style="margin-right:40px;" name="standard" placeholder="rollno....."  required></td>
             <td><input type="text" name="name" placeholder="Full Name....." required></td>
              <td > <input type="submit" value="Search" style="margin-left:150px;" name="submit"></td>
       </tr>
      </table>

</form>
<table border="1">
<tr>
    <th>No.</th>
    <th>Name</th>
    <th>Roll Number</th>
    <th>Image</th>
    <th>Edit</th>
    </tr>

<?php
    if(isset($_POST['submit']))
    {
        
    }
include('../dbcon.php');
$standard = $_POST['standard'];
$name = $_POST['name'];
$qry = "SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%' ";
$run = mysqli_query($con, $qry);
$row = mysqli_num_rows($run);
if($row<1)
{
    echo"<tr><td colspan='5'>No Record Found</td></tr>";
    
}
else
{
    $count=0;
    while($data=mysqli_fetch_assoc($run))
    {
        $count++;
      ?><tr>
    <td><?php echo $count; ?></td>
   
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['rollno']; ?>.</td>
     <td><img src="../img/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
    <td><a href="updateform.php?sid=<?php echo $data['id'];  ?>">Edit</a></td>
  
    </tr>  <?php
    }
   
    
}




?>
</table>