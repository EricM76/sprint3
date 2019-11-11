<?php
class Admin{
  //declaracion de atributos
    private $nombre;
    private $apellido;
    private $email;
    private $usuario;
    private $pass;


//funcion constructora
    public function __construct($nombre, $apellido, $email, $usuario, $pass){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->pass = $pass;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

}
?>
