<?php 

Class Candidato{

	private $pdo;

	public function __construct ($dbname, $host, $user, $senha)
	{
		try{
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);

		}
		catch(PDOException $e)
		{
			echo "Erro com banco de dados ".$e->getMessage();
			die();
		}
		catch(Exception $e)
		{
			echo "Erro: ".$e->getMessage();
		}

	}

	public function cadastrarVoto($candidato){
		$comando = $this->pdo->prepare("INSERT INTO candidato (opcao) VALUES (:o)");
		
		$comando->bindValue(":o", $candidato);
		$comando->execute();

		
	}




}


 ?>