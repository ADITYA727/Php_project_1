<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/main.css" type="text/css" rel="stylesheet"/>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-color: lightgreen;}
form {border: 3px solid grey ; margin-left:400px; width:500px;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}
</style>
</head>
<body>
    <ul>
  <li><a href="index.php">Result Portal</a></li>
  <li><a href="login.php">Admin Portal</a></li>
  <li><a href="#">Check Admint Card</a></li>
        <li><a href="#">Noticefication</a>li>
        <li><a href="registration.php">Registrations</a>li>
</ul>

<h2>Check Result Here...</h2>
    


<form method="post" action="index.php">
   
  
         <tr>
           <br>
          
       <td><select name="stand"   style="width:300px; height:30px; margin-left:100px;" >
  <option value="0">     ------Select--Course-------<option>
  <option value="1">1st</option>
  <option value="2">2nd</option>
  <option value="3">3rd</option>
 <option value="12">4th</option>

</select>
           </td>
      </tr>
       <tr>
           <br/>
       <td><input type="text" name="rollno" placeholder="rollno....."></td></tr>
       <br>
     
      
             <tr>
           <td colspan="2">
               <br><br>
    <input type="submit" value="Check Result" style="margin-left:150px;" name="submit">
       </td>
      </tr>
    </form>
      

</body>
</html>
<?php

if(isset($_POST['submit']))
{
include('dbcon.php');
include('function.php');
$standa = $_POST['stand'];
$rollnunber = $_POST['rollno'];

    
showdetail($standa, $rollnunber); 
        
    }


?>



