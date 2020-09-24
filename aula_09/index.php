<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="" content="">
		<title>Aspas simples, duplas & Concatenação</title>
	</head>
	<body>
		<?php
			$nome = 'Etho';
			echo "Aspas Duplas <br/>";
			echo "\"Meu nome é $nome\"";
			echo "<hr/>";
			
			echo "<br/> Aspas Simples <br/>";
			echo '\'Meu nome é $nome\'';
			echo "<hr/>";
			
			echo "<br/> Concatenação <br/>";
			echo '\'Meu nome é '.$nome.'\'';
		?>
	</body>
</html>