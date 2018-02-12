<?php
require("connect.php");
session_start();

if(isset($_SESSION["id"])) {
	$postlink = '<a class="link" href="member.php">Post</a>';
}
else { $postlink = ""; }

$message = $_SESSION["message"];

if($select) {
	if(isset($_POST['adopt'])) {
		$title = $_POST['title'];
		$animal = $_POST['animal'];
		$price = $_POST['price'];
		$vacc = $_POST['vacc'];
		$char = $_POST['char'];
		$behave = $_POST['behave'];
		$contact = $_POST['contact'];
		$today = date('d/m/Y G:i:s');

		$SQL = "INSERT INTO adopt (title, animal, price, vaccinated, characteristics, behavior, contact, submitted) VALUES ('$title', '$animal', '$price', '$vacc', '$char', '$behave', '$today')";
		$result = mysqli_query($connect, $SQL);
		$_SESSION["message"] = "You submitted an adopt.";
		header("Location: member.php");
	}
	else if(isset($_POST['lost'])) {
		$title = $_POST['title'];
		$animal = $_POST['animal'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		$reward = $_POST['reward'];
		$char = $_POST['char'];
		$behave = $_POST['behave'];
		$contact = $_POST['contact'];
		$today = date('d/m/Y G:i:s');

		$SQL = "INSERT INTO adopt (title, animal, location, date, reward, characteristics, behavior, contact, submitted) VALUES ('$title', '$animal', '$location', '$date', '$reward', '$char', '$behave', '$contact', '$today')";
		$result = mysqli_query($connect, $SQL);
		$_SESSION["message"] = "You submitted a lost animal.";
		header("Location: member.php");
	}
	else if(isset($_POST['found'])) {
		$title = $_POST['title'];
		$animal = $_POST['animal'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		$char = $_POST['char'];
		$behave = $_POST['behave'];
		$contact = $_POST['contact'];
		$submit = $_POST['submit'];
		$today = date('d/m/Y G:i:s');

		$SQL = "INSERT INTO adopt (title, animal, location, date, characteristics, behavior, contact, submitted) VALUES ('$title', '$animal', '$location', '$date', '$char', '$behave', '$contact', '$today')";
		$result = mysqli_query($connect, $SQL);
		$_SESSION["message"] = "You submitted a lost animal.";
		header("Location: member.php");
	}
}
?>
<html>
<head>
	<title>Member</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" href="styles.css"/>
	<script src="jquery-3.2.1.min.js"></script>
	<style>
		.tab { cursor:pointer; background:black; color:white; padding:10px; display:inline-block; }
	</style>
</head>
<body>
	<div id ="side">
		<div class="links">
			<div class="navlink" onclick="show(0)">
				<h1>Adopt</h1>
				<div id="adopt" style="display:none;">
					<a href="http://translate.google.com">Dogs</a>
					<a href="#">Dogs</a>
					<a href="#">Dogs</a>
					<a href="#">Dogs</a>
				</div>
			</div>
			<div class="navlink" onclick="show(1)">
				<h1>Lost</h1>
				<div id="lost" style="display:none;">
					<a href="http://translate.google.com">Dogs</a>
					<a href="#">Dogs</a>
					<a href="#">Dogs</a>
					<a href="#">Dogs</a>
				</div>
			</div>
			<div class="navlink" onclick="show(2)">
				<h1>Found</h1>
				<div id="found" style="display:none;">
					<a href="http://translate.google.com">Dogs</a>
					<a href="#">Dogs</a>
					<a href="#">Dogs</a>
					<a href="#">Dogs</a>
				</div>
			</div>
		</div>
		<a class="link" href="register.php">Register</a>
		<a class="link" href="login.php">Login</a>
		<?php echo $postlink; ?>
	</div>
	<div id="container">
		<div class="header">

		</div>
		<div class="content">
			<?php echo $message; ?>
			Make a post...
			<br>
			<div class="tab" onclick="post(0)">Adopt</div>
			<div class="tab" onclick="post(1)">Lost</div>
			<div class="tab" onclick="post(2)">Found</div>
			<pre>
			Adopt
			title
			select animal
			price
			vaccinated
			characteristics
			behavior
			contact

			Lost
			title
			select animal
			last seen location
			last seen date
			reward
			characteristics
			behavior
			contact

			Found
			title
			select animal
			location found
			date found
			characteristics
			behavior
			contact
			</pre>
			<div id="pform"></div>
		</div>
	</div>
	<script>
		function show(num) {
			var x;
			if(num == 0) { x = document.getElementById('adopt'); }
			else if(num == 1) { x = document.getElementById('lost'); }
			else if(num == 2) { x = document.getElementById('found'); }
			if(x.style.display == "none") { x.style.display = "block"; }
			else { x.style.display = "none"; }
		}
		function post(num) {
			if(num == 0) {
				document.getElementById("pform").innerHTML = 'Hi';
			}
			else if(num == 1) {
				document.getElementById("pform").innerHTML = 'Hiiiii';
			}
		}
	</script>
</body>
</html>
