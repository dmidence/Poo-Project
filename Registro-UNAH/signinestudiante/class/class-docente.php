<?php
//aqui creamos la clase para dar a los usuarios y luego la llamamos en el ajax
class Docente{ 
	private $NoEmpleado;
	private $nombre;
	private $apellido;
    private $urlImagen;
    private $

	public function __construct(
		$NoEmpleado = null,
		$nombre = null,
		$apellido = null,
		$urlImagen = null
	){
		$this->NoEmpleado = $NoEmpleado;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->urlImagen = $urlImagen;
	}

	public function __toString(){
		$var = "Docente{"
		."NoEmpleado: ".$this->NoEmpleado." , "
		."nombre: ".$this->nombre." , "
		."apellido: ".$this->apellido." , "
		."urlImagen: ".$this->urlImagen;
		return $var."}";
	}

	public function getNoEmpleado(){
		return $this->NoEmpleado;
	}

	public function setNoEmpleado($NoEmpleado){
		$this->NoEmpleado = $NoEmpleado;
	}
	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}
	public function getUrlImagen(){
		return $this->urlImagen;
	}

	public function setUrlImagen($urlImagen){
		$this->urlImagen = $urlImagen;
	}

	//Funcion estatica: se puede acceder sin crear una instancia
    public static function obtenerNoEmpleados(){ 				//aqui obtenemos los NoEmpleados de nuestro json y creamos una clases la cual llamamos en el ajax
        $archivo = fopen("../data/usuarios.json", "r");
        $registros = array();
        while(($linea=fgets($archivo))){
            $registros[] = json_decode($linea, true);
        }
        return json_encode($registros);
    }
}
?>