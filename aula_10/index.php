<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Aula 10 - Escopo de variáveis</title>
	</head>
	<body>
		<?php
			$nome = "Etho";
			$a = 1;
			$b = 3;
			$c = 5;
			function echoNome() {
				global $nome;
				echo $nome;
			}
			echoNome();
			echo "<hr/><br/>";
			
			
			function soma() {
				echo $GLOBALS["a"] +
					 $GLOBALS["b"] +
					 $GLOBALS["c"];
			}
			soma();
		?>
	</body>
</html>