<!DOCTYPE html>
<html>
<head>
<style>

header, footer {
    padding: 1em;
    color: blue;
    background-color: white;
    clear: left;
    text-align: center;
}

body {
	background-color: white;
	color:black;
	text-align: center;
}

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #a4e6ff;
}

li {
	float:left;
}
	
li a {
	display:block;
	color:white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}

li a:hover{
	background-color: #92dffd;
}

</style>
</head>
<body>

<ul>
	<li><a class="active" href="index.html">Home</a></li>
	<li><a href="service.html">Service</a></li>
	<li><a href="about.html">About</a></li>
	<li><a href="news.html">News</a></li> 
	<li><a href="contact.html">Contact</a></li>
	<li><a href="login">Log In</a><li>
</ul>

<header>
	<h1> Thank you for your Submission! </h1>
</header>

First Name: <?php echo $_GET["firstname"]; ?><br>
Last Name: <?php echo $_GET["lastname"]; ?><br>
Current Location: <?php $_GET["location"] ?><br>
Do you use the Service: <?php $_GET["location"] ?><br>
Where should we expand: <?php $_GET["expansion"] ?><br>
Date: <?php $_GET["date"] ?><br>

<header>
	<h2> Please explore the rest of the site! </h2>
</header>

</body>
</html>
		