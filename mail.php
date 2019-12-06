<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 

   
    <html>
<head>
	<title>Add Data</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
<style type="text/css">
body{
  background-image:url(model2.jpg);
  background-size:cover;
}
.navbar-inverse {
    background-color: #7171713b;
    border-color: #c5c5c5;
}

h1{
  font-size:150px;
  background-color: #acacd4d4;
}
.container{
  text-align:center;

}

</style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  <li><a href="index.php">Home</a></li>
		 <li><a href="mail.php">Send Mail</a></li>
		   

  </ul>
  <ul class="nav navbar-nav navbar-right">
     
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
</nav>
<div class="container">

<label>Send Mail To:</label>
<br>
<label>Subject:</label>
<input type="text">
		
		<div>
			<textarea rows="10" cols="60" name="content" required></textarea>
		</div>
		
		<input type="submit" name="submit" value="Send">


</div>

</body>
</html>
<?php 
   

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
