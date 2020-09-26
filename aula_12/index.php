<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Aula 12 - Arrays #1</title>
	</head>
	<body>
		<?php

			$carros = array("fusca","fiat147","Brasília");
			$motos = array();
			$motos = ["cg125","cg150","fan125"];
			$caminhao = ["Fh400","Constellation","Scannia124"];
			
			$pessoas = [];
			$pessoas += ["etho"];
			$pessoas[10] = "maria";
			$pessoas[2] = "cachaça";
			
			
			print_r($carros);
			echo "<br/>";
			print_r($motos);
			echo "<br/>";
			print_r($caminhao);
			echo "<br/>";
			print_r($pessoas);
			
			//#### aula 13
			echo "<br\>";
			echo "<br\>";
			echo count($pessoas);
			echo "<br\>";
			echo "<br\>";
			
			
			
			//#### foreach
			foreach ($carros as $carro) {
				echo "<br/>$carro\n";
			}
		?>
	</body>
</html>