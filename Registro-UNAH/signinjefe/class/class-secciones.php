<?php
 include("../class/class-asignaturas.php");
	class Seccion{

		private $carrera;
        private $codigo
        private $seccion;
		private $aula;
		private $hi;
		private $hf;
		private $dias;
		private $edificio;
		private $docente;

		public function __construct(
                    $carrera = null,
                    $codigo = null,
                    $seccion = null,
					$aula = null,
					$hi = null,
					$hf = null,
					$dias = null,
					$edificio = null,
                    $docente = null
        ){
			$this->carrera = $carrera;
            $this->codigo = $codigo
            $this->seccion = $seccion;
			$this->aula = $aula;
			$this->hi = $hi;
			$this->hf = $hf;
			$this->dias = $dias;
			$this->edificio = $edificio;
			$this->docente = $docente;
        }
        
        public function toString(){
			return "carrera: " . $this->carrera . 
                " codigo: " . $this->codigo . 
                " Seccion: " . $this->seccion.
				" Aula: " . $this->aula . 
				" hi: " . $this->hi . 
				" hf: " . $this->hf . 
				" Dias: " . $this->dias . 
				" Edificio: " . $this->edificio . 
				" Docente: " . $this->docente;
		}



		public function getcarrera(){
			return $this->carrera;
		}
		public function setcarrera($carrera){
			$this->carrera = $carrera;
		}
		public function getcodigo(){
			return $this->codigo
		}
		public function setcodigo($codigo){
			$this->codigo = $codigo
        }
        public function getSeccion(){
			return $this->seccion;
		}
		public function setSeccion($seccion){
			$this->seccion = $seccion;
		}
      
		public function getAula(){
			return $this->aula;
		}
		public function setAula($aula){
			$this->aula = $aula;
		}
	


		}
		public function gethi(){
			return $this->hi;
		}
		public function sethi($hi){
			$this->hi = $hi;
		}
		public function gethf(){
			return $this->hf;
		}
		public function sethf($hf){
			$this->hf = $hf;
		}
		public function getDias(){
			return $this->dias;
		}
		public function setDias($dias){
			$this->dias = $dias;
		}
		public function getEdificio(){
			return $this->edificio;
		}
		public function setEdificio($edificio){
			$this->edificio = $edificio;
		}
		public function getDocente(){
			return $this->docente;
		}
		public function setDocente($docente){
			$this->docente = $docente;
		}
        
        public static function obtenerSecciones($facultad, $carrera, $codigo){	
            $archivo = fopen("../data/carreras/".$facultad."/asignaturas/secciones/".$carrera."-".$codigo.".json", "r");
            $registros = array();
            while(($linea=fgets($archivo))){
                $registros[] = json_decode($linea,true);
            }
            return json_encode($registros);
        }
    
    
         public function guardarSecciones(){
            $respuesta = array();
            if(isset($_POST["seccion"])){
                if(!file_exists("../data/carreras/".$_POST["facultad"]."/asignaturas/secciones/".$_POST["carrera"]."-".$_POST["codigo"].".json")){
                    $archivo = fopen("../data/carreras/".$_POST["facultad"]."/asignaturas/secciones/".$_POST["carrera"]."-".$_POST["codigo"].".json", "w");
                }
                $archivo = fopen("../data/carreras/".$_POST["facultad"]."/asignaturas/secciones/".$_POST["carrera"]."-".$_POST["codigo"].".json", "a+");
    

                $registro["carrera"] = $this->carrera;
                $registro["codigo"] = $this->codigo
                $registro["seccion"] = $this->seccion;

                //obtener el numero de UV de la clase/////////////
                        $archivoClases = fopen("../data/carreras/".$_POST["facultad"]."/asignaturas/".$_POST["carrera"].".json","r");   
                        while(($linea = fgets($archivoClases))){
                            $registroClase = json_decode($linea,true);
                            if($registroClase["codigo"] == $_POST["codigo"]){
                                
               					 $registro["uv"] =$registroClase["uv"];
                                break;
                            }
                        }
                        fclose($archivoClases);
            

                $registro["aula"] = $this->aula;
                $registro["cupos"] = $this->cupos;
                $registro["inicio"] = $this->hi;
                $registro["final"] = $this->hf;
                $registro["dias"] = $this->dias;
                $registro["edificio"] = $this->edificio;
                $registro["docente"] = $this->docente;
        
              //obtener el nombre de la clase/////////////

                        $archivoClases = fopen("../data/carreras/".$_POST["facultad"]."/asignaturas/".$_POST["carrera"].".json","r");   
                        while(($linea = fgets($archivoClases))){
                            $registroClase = json_decode($linea,true);
                            if($registroClase["codigo"] == $_POST["codigo"]){
                                //Obtener nombre de clase
                $registro["clase"] =$registroClase["clase"];
                                break;
                            }
                        }
                        fclose($archivoClases);
            

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