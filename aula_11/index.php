<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Aula 11 - Constantes</title>
	</head>
	<body>
		<?php
			define("NOME","Etho");
			define("IDADE",19);
			define("ALTURA",1.75);
			define("EMPREGADO",false);
			define("LANGS", ["Python","Go","C#","PHP"]);
			
			echo 'Meu nome é '.NOME.', tenho '.IDADE.' anos.<br/>';
			echo 'Tenho a altura de '.ALTURA.'cm e estou empregado?: '.EMPREGADO.'<hr/>';
			
			echo "<h1> Langs Favoritas </h1>";
			
			echo "<ol>\n";
			foreach (LANGS as $lang) {
				echo "<li> $lang </li>\n";
			}
			echo "<ol/>\n";
		?>
</body>
</html>