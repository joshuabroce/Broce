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
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lato:900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lato:900|Oswald:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ewert|Kaushan+Script|Lato:900|Oswald:700" rel="stylesheet">
	<title></title>
	<style type="text/css">
	body{
		background-image: url(back.jpg);
	
		height: 100%;
	}
		.container1{
			height: 100%;
			width: 100%;
			background-color: #00800000;
			text-align: center;
		}
		img{
			height: 220px;
			width: 220px;
			padding-left: 30px;
			padding: 10px;
  border-radius: 25px;
		}
		.int{
			height: 30px;
			width:30px;
			color: blue;
		}
		input:checked {
  height: 50px;
  width: 50px;
}
.h1{
	padding-top: 50px;
}
element.style {
    background-color: #fff0f533;
    border-radius: 20px;
}
.navbar-inverse {
    background-color: #7b7b7b61;
    border-color: #b1b1b0;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #000;
    background-color: #ff9900;
    border-radius: 7px;
    width: 100px;
    font-family: 'Lato', sans-serif;
    font-size: 30px;
}
.btn-info {
    color: #fff;
    background-color: #5bc0de00;
    border-color: #65656500;
}
.navbar-inverse .navbar-brand {
    color: #ffffff;
    font-family: lato;
    font-size: 33px;
}
.navbar-inverse .navbar-nav>li>a {
    color: #ffffff;
    font-family: lato;
    font-size: 20px;
}
.h2, h2 {
    font-size: 39px;
    color: black;
    background-color: #ff9900;
    border-radius: 7px;
  font-family: 'Oswald', sans-serif;

}
.btn-default {
    color: #000;
    background-color: #f90;
    border-color: #f90;
    font-family: lato;
}
	
	a {
    color: #ffffff;
    text-decoration: none;
    font-family: lato;
    font-size: 16;
}
.navbar-form .form-control {
    display: inline-block;
    width: 350px;
    vertical-align: middle;
}
.h1 {
    padding-top: 50px;
    background-color: #ff990000;
    width: auto;
    color: white;
    font-size: 50px;
    font-family: 'Ewert', cursive;
}
	</style>
</head>
</head>

<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Clothing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Hub</a></li>
      <li><a href="index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a></li>
      <li><a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-play"></span>Clothes</a></li>
          <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-search"><a href="">Search</a></span> </button>
      <br>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> <h3>Log Out</h3></a></li>
    </form>
  </div>
      
    </ul>
  </div>
</nav>
</header>

<div class="container1">
  <h1 class="h1">Mens Clothing</h1>
<br>
 <h1 class="h1">Shorts</h1>
  <div class="row">
  	
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="stripe" value="50">   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
  </div>
  
  <h1 class="h1">T-Shirts</h1>
   <div class="row">
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="stripe" value="50">   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
  </div>
  <br>
  <h1 class="h1">Polos</h1>
  <div class="row">
    <div class="col-sm-3">
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="stripe" value="50">   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
  </div>
  
  <h1 class="h1">Jeans</h1>
  <div class="row">
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="stripe" value="50">   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
  </div>
 
  <h1 class="h1">Pants</h1>
  <div class="row">
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="stripe" value="50">   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
  </div>
  
  <h1 class="h1">OuterWear</h1>
  <div class="row">
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="stripe" value="50">   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>   
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
    <div class="col-sm-3" >
    	<img src="pic1.jpg"><br>
    	<h2>Stripe Shorts $50</h2>
    	<input class="int" type="checkbox" name="black" value=50>  
    </div>
  </div>
  <br>
  <div class="container2">
  	<button id="1" onclick="display()">Check Item</button>
  	<h2 id="out">Output</h2>
  </div>
</div>




<script type="text/javascript">

	function display() {
		
		var inter = Number(document.getElementsByName('stripe'));

				for (var a = 50; a<inter.length; a++){
					if (inter[a].checked)
					{
						document.getElementById('out').innerHTML= "You select" +inter[a].value;
	
				var inter1 = Number(document.getElementsByName('black'));

				for (var b = 60; b<inter1.length; b++){
					if (inter1[b].checked)
					{
						document.getElementById('out').innerHTML= "Interested In:"+inter1[b].value; 
		
				}
				}
		

</script>


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
