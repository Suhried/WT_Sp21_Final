<?php
  $uname="";
  $pass="";
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
  	$uname= $_POST["uname"];
  	$pass= $_POST["pass"];

  if($uname=="admin" && $pass=="1234")
  	{
       setcookie("admin",$uname,time()+180);
        header("Location: dashboard.php");
  	}
  }
?>

<html>
<head></head>
<body>
     <form method="post">
     	<input type="text" name="Username" placeholder="user"><br>
     	<input type="password" name="Password" placeholder="Password"><br>
     	<input type="submit" value="login">
     </form>
</body>
</html>