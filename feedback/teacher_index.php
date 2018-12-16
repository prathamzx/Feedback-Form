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
<body style="background-image: url(img9.jpg); background-repeat: no-repeat; background-size: cover; color: #4e4444; font-family: rockwell;"><?php 
    
    $result=mysql_query("SELECT * FROM teacher WHERE rollno = '$_SESSION[rollno]' AND pass = '$_SESSION[pass]'");

$array=mysql_fetch_assoc($result);
    $_SESSION['teacher']=$array['fullname'];
    
    
    
    
    ?>
    
    <div class="container">
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" class="active" href="#"><?php echo $_SESSION['teacher'];?></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="check_feedback.php">YOUR FEEDBACKS</a></li>
      <li><a href="comment.php">COMMENTS</a></li>
     
     
    </ul>
       <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
        </ul>
         </div>
</nav>
    <?php


$result=mysql_query("SELECT * FROM teacher WHERE rollno = '$_SESSION[rollno]' AND pass = '$_SESSION[pass]'");
?>
   
    

    <table class="table" >
<thead>
 <tr>
      <th>Fullname</th>
	  <th>Prof Id</th>
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
    $_SESSION['teacher']= $array['fullname'];
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

    </body>
</html>