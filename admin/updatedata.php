<?php

    include('../dbcon.php');
    $sroll = $_POST['ssroll'];
    $sname = $_POST['ssname'];
    $scity = $_POST['sscity'];
    $scnumber = $_POST['ssmob']; 
    $sstan = $_POST['ssstan'];
    $sid = $_POST['ssid'];
     
    $imagename= $_FILES['ssimg']['name'];
    $tempname= $_FILES['ssimg']['tmp_name'];
   
    move_uploaded_file($tempname, "../img/$imagename");
  
    
    $qry="UPDATE `student` SET  `rollno` = '$sroll', `name` = '$sname', `city` = '$scity', `pcont` = '$sstan', `standard` = '$sstan' WHERE `student`.`id` = $sid;";
    $run = mysqli_query($con, $qry);
    if ($run == true)
    {
      ?>
        <script>
            alert('Student Information Change !!!');
           window.open('updateform.php?sid=<?php echo $sid; ?>','_self');
            </script>
<?php

    }
?>