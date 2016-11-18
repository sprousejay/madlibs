<?php  

	$file = "myfile.txt";
	$handle = fopen($file, 'a');
	foreach ($_GET as $key => $value) {
		fwrite($handle, $key . ":" . $value . "\n");
	}
	fclose($handle); 


	function adjective () {
		$adjective = $_GET["adjective"];
			return $adjective;
	}

	function noun () {
		$noun = $_GET["noun"];
			return $noun;
	}
	
	function verb () {
		$verb = $_GET["verb"];
			return $verb;
	}
	
	function nationality () {
		$nationality = $_GET["nationality"];
			return $nationality;
	}
	
	function food () {
		$food = $_GET["food"];
			return $food;
	}

	function number () {
		$number = $_GET["number"];
			return $number;
	}

	function shapes () {
		$shapes = $_GET["shapes"];
			return $shapes;
	}

	function pluralnoun () {
		$pluralnoun = $_GET["pluralnoun"];
			return $pluralnoun;
	}

	function person () {
		$person	= $_GET["person"];
			return $person;
	}

	function paragraph () {
		if ($_GET) {
			echo '<p>Pizza was invented by a <span class="words">' . adjective () . '</span>, <span class="words">' . nationality () . '</span>chef named <span class="words">' . person () . '</span>. To make a pizza, you need to take a lump of <span class="words">' . noun () . '</span>, and make a thin, round <span class="words">' . adjective () . '</span> <span class="words">' . noun () . '</span>. Then you cover it with <span class="words">' . adjective () . '</span> sauce, <span class="words">' . adjective () . '</span> cheese, and fresh chopped <span class="words">' . pluralnoun () . '</span>. Next you have to bake it in a very hot <span class="words">' . noun () . '</span>. When it is done, cut it into <span class="words">' . number () . '</span> <span class="words">' . shapes () . '</span>. Some kids like <span class="words"> ' . food () . '</span> pizza the best, but my favorite is the <span class="words">' . food () . '</span> pizza. If I could, I would eat pizza <span class="words">' . number () . '</span> times a day!</p>';

		} 

		else {
			echo '<form>
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
				</form>';
			
			}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	

<?php paragraph (); ?>
	


</body>
</html>