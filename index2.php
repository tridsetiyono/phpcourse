<?php include("variables.php");			?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <title>Hello, world!</title>
  </head>
  <body>
  	<?php include("navbar.php");			?>
    <br/>
    <center>
    <h1>

		<?php
		echo "intro: </br>";
		// print out to the screen
		echo "Hello World!";
		echo "<br/>";
		$first_name = "John";
		$favorite_number = 41;
		echo $first_name;
		echo "<br/>";

		echo $favorite_number;
		echo "<br/>";

		//Math operators
		// + - x / % **

		echo "math operators: </br>";
		echo 41 + 4;
		echo "<br/>";

		$num1 = 41; 
		$num2 = 4;
		echo $num1 + $num2;
		echo "<br/>";
		echo $num1 ** $num2;
		echo "<br/>";
		echo $num1 % $num2;
		echo "<br/>";
		echo ++$num1; //increment by 1
		echo "<br/>";
		echo --$num1; //decrement by 1
		echo "<br/>";

		//concantenation
		echo "concatenation: </br>";
		$first_name = "John";
		$last_name = "Elder";
		echo $first_name . " " . $last_name;
		echo "<br/>";

		// comparison operators
		/*
			== equal to
			!= not equal to
			> greater than
			< less than
			>= greater than or equal to
			<= less then or equal to
		*/

		echo "var_dump: </br>";
		var_dump($num1 == $num2);
		echo "<br/>";
		var_dump($num1 > $num2);
		echo "<br/>";
		var_dump($num1 < $num2);
		echo "<br/>";
		var_dump($num1 != $num2);
		echo "<br/>";		


		//Escape characters
		echo "escape characters: </br>";
		echo "and then she said: \"Hello there!\"";
		echo "<br/>";	

		//If else statement
		echo "if else: </br>";
		if ($first_name == "Pete") {
			echo "Hello " . $first_name . ", how are you?";
			echo "<br/>";	
		} else {
			echo "You are not John, who are you?";
			echo "<br/>";	
		}

		
		//if else if statement
		echo "if else if: </br>";
		$num_1 = 40;
		$num_2 = 5;
		if ($num_1 > 100){
			echo $num_1 . " is greater than 100";
			echo "<br/>";	
		} else if($num_2 ==4){
			echo $num_2 . " is equals 5!";
		} else {
			echo $num_1 . " is less than 100";
			echo "<br/>";	
		}


		// Arrays-Numeric (index)
		echo "Arrays: </br>";
		$first_names = array("John","Steve",'Mary');
		echo $first_names[0];
		echo "<br/>";	
		echo $first_names[1];
		echo "<br/>";	
		echo $first_names[2];
		echo "<br/>";	
		echo count($first_names);
		echo "<br/>";	


		// Arrays-Associative
		echo "Associative arrays: </br>";
		$fav_pizza = array(
			"John" => "Pepperoni",
			"Steve" => "Cheese",
			"Mary" => "Mushroom"
		);

		echo $fav_pizza["John"];
		echo "<br/>";	
		echo $fav_pizza["Steve"];
		echo "<br/>";	
		echo $fav_pizza["Mary"];
		echo "<br/>";	
		echo count($fav_pizza);
		echo "<br/>";

		//Loops -- While
		echo "While loop: </br>";
		$counter = 0;
		while ($counter <10) {
			echo "The counter is: $counter <br/>";
			$counter++;
		}

		//Loops -- For
		echo "For loop: </br>";
		for ($count = 0; $count <10; $count++){
			echo "The count is $count </br>";
		}

		//Loops - Foreach
		echo "Foreach loop: </br>";
		foreach($first_names as $value){
			echo "$value </br>";
		}

		//Functions
		echo "Functions: </br>";
		function helloThere($name){
			echo "Hello There, $name! </br>";
		}
		helloThere("John");
		helloThere("Bob");

		function customadd($num_1, $num_2){
			return $num_1 + $num_2;
		}
		$answer = customadd(41,4);
		echo "return result from function: </br>";
		echo $answer * 2;
		echo "</br>";

		echo "Random Function: </br>";
		echo rand(0,100);
		echo "</br>";
		echo mt_rand(0,100);
		echo "</br>";

		echo "Date Function: </br>";
		echo date('Y');
		echo "</br>";
		echo date('y');
		echo "</br>";
		echo"https://www.php.net/manual/en/datetime.format.php </br>";

		echo "String manipulation: </br>";
		echo "str_replace: </br>";
		$stuff = "John Elder is a php coding savy";
		echo str_replace("savy","expert",$stuff);
		echo "</br>";
		echo "strtoupper: </br>";
		echo strtoupper($stuff);		
		echo "</br>";
		echo "ucwords: </br>";
		echo ucwords($stuff);		
		echo "</br>";
		echo "str_shuffle: </br>";
		echo str_shuffle($stuff);		
		echo "</br>";
		echo "https://www.php.net/manual/en/ref.strings.php </br>";

		?>	
	</center>
	</h1>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

  <center>
  	<?php 
  		include("footer.php");
  	?>
  </center>

</html>
