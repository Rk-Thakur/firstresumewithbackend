<?php
$conn=mysqli_connect("localhost","root","","first");
if($conn){
   // echo("connected sucessfully");
}else{
    echo("Sorry You are not connected to database").mysqli_error($conn);
}
