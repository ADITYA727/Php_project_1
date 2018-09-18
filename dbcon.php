<?php

$con = mysqli_connect('localhost','root','','sms');
$gog = mysqli_connect('localhost','root','','google');

if ($con == false)
{
    echo"coneection fail";
    
}
if ($gog == false)
{
    echo"coneection fail";
    
}

