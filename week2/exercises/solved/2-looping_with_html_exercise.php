<!--
	
	Easier Exercise
	1. Print the array from the previous exercise in an ordered list
	https://www.w3schools.com/html/html_lists.asp

	Harder Exercise
	1. Print the array from the previous exercise in a table
	https://www.w3schools.com/html/tryit.asp?filename=tryhtml_table
-->

<!DOCTYPE html>
<html>
<head>
	<title>Looping in HTML Exercise</title>
</head>
<body>

	<h1>Animals List</h1>
	<ol>
	<?php
		$animals = array("giraffe", "elephant", "bobcat");
		foreach ($animals as $animal) {
			echo "<li>$animal</li>";
		}
	?>
	</ol>

	<h1>Animals Table</h1>
	<table>
		<tr>
			<th>Animal</th>
		</tr>
		<tr>
		<?php
			$animals = array("giraffe", "elephant", "bobcat");
			foreach ($animals as $animal) {
				echo "<tr><td>$animal</td></tr>";
			}
		?>
		</tr>
</table>
</body>
</html>