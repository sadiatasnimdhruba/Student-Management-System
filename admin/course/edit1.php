<?php 

session_start();

$url="http://localhost/crud/";
if(!isset($_SESSION['login']))
{
 header("Location: http://localhost/crud/login&registration/login.php");
  die();
}
      $id=$_GET['id'];
      
    $course_code=$_POST['course_code'];
    $title=$_POST['title'];
    $department=$_POST['department'];
    $teachers=$_POST['teachers'];
    $semester=$_POST['semester'];
    $books=$_POST['books'];


    $conn=mysqli_connect('localhost','root','dhruba0004','blog');

    $sql="UPDATE course SET course_code='$course_code',title='$title',department='$department',teachers='$teachers',semester='$semester',books='$books' where id='$id' ";


    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success']=1;
    	header("Location: view.php?id=".$id);
        
    }
    else
    {
         $_SESSION['error']=1;
    	header("Location: edit.php?id=".$id);
    }
?>