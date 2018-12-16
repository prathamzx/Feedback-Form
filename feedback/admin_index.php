<?php 
if(!isset($_SERVER['HTTP_REFERER']))
{
    header('location:login.html');
    exit;
}
include 'connect.php';
?>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<script>
function logout()
{
	location = 'logout.php';
}
</script>

</head>
<body style="background-image: url(img9.jpg); background-repeat: no-repeat; background-size: cover; color:#5b5d47; font-family: rockwell;">
    <?php $result=mysql_query("SELECT fullname FROM admin WHERE adminid = '$_SESSION[adminid]' AND pass = '$_SESSION[pass]'");
    $array=mysql_fetch_assoc($result);
    $_SESSION['aname']=$array['fullname'];
?>
    
    <div class="container">
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" class="active" href="#"><?php echo $_SESSION['aname']; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="student_signup.php">STUDENT</a></li>
        <li><a href="teacher_signup.php">TEACHER</a></li></ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
        </ul>
    
         </div>
</nav>
    <?php


$result=mysql_query("SELECT * FROM admin WHERE adminid = '$_SESSION[adminid]' AND pass = '$_SESSION[pass]'");
?>
    
    

    <table class="table table-bordered" >
<thead>
 <tr>
      <th>Fullname</th>
	  <th>Admin-Id</th>
	  <th>Email</th>
	  <th>Phone No.</th>
	  <th>Address</th>
	 
 </tr>
</thead>
<?php
while($array = mysql_fetch_assoc($result))
{
	print "<tr> <td>";
    echo $array['fullname'];
	print "</td> <td>";
    echo $array['adminid'];
	print "</td> <td>";
    echo $array['email'];
    print "</td> <td>";
    echo $array['phonenumber'];
    print "</td> <td>";
    echo $array['address'];
	
	print "</td> </tr>";
	
}	
?>
</table><br>
   
   
    </div>
    
    </body>
</html>