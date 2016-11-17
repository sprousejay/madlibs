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
</head>
<body>

	
	<form name="madlib" action="form.php" method="post">
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


	<p>Pizza was invented by a (adjective),(nationality) chef named (person). To make a pizza, you need to take a lump of (noun), and make a thin, round (adjective) (noun). Then you cover it with (adjective) sauce, (adjective) cheese, and fresh chopped (plural noun). Next you have to bake it in a very hot (noun). When it is done, cut it into (number) (shapes). Some kids like (food) pizza the best, but my favorite is the (food) pizza. If I could, I would eat pizza (number) times a day!</p>

	<?php adjective (); ?>

	<?php noun (); ?>

	<?php verb (); ?>

	<?php number (); ?>

	<?php shapes (); ?>

	<?php nationality (); ?>

	<?php food (); ?>

	<?php pluralnoun (); ?>

	<?php person (); ?>


</body>
</html>