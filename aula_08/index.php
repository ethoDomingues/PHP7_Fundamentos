<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Aula 08 - Tipos de dados</title>
	</head>
	<body>
		<?php
		echo "##### ESCALARES #####<br/>";
			
			$string = "Olá, Mundo!";
			$string = 1;
			$string = false;
			$string = 1.1;
			
			var_dump($string);
			
			echo "<br/>";
			if(is_string($string)):
				echo "É uma String!";
			else:
				if(is_float($string)){
					echo "É um ",gettype($string);
				}
			endif;
			echo "<br/>";
			echo "<br/>";
			echo "##### COMPOSTO #####";
			echo "<br/>";
			
			$carros = array("Hilux","fiesta","LandRover");
			echo $carros[1];
			
			echo "<br/>";
			echo "<br/>";
			
			$motos = [];
			$motos += ["fan 150","cb300","cb500"];
			$motos[count($motos)] = "cg125";
			foreach ($motos as $moto) {
				echo $moto,"<br/>";
			}
			
			echo "<br/>";
			echo "##### OBJECT #####";
			echo "<br/>";
			class Pessoa {
				public $nome;
				public $idade;
				
				public function setNome($nome) {
					$this->$nome = $nome;
				}
				public function setIdade($idade) {
					$this->$idade = $idade;
				}
			}
			$etho = new Pessoa();
			$etho->setNome("etho");
			$etho->setIdade(19);
			
			echo "<pre>";
			var_dump($etho);
			echo "<pre/>";
		?>
	</body>
</html>