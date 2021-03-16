<?php 
session_start();


$url="http://localhost/crud/";
if(!isset($_SESSION['login']))
{
 header("Location: http://localhost/crud/login&registration/login.php");
  die();
}

$rand=rand(111,9999999);

$image='uploads/'.$rand.$_FILES['image']['name'];
$upload='../uploads/'.$rand.$_FILES['image']['name'];
  
  move_uploaded_file($_FILES['image']['tmp_name'], $upload);


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
    $sql="INSERT INTO students values('$id','$name','$fathername','$mothername','$address','$Department','$year','$Phone_number','$email','$Date_of_birth','$image')";

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