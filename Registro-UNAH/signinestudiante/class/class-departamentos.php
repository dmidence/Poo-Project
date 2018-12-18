<?php
class Departamento{
	private $departamento;
	private $carpeta;

	public function __construct(
		$departamento = null,
		$carpeta = null
	){

		$this->departamento = $departamento;
		$this->carpeta = $carpeta;
	
	}

	public function __toString(){
		$var = "Departamento{"
		."departamento:".$this->departamento." , "
		."carpeta:".$this->carpeta;
		return $var."}";
	}

	public function getdepartamento(){
		return $this->departamento;
	}

	public function setdepartamento($departamento){
		$this->departamento = $departamento;
	}
	public function getcarpeta(){
		return $this->carpeta;
	}

	public function setcarpeta($carpeta){
		$this->carpeta = $carpeta;
	}

	//Funcion estatica: se puede acceder sin crear una instancia
    public static function obtenerdepartamentos(){
        $archivo = fopen("../../signinjefe/data/carreras/ingenieria-en-sistema/departamentos.json", "r");
        $registros = array();
        while(($linea=fgets($archivo))){
            $registros[] = json_decode($linea, true);
        }
        return json_encode($registros);
    }
}
?>