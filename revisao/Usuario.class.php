<?php 
/**
 * 
 */
class Usuario{
	private $id;
	private $nome;
	private $email;
	private $senha;
	private $pdo;

	public function __construct(){
		$dns    = "mysql:dbname=usuario;host=localhost";
		$dbUser = "root";
		$dbPass = "";
			
		try {
			
			$this->pdo = new PDO($dns, $dbUser, $dbPass);
			
		} catch (Exception $e) {
			echo "<h1>Banco de dados Indisponivel no momento. 
			\nTente mais tarde!";
		}
	}

	public function getId(){
		return $this->id;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getSenha(){
		return $this->senha;
	}


	public function getNome(){
		return $this->nome;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function setEmail($email){
		$this->email = $email;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}


	public function adicionarContato($nome, $email, $senha){
		// 1º - Criar uma String com a consulta
		$sql = "INSERT INTO usuarios SET nome = :n, 
		email = :e, senha = :s";

		// 2º usar o metodo prepare, passando a consulta
		$sql = $this->pdo->prepare($sql);

		// 3º usar o bindValue um para cada dois pontos
		$sql->bindValue(":n", $nome);
		$sql->bindValue(":s", $senha);
		$sql->bindValue(":e", $email);

		// 4º executar o comando
		$isOk = $sql->execute();
		return $isOk;
	}

	public function apagarContato($id){
		$cmd = "DELETE FROM usuarios WHERE id = :i";
		$cmd = $this->pdo->prepare($cmd);
		$cmd->bindValue(":i", $id);

		$cmd->execute();
	}

	public function editarContato($nome, $senha, $email, $id){
		$sql = "UPDATE usuarios SET nome = :n, senha = :s,email = :e, 
		id = :id WHERE id = :id";
		
		$sql = $this->pdo->prepare($sql);

		$sql->bindValue(":n" , $nome);
		$sql->bindValue(":s" , $senha);
		$sql->bindValue(":e" , $email);
		$sql->bindValue(":id", $id );

		$sql->execute();

	}

	public function getAll(){
		$sql = "SELECT *FROM usuarios";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0){
			return $sql->fetchAll();
		}else{
			return Array();
		}
	}


}