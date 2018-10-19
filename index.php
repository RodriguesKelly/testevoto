<?php 
	require_once 'candidato.php';

	$cd = new Candidato("banco", "host", "usuario", "senha");
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Votação de testes</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<?php 

	if (isset($_POST['submit'])) 
	{
		
		$candidato = addslashes($_POST['candidato']);
	
		if (!empty($candidato)) 
		{
		

		$cd->cadastrarVoto($candidato);
		header("location: fim.php");
		}
			else{
				echo "Precisa de uma opção";
			}

		
	}



	 ?>

	 <section class="area">
	 	<h1>Teste 2º Turno</h1>
	 		<form  method="POST">
		<label for="">Fernando Haddad</label> 
		<input type="radio" value="Haddad" name="candidato" required="">

		<label for="">Jair Messias Bolsonaro</label> 
		
		<input type="radio" value="Bolsonaro" name="candidato" required="">
		 
	
		<label for="">Voto em Branco</label> 
		<input type="radio" value="Branco" name="candidato" required="">
		
		
		<input type="submit" value="Votar" name="submit">

	</form>
	 </section>

</body>
</html>