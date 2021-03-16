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
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $address=$_POST['address'];
   $Department=$_POST['department'];
   $year=$_POST['year'];
    $Phone_number=$_POST['phone_number'];
     $email=$_POST['email'];
    $Date_of_birth=$_POST['date_of_birth'];


    $conn=mysqli_connect('localhost','root','dhruba0004','blog');

    $sql="UPDATE students SET Name='$name',`Father's_name`='$fathername',`Mother's_name`='$mothername',Address='$address',Department='$Department' ,Year='$year', `Phone Number`='$Phone_number',Email='$email',`Date of birth`='$Date_of_birth'";

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

    $sql.="where id='$id'";

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