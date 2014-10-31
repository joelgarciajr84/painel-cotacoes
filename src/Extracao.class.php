<?php 

class Extracao {

	private $url;
	private $xml;
	private $json;
	private $posicaoreal;
	private $posicaoeuro;
	private $valorreal;
	private $valoreuro;

	
function __construct() {

	$this->posicaoeuro = "USD/EUR";
	$this->posicaoreal = "USD/BRL";


	$this->url = "http://finance.yahoo.com/webservice/v1/symbols/allcurrencies/quote";
	
	$this->xml = file_get_contents($this->url);

	$registerXML = file_put_contents("cotacoes.xml", $this->xml);

	$this->json = json_encode(simplexml_load_file("cotacoes.xml"));

	$this->json = json_decode($this->json, true);
	
	

		//var_dump($this->json);

		//var_dump($this->json["resources"]["resource"][48]["field"][0]);

		$tamanhoArray = count($this->json["resources"]["resource"]);

		
		 for ($i=0; $i <= $tamanhoArray ; $i++) { 

			//Real

			if($this->json["resources"]["resource"][$i]["field"][0] == $this->posicaoreal){

				$this->valorreal = $this->json["resources"]["resource"][$i]["field"][1];



				
			}

			//Euro
			if($this->json["resources"]["resource"][$i]["field"][0] == $this->posicaoeuro){

				$this->valoreuro = $this->json["resources"]["resource"][$i]["field"][1];

				
			}
		}

		
	}

#Gets

	function getValorReal(){

		return  $this->valorreal;
	}
	function getValorEuro(){

		return $this->valoreuro;
	}
}
?>