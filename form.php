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


	<p>Pizza was invented by a <span class="words"><?php adjective (); ?></span>, <span class="words"><?php nationality (); ?></span>chef named <span class="words"><?php person (); ?></span>. To make a pizza, you need to take a lump of <span class="words"><?php noun (); ?></span>, and make a thin, round <span class="words"><?php adjective (); ?></span> <span class="words"><?php noun (); ?></span>. Then you cover it with <span class="words"><?php adjective (); ?></span> sauce, <span class="words"><?php adjective (); ?></span> cheese, and fresh chopped <span class="words"><?php pluralnoun (); ?></span>. Next you have to bake it in a very hot <span class="words"><?php noun (); ?></span>. When it is done, cut it into <span class="words"><?php number (); ?></span> <span class="words"><?php shapes (); ?></span>. Some kids like <span class="words"><?php food (); ?></span> pizza the best, but my favorite is the <span class="words"><?php food (); ?></span> pizza. If I could, I would eat pizza <span class="words"><?php number (); ?></span> times a day!</p>


</body>
</html>