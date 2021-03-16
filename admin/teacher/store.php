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
    $department=$_POST['department'];
    $post=$_POST['post'];
    $birthdate=$_POST['birthdate'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $skills=$_POST['skills'];


    $conn=mysqli_connect('localhost','root','dhruba0004','blog');
    $sql="INSERT INTO teachers values('$id','$name','$department','$post','$birthdate','$address','$phone','$email','$image','$skills')";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success']=1;
        header("Location: teacher.php");
    }
    else
    {
        $_SESSION['error']=1;
        header("Location: insert.php");

    }
?>