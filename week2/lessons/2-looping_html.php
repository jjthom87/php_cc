<!DOCTYPE html>
<html>
<head>
	<title>Looping in HTML</title>
</head>
<body>

	<h1>Languages</h1>
	<ul>
	<?php
		$languages = array("php", "java", "javascript");
		foreach ($languages as $language) {
			echo "<li>$language</li>";
		}
	?>
	</ul>
</body>
</html>