<?php 
session_start();

if(!isset($_SESSION['login']))
{
 header("Location: login.php");
  die();
}
    $name=$_POST['name'];
   $Department=$_POST['department'];
    $Phone_number=$_POST['phone_number'];
    $Date_of_birth=$_POST['date_of_birth'];


    $conn=mysqli_connect('localhost','root','dhruba0004','blog');
    $sql="INSERT INTO students values(NULL,'$name','$Department','$Phone_number','$Date_of_birth')";

    if(mysqli_query($conn,$sql))
    {
    	$_SESSION['success']=1;
    	header("Location: index.php?");
    }
    else
    {
    	$_SESSION['error']=1;
    	header("Location: index.php?");
    }
?>