<?php 

 	session_start();
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirmpassword=$_POST['confirm_password'];

   if($password != $confirmpassword)
   {
  
   	$_SESSION['error_msg']="Password didn't match!";
   	header("Location: registration.php");
   }
   else{

   $conn=mysqli_connect('localhost','root','dhruba0004','blog');

     $sql1="SELECT * from users where email='$email'";

   $result=mysqli_query($conn, $sql1);

   $rowcount=mysqli_num_rows($result);

     if($rowcount==1)
   {
  
   	 $_SESSION['error_msg']="Account already exists!";
   	 header("Location: registration.php");
   }
   else{

   $sql="INSERT INTO users values(NULL,'$name','$email','$password')";

   if(mysqli_query($conn,$sql))
   {
   
        $_SESSION['regi_msg']=" Please login!";
        header("Location: login.php");
   }
}

}
   ?>