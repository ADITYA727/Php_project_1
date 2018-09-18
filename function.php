<?php

function showdetail($standa, $rollnunber )
{
include('dbcon.php');
$qry = "SELECT * FROM `student` WHERE `rollno`='$rollnunber' AND `standard`='$standa' ";    
$run=mysqli_query($con, $qry);  
    $row = mysqli_num_rows($run);
        if ($row>0)
        {
            $data=mysqli_fetch_assoc($run);
            ?>
<br><br>
<table border="1px" style="margin-left:400px;">
<tr><td>Student Name:</td><td><?php echo $data['name']; ?></td></tr>
<tr><td>Standard:</td><td><?php echo $data['standard']; ?></td></tr>
<tr><td>Location:</td><td><?php echo $data['city']; ?></td></tr>
<tr><td>Roll Number</td><td><?php echo $data['rollno']; ?></td></tr>
<tr><td>Contact Number</td><td><?php echo $data['pcont']; ?></td></tr>
<tr><td>Your Result Here...</td>
    <td><img src="img/34044_3881403_724604.jpg" height="200px" width="300px" /></td></tr>
    </table>
<table><tr><td></td></tr></table>





<?php
            
        }
    else
    {
      echo "<script>alert('Invalid Student');</script>";  
        
    }
    
    
}



?>