
<?php

session_start();

if(!isset($_SESSION['login']))
{
 header("Location: login.php");
  die();
}
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','dhruba0004','blog');
if($conn)
{
  $sql="DELETE FROM students where id=$id";
  if(mysqli_query($conn,$sql))
    {
      header("Location: index.php")  ;

    }

}

?>