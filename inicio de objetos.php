<?php

//Variables

$passwd = $_POST []; //contraseña 

$ci = $_POST [];
$nombre = $_POST []; //primer nombre
$apellido = $_POST []; //primer apellido
$email = $_POST [];
$celular = $_POST [];
$direccion = $_POST [];

$rut = $_POST [];
$namemp = $_POST []; //nombre empresa
$rubro = $_POST [];
$telefono = $_POST [];
$representante = $_POST []; //ci del representante

//Clase Cliente
class cliente{
    protected $passwd;

    public function __construct($passwd){
        $this-> passwd = $passwd;
    }

    public function getPasswd(){
        return $this-> passwd;
    }
}

//Clase Cliente Web
class web extends cliente{
    private $ci;
	private $nombre;
	private $apellido;
	private $email;
	private $celular;
	private $direccion;
    public function __construct($ci,$nombre,$apellido,$email,$celular,$direccion,$passwd){
        parent:: __construct($passwd);
        $this->  = $ci;
		$this->  = $nombre;
		$this->  = $apellido;
		$this->  = $email;
		$this->  = $celular;
		$this->  = $direccion;
    }

    public function getCi(){
        return $this-> ci;
    }
    public function getNombre(){
        return $this-> nombre;
    }
    public function getApellido(){
        return $this-> apellido;
    }
    public function getEmail(){
        return $this-> email;
    }
    public function getCelular(){
        return $this-> celular;
    }
    public function getDireccion(){
        return $this-> direccion;
    }
}

//Clase Cliente de empresa
class empresa extends cliente{
    private $rut;
	private $namemp;
	private $rubro;
	private $telefono;
	private $representante;
    public function __construct($rut, $namemp, $rubro, $telefono, $representante, $passwd){
        parent:: __construct($passwd);
        $this->  = $rut;
		$this->  = $namemp;
		$this->  = $rubro;
		$this->  = $telefono;
		$this->  = $representante;
    }
    public function getRut(){
        return $this-> rut;
    }
    public function getNameEmp(){
        return $this-> namemp;
    }
    public function getRubro(){
        return $this-> rubro;
    }
    public function getTelefono(){
        return $this-> telefono;
    }
    public function getRepresentante(){
        return $this-> representante;
    }
}

//Objetos
$ObjetoCliente = new Cliente($passwd);
$ObjetoWeb = new Web($ci,$nombre,$apellido,$email,$celular,$direccion,$passwd);
$ObjetoEmpresa new Empresa($rut, $namemp, $rubro, $telefono, $representante, $passwd);

//Registro Objeto
$texto = 

?>