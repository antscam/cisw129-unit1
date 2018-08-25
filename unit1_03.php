<!DOCTYPE html>
<html>

<!--
ID: 380951
8-25-18
-->

<head><title>CISW 129 - Unit 1 Question 3</title></head>
<body>
<?php
	function say_hello(){
		print "<p>Hello, world!</p>\n";
	}

	$loops = 10;
	for ($loops > 0; $loops--;){
		say_hello();
	}
?>
</body>
</html>
