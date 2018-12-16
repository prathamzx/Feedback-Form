<?php include'connect.php';?>
<html><head><link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <title>COMMENTS</title>
    </head>
    <body style="background-image: url(img9.jpg); background-repeat: no-repeat; background-size: cover; color: black; font-family: rockwell;">
         <div class="container">
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" class="active" href="teacher_index.php"><?php echo $_SESSION['teacher'];?></a>
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
$query=mysql_query("SELECT * FROM feedback WHERE fullname='$_SESSION[teacher]'")or die(mysql_error());
$i=1;echo "<table class='table table-hover'>";
while($array=mysql_fetch_array($query))
{
 echo "<tr><td>$i.</td><td>";
echo     $array['comment'];
    echo "</td></tr>";
   $i++;
}
        echo "</table>";
?>
    </body>
</html>