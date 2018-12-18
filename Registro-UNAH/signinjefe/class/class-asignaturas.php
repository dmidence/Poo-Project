<?php
class Clase{
	private $asignatura;
    private $codigo;
    private $uv;
    private $carrera;
	private $departamento;
	
    

	public function __construct(
		$asignatura = null,
        $codigo = null,
        $uv = null,
        $carrera = null,
        $departamento = null
        
		
	){

		$this->asignatura = $asignatura;
        $this->codigo = $codigo;
        $this->uv = $uv;
        $this->carrera = $carrera;
        $this->departamento = $departamento;
        
		
	}

	public function __toString(){
		$var = "Clase{"
		."asignatura: ".$this->asignatura." , "
        ."codigo: ".$this->codigo." , "
        ."uv: ".$this->uv." , "
        ."carrera:".$this->carrera." , "
		."departamento:".$this->departamento;
		return $var."}";
	}

	public function getasignatura(){
		return $this->asignatura;
	}

	public function setasignatura($asignatura){
		$this->asignatura = $asignatura;
	}
	public function getdepartamento(){
		return $this->departamento;
	}

	public function setdepartamento($departamento){
		$this->departamento = $departamento;
	}

	public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
    }
    
    public function getCarrera(){
		return $this->carrera;
	}

	public function setCarrera($carrera){
		$this->carrera = $carrera;
	}

    public function getUv(){
		return $this->uv;
	}

	public function setUv($uv){
		$this->uv = $uv;
	}

	public static function obtenerAsignaturas(){	
		$archivo = fopen("../data/carreras/ingenieria-en-sistema/departamentos".$_GET["depto-"]."/asignaturas/".".json", "r");
		$registros = array();
		while(($linea=fgets($archivo))){
			$registros[] = json_decode($linea,true);
		}
		return json_encode($registros);
	}



 	public function guardarAsignatura(){
        $respuesta = array();
        if(isset($_POST["asignatura"])){
			if(!file_exists("../data/carreras/".$_POST["departamento"]."/asignaturas/".$_POST["carrera"].".json")){
				$archivo = fopen("../data/carreras/".$_POST["departamento"]."/asignaturas/".$_POST["carrera"].".json", "w");
			}
			$archivo = fopen("../data/carreras/".$_POST["departamento"]."/asignaturas/".$_POST["carrera"].".json", "a+");

			$registro["asigantura"] = $this->asignatura;
            $registro["codigo"] = $this->codigo;
            $registro["uv"] = $this->uv;
            $registro["carrera"] = $this->carrera;
            $registro["departamento"] = $this->departamento;
            
			

            fwrite($archivo, json_encode($registro)."\n");
            fclose($archivo);

            $respuesta = $registro;
            $respuesta["num"] = 1;
            echo json_encode($respuesta);
        }else{
            $respuesta["num"] = 0;
            echo json_encode($respuesta);
           
        }
    }
}
?>