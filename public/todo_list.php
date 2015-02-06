<?php 
	var_dump($_POST);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To-do List</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:500|Alegreya+Sans:300,400,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/site.css">
</head>
<body>
	
	<div id="container">
		<!-- list -->
		<h1 class="fancy">To-do List</h1>
		<ul class="list">
			<li>get groceries</li>
			<li>walk dog</li>
			<li>eat dinner</li>
			<li>do homework</li> 
			<li>sleep</li>
		</ul>
		<!-- list end -->

		<hr>

		<!-- form -->
		<form method="POST" action="/todo_list.php">
			<label for="todo">Add a to-do:</label>
			<input type="text" id="todo" name="item" value="" placeholder="Type your to-do here.">
			<input type="submit" value="Add">
		</form>
		<!-- form end -->
	</div>

</body>
</html>