<?php




session_start();
// if($_SESSION['status']!='active')
    
  //      header('location:Sign_In.html');
    
unset($_SESSION['status']);
session_destroy();
//header("location:login.html");
//echo "<script>history.pushState(null,null,document.title);
echo "
<script>


location = 'index.html';

</script>
";
//window.addEventListener('popstate',function(){history.pushState(null,null,document.title);});</script>";

?>