<?php 
session_start();


$url="http://localhost/crud/";
if(!isset($_SESSION['login']))
{
 header("Location: http://localhost/crud/login&registration/login.php");
  die();
}



    $course_code=$_POST['course_code'];
    $title=$_POST['title'];
    $department=$_POST['department'];
    $teachers=$_POST['teachers'];
    $semester=$_POST['semester'];
    $books=$_POST['books'];
    


    $conn=mysqli_connect('localhost','root','dhruba0004','blog');
    $sql="INSERT INTO course values(NULL,'$course_code','$title','$department','$teachers','$semester','$books')";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success']=1;
        header("Location: course.php");
    }
    else
    {
        $_SESSION['error']=1;
        header("Location: insert.php");

    }
?>