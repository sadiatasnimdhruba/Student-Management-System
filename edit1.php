<?php 

session_start();

if(!isset($_SESSION['login']))
{
 header("Location: login.php");
  die();
}
      $id=$_GET['id'];
    $name=$_POST['name'];
   $Department=$_POST['department'];
    $Phone_number=$_POST['phone_number'];
    $Date_of_birth=$_POST['date_of_birth'];


    $conn=mysqli_connect('localhost','root','dhruba0004','blog');
    $sql="UPDATE students SET Name='$name',Department='$Department' , `Phone Number`='$Phone_number',`Date of birth`='$Date_of_birth' where id=$id";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success']=1;
    	header("Location: view.php?id=".$id);
        
    }
    else
    {
         $_SESSION['error']=1;
    	header("Location: view.php?id=".$id);
    }
?>