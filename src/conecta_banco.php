<?php 

class ConectaBanco {

	public $host;
	public $user;
	public $password;
	public $db;
	public $conecta;

function ConexaoBanco($host, $user, $password, $db){
	$this->conecta = mysqli_connect(
								$this->$host = $host,
								$this->user = $user,
								$this->password = $password,
								$this->db = $db
							);
		if (!$this->conecta) {
			die('Não foi possível conectar: ' . mysql_error());
		}
		//echo 'Conexão bem sucedida';
	}
}
?>