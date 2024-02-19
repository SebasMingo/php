<?php
    class Automovil {
        private $color; //encapsulaminto
        public $motor;
        public $marca;

        public function set_color($color){
         $this->color = $color;
        }
        public function get_color(){
            return $this->color;
        }    
        public function get_datos(){
            return "Marca: ".$this->marca. " , Motor: ".$this->motor;
        }
    }

$auto1 = new Automovil();
$auto1->set_color("rojito");
$auto1->motor = "2.0";
$auto1->marca = "Toyota";
echo $auto1->get_color();
