<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Variáveis Dinâmicas</title>
	</head>
	<body>
		<?php
			$dict = "nome";
			$$dict = "etho";
			
			echo "$dict - $nome";
		?>
	</body>
</html>