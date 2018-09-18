
<?php
     session_start();
    if (isset($_SESSION['uid']))
    {
           header('location:admin/admindash.php');   
    }
  
      
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/main.css" type="text/css" rel="stylesheet"/>
<style>
body {font-family: Arial, Helvetica, sans-serif;  background-color:lightgreen;}
form {border: 3px  double #f1f1f1 ; margin-left:400px; width:500px;}

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
  <li><a href="../index.php">Result Portal</a></li>
  <li><a href="../login.php">Admin Portal</a></li>
  <li><a herf="#">Take Exam</a></li>
<li><a href="../study.php">Study</a></li>
        
</ul>
<h1>AngularJS History</h1>
<p>AngularJS version 1.0 was released in 2012.

Miško Hevery, a Google employee, started to work with AngularJS in 2009.

The idea turned out very well, and the project is now officially supported by Google.</p>
<br>
    <h1>AngularJS Introduction</h1>
    <p>AngularJS is a JavaScript framework. It can be added to an HTML page with a script tag.

AngularJS EXTENDS HTML attributes with Directives, and binds data to HTML with Expressions.</p>
    


</body>
</html>

<?php
include('../dbcon.php');
if (isset($_POST['login']))
{
    $username = $_POST['uname'];
    $userpassword = $_POST['psw'];
    $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$userpassword'; ";
    $run = mysqli_query($con, $qry);
    $row = mysqli_num_rows($run);
    if ($row<1)
    {
        ?>
        <script>
            alert('username && password not match !!!');
            window.open('login.php','_self');
            </script>
<?php
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        $_SESSION['uid'] = $id;
        header('location:admin/admindash.php');
        
    }
}










