<?php

	function adjective () {
		$adjective = $_GET["adjective"];
			echo $adjective;
	}

	function noun () {
		$noun = $_GET["noun"];
			echo $noun;
	}
	
	function verb () {
		$verb = $_GET["verb"];
			echo $verb;
	}
	
	function nationality () {
		$nationality = $_GET["nationality"];
			echo $nationality;
	}
	
	function food () {
		$foods = $_GET["food"];
			echo $food;
	}

	function number () {
		$number = $_GET["number"];
			echo $number;
	}

	function shapes () {
		$shapes = $_GET["shapes"];
			echo $shapes;
	}

	function pluralnoun () {
		$pluralnoun = $_GET["pluralnoun"];
			echo $pluralnoun;
	}

	function person () {
		$person	= $_GET["person"];
			echo $person;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	<form>
		Adjective<br>
		<input type="text" name="adjective"><br>
		Noun<br>
		<input type="text" name="noun"><br>
		Verb<br>
		<input type="text" name="verb"><br>
		Person<br>
		<input type="text" name="person"><br>
		Shapes<br>
		<input type="text" name="shapes"><br>
		Plural Noun<br>
		<input type="text" name="pluralnoun"><br>
		Number<br>
		<input type="text" name="number"><br>
		Food<br>
		<input type="text" name="food"><br>
		Nationality<br>
		<input type="text" name="nationality"><br>

		<input type="submit">
	</form>


	<p>Pizza was invented by a <span class="words"><?php adjective (); ?></span>, <?php nationality (); ?> chef named <?php person (); ?>. To make a pizza, you need to take a lump of <?php noun (); ?>, and make a thin, round <?php adjective (); ?> <?php noun (); ?>. Then you cover it with <?php adjective (); ?> sauce, <?php adjective (); ?> cheese, and fresh chopped <?php pluralnoun (); ?>. Next you have to bake it in a very hot <?php noun (); ?>. When it is done, cut it into <?php number (); ?> <?php shapes (); ?>. Some kids like <?php food (); ?> pizza the best, but my favorite is the <?php food (); ?> pizza. If I could, I would eat pizza <?php number (); ?> times a day!</p>


</body>
</html>