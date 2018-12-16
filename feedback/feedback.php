<?php include 'connect.php'
//session_start();
?>

<html>
<head><link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <title>FEEDBACK</title>
    </head>
    <body style="background-image: url(img9.jpg); background-repeat: no-repeat; background-size: cover; color: #000000; font-family: rockwell;"><div class="container">
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
            
        
    <form method="post" action="connect.php"><table class="table table-hover">
        <tr><td>
            1. Uses effective methods of Teaching </td><td><input type="radio" name="q1" value="YES">YES</td><td>
        <input type="radio" name="q1" value="NO">NO</td>
        </tr>
        <tr><td>
            2. Is the teacher Punctual</td><td> <input type="radio" name="q2"  value="YES">YES</td><td>
            <input type="radio" name="q2"  value="NO">NO</td>
        </tr>
        <tr><td>
         3. Able to maintain Discipline </td><td><input type="radio" name="q3"  value="YES">YES</td><td>
        <input type="radio" name="q3"  value="NO">NO</td>
        </tr>
        <tr><td>
         4. Able to clear Doubts</td><td> <input type="radio" name="q4"  value="YES">YES</td><td>
        <input type="radio" name="q4"  value="NO">NO</td></tr>
        <tr><td>
         5. Able to maintain interest in the subject </td><td><input type="radio" name="q5"  value="YES">YES</td><td>
        <input type="radio" name="q5"  value="NO">NO</td>
    </tr>
        <tr><td>
         6. Pays attention to every student in the class </td><td> <input type="radio" name="q6"  value="YES">YES</td><td>
        <input type="radio" name="q6"  value="NO">NO</td>
        </tr>
        <tr><td>
         7. Good Communication Skills  </td><td><input type="radio" name="q7"  value="YES">YES</td><td>
        <input type="radio" name="q7"  value="NO">NO</td>
        </tr>
        <tr><td>
         8. Dressing Sense </td><td colspan="3"><input type="radio" name="q8"  value="GOOD">GOOD   &emsp; &emsp;
         <input type="radio" name="q8"  value="AVERAGE">AVERAGE &emsp; &emsp;
        <input type="radio" name="q8"  value="BAD">BAD</td>
        </tr>
        <tr><td>
        RATING:</td><td> <select name="rate">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        
        
        </select></td>
        </tr>
        <tr><td>
        Comment:</td><td colspan="2"><pre><input type="text" style="height:50px; width:500px;" name="comment" placeholder="Enter your review"></pre></td>
        </tr></table>
       <center>  <div class="form-group"> 
    <div class=" col-sm-10">
            <input class="btn btn-default" type="submit" name="fsubmit" value="Submit Form">
                </div></div>
        </center>
        </form>
    </div>
    </body>
</html>