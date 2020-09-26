<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Aula 14 - arrays #3</title>
	</head>
	<body>
		<?php
			$array = ["etho",19, 1.75,true];
			
			// Count
			echo '$array = ["etho",19, 1.75,false]';
			echo "<h3>Count: </h3>".count($array);
			echo "<hr/>";
			//Foreach
			echo "<h3> foreatch: </h3>";
			echo "<ul>";
			foreach ($array as $item) {
				echo "<li>".gettype($item).": $item</li>";
			}
			echo "</ul><hr/>";
			
			// Arrays Associativos: (json, dicts, maps, etc)
			echo "<br/>"."<h3>Arrays Associativos</h3>"."</br>";
			
			$dict = ["nome" => "etho", "idade" => 19, "altura" => 1.75];
			echo '$dict = ["nome" => "etho", "idade" => 19, "altura" => 1.75]"'."<br/>";
			
			$dict["peso"] = 60;
			echo '$dict["peso"] = 60'."<br/>";
			
			foreach ($dict as $index => $keys) {
				echo "<br/> $index => $keys";
			}
			echo "<br/><hr><br/>";
			
			//arrays multidimensionais
			$mult = array(
				"atum",array("batata","bacon"),
				"filmes" => array(
					"Star Wars","Guardiões da galáxia",
					"John Wick", "Velozes e Furiosos"
				)
			);
			
			echo '$mult = array(
				"atum",array("batata","bacon"),
				"filmes" => array(
					"Star Wars","Guardiões da galáxia",
					"John Wick", "Velozes e Furiosos"
				)
			);'."<br/>";
			
			foreach ($mult as $key) :
				if (gettype($key) == "array") {
					foreach ($key as $val) {
						echo $val,"<br/>";
					}
				}else {
					echo $key, "<br/>";
				}
			endforeach;
		?>
	</body>
</html>