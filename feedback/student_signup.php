<?php include 'connect.php'?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <title>sign-up-page</title>
    </head>
    <body style="background-image: url(img9.jpg); background-repeat: no-repeat; background-size: cover; color: black; font-family: rockwell;"><div class="container">
         <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" class="active" href="admin_index.php"><?php echo $_SESSION['aname']; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="student_signup.php">STUDENT</a></li>
      <li><a href="teacher_signup.php">TEACHER</a></li>
      
     
    </ul>
       <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
        </ul>
         </div>
</nav>
        
    <h1>FEEDBACK <small style="color:grey;">STUDENT</small></h1>
        <form class="form-horizontal" method="post" action="connect.php">
            <div class='form-group'>
            <label class="control-label col-sm-2" for="Rollno">Roll-No.:</label>
      <div class="col-sm-4">
          <input type="text" class="form-control" name="rollno" placeholder="Enter Your Roll No" required></div></div>
            
            <div class='form-group'>
                <label class="control-label col-sm-2" for="fullname"> Fullname:</label><div class="col-sm-4">
                <input class="form-control" type="text" name="fullname" placeholder="Enter Your Full Name" required></div></div>
                
                 <div class='form-group'>
                <label class="control-label col-sm-2" for="email"> E-mail:</label><div class="col-sm-4">
                     <input class="form-control" type="email" name="email" placeholder="Enter Your Email" required></div></div>
            
             
                 <div class='form-group'>
                <label class="control-label col-sm-2" for="Phonenumber"> Phone Number:</label><div class="col-sm-4">
                     <input class="form-control" type="text" name="phonenumber" placeholder="Enter Your Phonenumber" required></div></div>
            
              <div class='form-group'>
                <label class="control-label col-sm-2" for="Phonenumber"> Course:</label><div class="col-sm-4">
            <select class="form-control" name="course">
<option>B.Tech:CSE</option>
<option>B.Tech:MECH</option>
<option>B.Tech:CIVIL</option>
<option>B.Tech:ELECTRICAL</option>
<option >BCA</option>
<option>Humanities</option>
<option>B.Sc</option>
                  </select></div></div>
            
             <div class='form-group'>
                <label class="control-label col-sm-2" for="Address"> Address:</label><div class="col-sm-4">
                     <input class="form-control" type="text" name="address" placeholder="Enter Your Address" required></div></div>
            
             <div class='form-group'>
                <label class="control-label col-sm-2" for="password"> Password:</label><div class="col-sm-4">
                     <input class="form-control" type="password" name="pass" placeholder="Enter Your Password" required></div></div>
            
            <div class='form-group'>
                <label class="control-label col-sm-2" for="confirmpassword">Confirm Password:</label><div class="col-sm-4">
                     <input class="form-control" type="password" name="cpass" placeholder="Enter Your Password"></div></div>
            
    
         
            <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
            <input class="btn btn-default" type="submit" name="submit">
                </div></div>
        
        </form>
         
    </div>
    </body>
</html>