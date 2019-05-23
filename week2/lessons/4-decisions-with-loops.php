<?php

$languages = array("php", "java", "javascript");

foreach ($languages as $language) {
	if($language == "php"){
		echo "one of the languages that you have learned is PHP";
		echo "\n";
	} elseif($language !== "python"){
		//why does this echo twice in the loop?
		echo "you have not learned python";
		echo "\n";
	}
}

?>