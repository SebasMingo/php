<?php
    class Persona{
        public $nombre;
        public $telefono;

        public function __construct($nomb, $tel){
            $this->nombre = $nomb;
            $this->telefono = $tel;
        }

        public function obtener_datos(){
            return "<br>Nombre: ".$this->nombre."<br>Telefono: ".$this->telefono;
        }
    }
    class Alumno extends Persona{
        private $grado;
        private $turno;

        public function __construct($nomb, $tel, $grado, $turno) {
            parent:: __construct($nomb, $tel);
            $this->grado = $grado;
            $this->turno = $turno;
        }

        public function obtener_datos(){
            return parent::obtener_datos()."<br>Grado: ".$this->grado." <br>Turno: ". $this->turno;
        }
    }

?>
<h3> Crear un objeto array de la clase alumno </h3>
<?php
    $alumno1 = new Alumno("Sebastián", "0961123466", "Universitario", "Tarde");
?>

<h3> Imprimir sus datos  con foreach </h3>
<?php
    echo $alumno1->obtener_datos();
?>