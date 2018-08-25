<!DOCTYPE html>
<html>

<!--
ID: 380951
8-25-18
-->

<head>
<title>CISW 129 - Unit 1 Question 2</title>
<style>table {width:50%} tr {text-align:center;}</style>
</head>
<body>
<table>
	<tr>
	<th>Company</th>
	<th>Country</th>
	</tr>
<?php
	$cars = array("Toyota"=>"Japan",
			"Ford"=>"United States",
			"Nissan"=>"Japan",
			"BMW"=>"Germany",
			"Chevrolet"=>"United States",
			"Mitsubishi"=>"Japan",
			"Chrysler"=>"United States",
			"Hyundai"=>"South Korea",
			"Porsche"=>"Germany",
			"Subaru"=>"Japan",
			"Dodge"=>"United States",
			"Volkswagen"=>"Germany");

	foreach ($cars as $key => $value) {
		print "\t<tr>\n\t<td>$key</td><td>$value</td>\n\t</tr>\n";
	}
?>
</table>
</body></html>
