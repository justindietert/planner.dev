<?php 
	var_dump($_POST);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To-do List</title>
</head>
<body>
	
	<hr>

	<!-- list -->
	<h1>To-do List</h1>
	<ul>
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

</body>
</html>