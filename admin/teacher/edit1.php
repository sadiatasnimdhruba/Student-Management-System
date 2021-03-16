<?php 

session_start();

$url="http://localhost/crud/";
if(!isset($_SESSION['login']))
{
 header("Location: http://localhost/crud/login&registration/login.php");
  die();
}
      $id=$_GET['id'];
      
      $image='';
    $name=$_POST['name'];
    $department=$_POST['department'];
    $post=$_POST['post'];
    $birthdate=$_POST['birthdate'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $skills=$_POST['skills'];


    $conn=mysqli_connect('localhost','root','dhruba0004','blog');

    $sql="UPDATE teachers SET name='$name',department='$department',post='$post',birthdate='$birthdate',address='$address', phone='$phone',email='$email'";

    if(!empty($_FILES['image']['name']))
{
  $rand=rand(111,9999999);

$image='uploads/'.$rand.$_FILES['image']['name'];
$upload='../uploads/'.$rand.$_FILES['image']['name'];
  
  move_uploaded_file($_FILES['image']['tmp_name'], $upload);

   $sql.= ", image = '$image' ";
  if(!empty($std['image']))
  {
    unlink('../'.$std['image']);
  }
}

    $sql.=", skills='$skills' where id='$id'";

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