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
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<script>
function logout()
{
	location = 'logout.php';
}
</script>

</head>
<body style="background-image: url(img9.jpg); background-repeat: no-repeat; background-size: cover; color: #000000; font-family: rockwell;">
    <div class="container"><?php 
    
    $result=mysql_query("SELECT * FROM student WHERE rollno = '$_SESSION[rollno]' AND pass = '$_SESSION[pass]'");

$array=mysql_fetch_assoc($result);
    $_SESSION['stu']=$array['fullname'];
    
    
    
    
    ?>
        
           <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" class="active" href="student_index.php"><?php echo $_SESSION['stu']; ?></a>
    </div>
     <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
        </ul>
         </div>
</nav>
            
        
        
    <?php


$result=mysql_query("SELECT * FROM student WHERE rollno = '$_SESSION[rollno]' AND pass = '$_SESSION[pass]'");
?>
      

    <table class="table" >
<thead>
 <tr>
      <th>Fullname</th>
	  <th>Admin-Id</th>
	  <th>Email</th>
	  <th>Phone No.</th>
	  <th>Address</th>
	  <th>Course</th>
	 
 </tr>
</thead>
<?php
while($array = mysql_fetch_assoc($result))
{
	print "<tr> <td>";
    echo $array['fullname'];
    $_SESSION['student']=$array['fullname'];
	print "</td> <td>";
    echo $array['rollno'];
	print "</td> <td>";
    echo $array['email'];
    print "</td> <td>";
    echo $array['phonenumber'];
    print "</td> <td>";
    echo $array['address'];
     print "</td> <td>";
    echo $array['course'];
	
	print "</td> </tr>";
	
}	
?>
</table><br>
   
    <h2>ENTER TEACHER's FULLNAME</h2><form method="post" action="student_index.php">
    <input type="text" name="tname" placeholder="IN CAPITAL">
    <input type="submit" name="tsubmit" value="Search">
    </form>
     <?php

if(!empty($_REQUEST['tname'])){
$result=mysql_query("SELECT * FROM teacher WHERE fullname = '$_REQUEST[tname]' ");
}
   
?>

    

    <table class="table" >
<thead>
 <tr>
      <th>Fullname</th>
	 
	  <th>Email</th>
	  
	 
	  <th>Course</th>
	 
 </tr>
</thead>
<?php $_SESSION['tname']="";
        echo "<form action='connect.php' method='post'>";
while($array = mysql_fetch_assoc($result))
{   
	print "<tr> <td>";
  
    echo $array['fullname'];
    $_SESSION['tname']=$array['fullname'];
	print "</td> <td>";
 
    echo $array['email'];
    print "</td> <td>";
  
    echo $array['course'];
	
	print "</td> </tr>";
	
}	
    
?>
        </table>
        <center><form action="connect.php" method="post"><input type=submit value='Continue' name='feedback'></form></center>
    </div>
    </body>
</html>