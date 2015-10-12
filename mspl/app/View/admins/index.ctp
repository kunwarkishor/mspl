
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
	<style>
	body{
		
	background-image:url(<?php echo $this->webroot ?>img/bg.png);
	font-family: 'Oleo Script', cursive;
}

.lg-container{
	width:275px;
	margin:100px auto;
	padding:20px 40px;
	border:1px solid #f4f4f4;
	background:rgba(255,255,255,.5);
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
	
	-webkit-box-shadow: 0 0 2px #aaa;
	-moz-box-shadow: 0 0 2px #aaa;
	box-shadow: 0 0 2px #aaa;
}
.lg-container h1{
	font-size:40px;
	text-align:center;
}
#lg-form > div {
	margin:10px 5px;
	padding:5px 0;
}
#lg-form label{
	display: none;
	font-size: 20px;
	line-height: 25px;
}
#lg-form input[type="text"],
#lg-form input[type="password"]{
	border:1px solid rgba(51,51,51,.5);
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
	padding: 5px;
	font-size: 16px;
	line-height: 20px;
	width: 100%;
	font-family: 'Oleo Script', cursive;
	text-align:center;
}
#lg-form div:nth-child(3) {
	text-align:center;
}
#lg-form button{
	font-family: 'Oleo Script', cursive;
	font-size: 18px;
	border:1px solid #000;
	padding:5px 10px;
	border:1px solid rgba(51,51,51,.5);
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
	
	-webkit-box-shadow: 2px 1px 1px #aaa;
	-moz-box-shadow: 2px 1px 1px #aaa;
	box-shadow: 2px 1px 1px #aaa;
	cursor:pointer;
}
#lg-form button:active{
	-webkit-box-shadow: 0px 0px 1px #aaa;
	-moz-box-shadow: 0px 0px 1px #aaa;
	box-shadow: 0px 0px 1px #aaa;
}
#lg-form button:hover{
	background:#f4f4f4;
}
#message{width:100%;text-align:center}
.success {
	color: green;
}
.error {
	color: red;
}
	</style>

</head>
<body>
	<div class="lg-container">
    <h1>Admin Area</h1>
		<form action="" id="lg-form" name="lg-form" method="post">
			 <?php echo $this->Form->create('login',array('id'=>'lg-form'));?>
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div><center>	<?php echo $this->Form->end('Login',array('id'=>'login'));?>			
				<!--<button type="submit" id="login">Login</button>-->
				</center>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
</body>
</html>