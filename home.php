<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="style.css">-->

    <title>Hello, world!</title>
    <style>
    	  header.masthead {
    padding-top: 10rem;
    padding-bottom: calc(10rem - 4.5rem);
    background:  url(home1.png);
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
    
}
.heading
{
	font-size: 70px;
	
	margin-bottom: 120px;
}
.intro
{
	font-size:23px;
	
	color:#032947;
	font-weight: 600;
}
.ri
{
	text-align: center;
}
h2
{
	font-size: 40px;
}
.service-item {
    text-align: center;
    background-color: #f1f1ff;
    padding: 30px 25px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 10%);
    box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 10%);
    -webkit-transition: .25s ease-out;
    transition: .25s ease-out;
    }
    .icon{
	color:#3d92e0;
	    font-size: 30px;
    margin-right: 10px
}

footer {
    background-color: #001337;
    text-align: center;
    border-top: 0.2rem solid #9a94d9;
}
</style>
  </head>
  <body>


               <header class="masthead">
                    <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-10  ">
                        <h1 class="heading">Student Management System</h1>
                   
                         <p class="intro">A student management system is an automated version<br>of a manual student. This system can handle all the detail<br> about a student.</p>
                          <br>
                          <br>
                          <br>
  	                     <a class="btn btn-success link" href="login.php">Admin</a>
  	                     <a class="btn btn-success link" href="userlogin.php">User</a>
                         <!--<a class="btn btn-success link" href="registration.php">User</a>-->
                         
                    </div>
               
            </div>
        </header>
      <div class="container ri">
    <div class="mb-5" id="about" style="margin-top:90px;">

        <h2>Our features </h2>
          <p class="under">-----------------<i class="fas fa-star"></i>-----------------</p>
          <br><br>
          <div class="row">
          <div class="col-md-3">
          	<div class="service-item">
           <img src="student.jpg" width="100px";height="30px">
          	<h4>Add new student</h4>
          	<p>
          		 This feature Will allow to add newly admitted students and their database wih individual's necessary information such as student id,name,department,phone number,email address etc in the system.</p>
          		</div>
          </div>
             <div class="col-md-3">
             	<div class="service-item">
           <img src="view.jpg" width="100px";height="30px">
          	<h4>View student details</h4>
          	<p>
          		Through this section users will be able to see the details of any particular student with their details who is enrolled in the system in a arranged way.</p>
          		</div>
          </div>
             <div class="col-md-3">
             	<div class="service-item">
           <img src="edit.jpg" width="100px";height="30px">
          	<h4>Edit student info</h4>
          	<p>
          		 This feature will allow the users to edit any information except student id (as it is not editable) of any student if there is any mistake or it's need to change any.</p>
          		</div>
          </div>
             <div class="col-md-3">
             	<div class="service-item">
           <img src="delete.jpg" width="100px";height="30px">
          	<h4>Delete student info</h4>
          	<p>
          		 This feature will help the administrators/users to delete any student information if he/she unenrolled from the system or for any other valid causes.</p>
          		</div>
          </div>
      </div>
        <br>
    </div>
</div>
  <footer class="py-5">
            <div class="container">
            	<<img  src="pic.jpg" width="120px" height="92px"><br>
            		<h3 style="color:#3d92e0;font-size:23px;">https://www.sms.com</h3>
            		<span style="color:#3d92e0; font-size: 16px;">Stay connected : </span>
            		    
                        <a class="social-icon icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="social-icon icon" href="#"><i class="fab fa-instagram "></i></a>
                        <a class="social-icon icon" href="#"><i class="fab fa-facebook-f"></i></a>
                   
                    </span>
                  
            	
        </footer>
  








  	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>