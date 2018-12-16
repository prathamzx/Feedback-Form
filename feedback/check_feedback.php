<?php include 'connect.php'; ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <title>YOUR FEEDBACKS</title>
    </head>
    <body style="background-image: url(img9.jpg); background-repeat: no-repeat; background-size: cover; color: black; font-family: rockwell;"><div class="container">
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
        $query1=mysql_query("SELECT COUNT(id) FROM feedback WHERE fullname='$_SESSION[teacher]' AND q1='YES'" )or die(mysql_error());
        $query0=mysql_query("SELECT count(id) FROM feedback WHERE fullname='$_SESSION[teacher]'" );
        $array=mysql_fetch_array($query1);
        $array0=mysql_fetch_array($query0);
    
        ?>
        <table class='table table-striped'>
        <tr>
            <th>QUES.</th>
            <th>YES</th>
            <th>NO</th>
            <th>SCORE</th>
            
            </tr>
            <tr>
            <td>1. Uses effective methods of Teaching</td>
                <td><?php  echo $array[0]; ?></td>
                <td><?php  echo $array0[0]-$array[0]; ?></td>
                <td><?php  echo intval(($array[0]/$array0[0])*100); ?></td>
            </tr>
              <tr>
            <td> 2. Is the teacher Punctual</td>
                <td><?php   $query1=mysql_query("SELECT COUNT(id) FROM feedback WHERE fullname='$_SESSION[teacher]' AND q2='YES'" )or die(mysql_error());
                    $array=mysql_fetch_array($query1);
                    echo $array[0]; ?></td>
                <td><?php  echo $array0[0]-$array[0]; ?></td>
                  <td><?php  echo intval(($array[0]/$array0[0])*100); ?></td>
            </tr>
          <tr>
            <td> 3. Able to maintain Discipline</td>
                <td><?php   $query1=mysql_query("SELECT COUNT(id) FROM feedback WHERE fullname='$_SESSION[teacher]' AND q3='YES'" )or die(mysql_error());
                    $array=mysql_fetch_array($query1);
                    echo $array[0]; ?></td>
                <td><?php  echo $array0[0]-$array[0]; ?></td>
              <td><?php  echo intval(($array[0]/$array0[0])*100); ?></td>
            </tr>
     <tr>
            <td> 4. Able to clear Doubts</td>
                <td><?php   $query1=mysql_query("SELECT COUNT(id) FROM feedback WHERE fullname='$_SESSION[teacher]' AND q4='YES'" )or die(mysql_error());
                    $array=mysql_fetch_array($query1);
                    echo $array[0]; ?></td>
                <td><?php  echo $array0[0]-$array[0]; ?></td>
         <td><?php  echo intval(($array[0]/$array0[0])*100); ?></td>
            </tr>
             <tr>
            <td>5. Able to maintain interest in the subject</td>
                <td><?php   $query1=mysql_query("SELECT COUNT(id) FROM feedback WHERE fullname='$_SESSION[teacher]' AND q5='YES'" )or die(mysql_error());
                    $array=mysql_fetch_array($query1);
                    echo $array[0]; ?></td>
                <td><?php  echo $array0[0]-$array[0]; ?></td>
                 <td><?php  echo intval(($array[0]/$array0[0])*100); ?></td>
            </tr>
             <tr>
            <td> 6. Pays attention to every student in the class</td>
                <td><?php   $query1=mysql_query("SELECT COUNT(id) FROM feedback WHERE fullname='$_SESSION[teacher]' AND q6='YES'" )or die(mysql_error());
                    $array=mysql_fetch_array($query1);
                    echo $array[0]; ?></td>
                <td><?php  echo $array0[0]-$array[0]; ?></td>
                 <td><?php  echo intval(($array[0]/$array0[0])*100); ?></td>
            </tr>
             <tr>
            <td>7. Good Communication Skills  </td>
                <td><?php   $query1=mysql_query("SELECT COUNT(id) FROM feedback WHERE fullname='$_SESSION[teacher]' AND q7='YES'" )or die(mysql_error());
                    $array=mysql_fetch_array($query1);
                    echo $array[0]; ?></td>
                <td><?php  echo $array0[0]-$array[0]; ?></td>
                 <td><?php  echo intval(($array[0]/$array0[0])*100); ?></td>
            </tr>
             <tr>
            <td> 8. Dressing Sense</td>
                <td colspan="3"><?php   $query1=mysql_query("SELECT * FROM feedback WHERE fullname='$_SESSION[teacher]' " )or die(mysql_error());$sum=0;
                    while($array1=mysql_fetch_array($query1)){
                  if($array1['q8']=='AVERAGE')
                      $sum=$sum+50;
                        if($array1['q8']=='GOOD')
                            $sum=$sum+100;
                      
                        
                    }
                 $avg=$sum/$array0[0];
                    if($avg<33)
                        echo 'BAD';
                    elseif($avg>32 && $avg<66)
                        echo 'AVERAGE';
                    else
                        echo 'GOOD';
                  ?>
                 </td>
                
            </tr>
            <tr>
            <td>Rating</td>
                <td><?php 
                    $query1=mysql_query("SELECT rating from feedback where fullname='$_SESSION[teacher]'")or die(mysql_error());
                    $sum=0;
                    while($array1=mysql_fetch_array($query1)){
                  if($array1['rating']==1){
                      $sum=$sum+1;}
                        elseif($array1['rating']==2){
                            $sum=$sum+2;}
                        elseif($array1['rating']==3){
                            $sum=$sum+3;}
                         elseif($array1['rating']==4){
                            $sum=$sum+4;}
                        else{
                            $sum=$sum+5;
                        }
                        
                    }
                    
                 $avg=$sum/$array0[0];
                    
                    echo round($avg,2);
                    ?></td>
            </tr>
            
        </table>
    
   
        </div>
    </body>
</html>