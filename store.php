<?php 
session_start();

if(!isset($_SESSION['login']))
{
 header("Location: login.php");
  die();
}
    $id=$_POST['id'];
    $name=$_POST['name'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $address=$_POST['address'];
   $Department=$_POST['department'];
   $year=$_POST['year'];
    $Phone_number=$_POST['phone_number'];
    $email=$_POST['email'];
    $Date_of_birth=$_POST['date_of_birth'];


    $conn=mysqli_connect('localhost','root','dhruba0004','blog');
    $sql="INSERT INTO students values('$id','$name','$fathername','$mothername','$address','$Department','$year','$Phone_number','$email','$Date_of_birth')";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success']=1;
        header("Location: index.php");
    }
    else
    {
        $_SESSION['error']=1;
        header("Location: insert.php?");

    }
?>