<?php 

session_start();

if(!isset($_SESSION['login']))
{
 header("Location: login.php");
  die();
}
      $id=$_GET['id'];
      
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
    $sql="UPDATE students SET Name='$name',`Father's_name`='$fathername',`Mother's_name`='$mothername',Address='$address',Department='$Department' ,Year='$year', `Phone Number`='$Phone_number',Email='$email',`Date of birth`='$Date_of_birth' where id=$id";

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