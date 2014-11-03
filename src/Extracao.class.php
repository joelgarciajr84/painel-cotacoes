<?php 
//Conexao com o Banco
require("conecta_banco.php");

class Extracao extends ConectaBanco {

	private $url;
	private $xml;
	private $json;
	private $posicaoDolar;
	private $posicaoeuro;
	private $valorDolar;
	private $valoreuro;
	private $siglamoeda;
	public  $statusDolar;


	
function __construct() {
	
	$this->ConexaoBanco($host, $user, $password, $db);

	$this->posicaoeuro = "USD/EUR";
	$this->posicaoDolar = "USD/BRL";


	$this->url = "http://finance.yahoo.com/webservice/v1/symbols/allcurrencies/quote";
	
	$this->xml = file_get_contents($this->url);

	$registerXML = file_put_contents("cotacoes.xml", $this->xml);

	$this->json = json_encode(simplexml_load_file("cotacoes.xml"));

	$this->json = json_decode($this->json, true);
	
	

		$tamanhoArray = count($this->json["resources"]["resource"]);

		
		 for ($i=0; $i <= $tamanhoArray -1 ; $i++) { 

			//Dolar
		 	

			if($this->json["resources"]["resource"][$i]["field"][0] == $this->posicaoDolar){

				
				$ultimoDolar = "SELECT * FROM `dados_moedas` WHERE `siglamoeda` = \"USD/BRL\" order by id DESC LIMIT 1";
				
				

				if ($result = mysqli_query($this->conecta, $ultimoDolar)) {

  					$resultado = mysqli_fetch_array($result);

  					$ultima = $resultado['horaatualizacao'];
  					$this->ValorAnteriorDolar = $resultado['valormoeda'];


				}

				$this->siglamoeda = strip_tags($this->json["resources"]["resource"][$i]["field"][0]);
				$this->valorDolar = strip_tags($this->json["resources"]["resource"][$i]["field"][1]);
				$this->horatualizacao = strip_tags($this->json["resources"]["resource"][$i]["field"][5]);

				
				$this->valorDolar = floatval($this->valorDolar);

				$this->ValorAnteriorDolar = floatval($this->ValorAnteriorDolar);


					switch ($this->valorDolar) {

						case $this->valorDolar > $this->ValorAnteriorDolar:

							$this->statusDolar = "Dolar Subiu";

							break;
						case $this->valorDolar < $this->ValorAnteriorDolar:


							$this->statusDolar = "Dolar Caiu";

						break;
						case $this->valorDolar == $this->ValorAnteriorDolar:


							$this->statusDolar = "Dolar Estavel";

						break;

						default:
							$this->statusDolar = "Error";
							break;
					}
				
// Insercao no Banco de Dados

				$sql = "INSERT INTO dados_moedas (siglamoeda, valormoeda, horaatualizacao)
				 VALUES ('$this->siglamoeda', '$this->valorDolar' ,'$this->horatualizacao')";

				if (mysqli_query($this->conecta, $sql)) {

				    //echo "Registro inserido com sucesso";

				} else {

				    echo "Error: " . $sql . "<br>" . mysqli_error($this->conecta);
				}

				mysqli_close($this->conecta);
			}

			//Euro
			if($this->json["resources"]["resource"][$i]["field"][0] == $this->posicaoeuro){

				$this->valoreuro = $this->json["resources"]["resource"][$i]["field"][1];

				
			}
		}

		
	}

#Gets

	function getValorDolar(){

		return  $this->valorDolar;
	}
	function getValorEuro(){

		return $this->valoreuro;
	}
	function getValorAnteriorDolar(){

		return $this->valoranteriorDolar;
	}
}

?>