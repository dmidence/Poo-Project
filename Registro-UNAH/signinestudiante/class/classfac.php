<?php
class Fillfac{
	private $facultad;
	private $op;

	public function __construct(
		$facultad = null,
		$op = null
	){

		$this->facultad = $facultad;
		$this->op = $op;
	
	}
	public static function llenar(){
        $archivo = fopen("../data/facultades.json", "r");
        $registros = array();
        while(($linea=fgets($archivo))){
            $registros[] = json_decode($linea, true);
        }
        return json_encode($registros);
    }
	public function __toString(){
		$var = "Facultad{"
		."nombre: ".$this->facultad." , "
		."op: ".$this->op;
		return $var."}";
	}

	public function getfacultad(){
		return $this->facultad;
	}

	public function setfacultad($facultad){
		$this->facultad = $facultad;
	}
	public function getop(){
		return $this->op;
	}

	public function setop($op){
		$this->op = $op;
	}

	
}
?>