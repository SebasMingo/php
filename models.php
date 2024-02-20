<?php
abstract class Persona{
    private $nombre_apellido;
    private $fecha_nacimiento;
    private $cedula;

    public function __construct($n, $f, $c){
        $this->nombre_apellido = $n;
        $this->fecha_nacimiento = $f;
        $this->cedula = $c;
    }
    public function set_nombre_apellido($n){
        $this->set_nombre_apellido = $n;
    }
    public function get_nombre_apellido(){
        return $this->nombre_apellido;
    }
    public function get_valor(){
        return "nada";
    }
}

class Cliente extends Persona{
    private $telefono;
    private $direccion;
    

    public function __construct($n, $f, $c, $t, $d) {
        parent::__construct($n,$f,$c);
        $this->telefono = $t;
        $this->direccion = $d;
    }

    public function set_telefono($telefono){
        $this->telefono = $telefono;
    }
    public function get_telefono(){
        return $this->telefono;
    }
    public function get_valor(){
        return "algo diferente, un JSON";
    }
}