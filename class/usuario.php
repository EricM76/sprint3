<?php
class Usuario{
  //declaracion de atributos
    private $nombre;
    private $apellido;
    private $email;
    private $pass;
    private $fecha;
    private $sexo;
    private $avatar;
    private $perfil;
    private $val_user;
    private $direccion;
    private $telefono;
    private $celular;


//funcion constructora
    public function __construct($nombre, $apellido, $email, $pass, $fecha, $sexo, $avatar, $perfil, $val_user, $direccion, $telefono, $celular){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->pass = $pass;
        $this->fecha = $fecha;
        $this->sexo = $sexo;
        $this->avatar = $avatar;
        $this->perfil = $perfil;
        $this->val_user = $val_user;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->celular = $celular;

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

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getPerfil()
    {
        return $this->perfil;
    }

    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    public function getVal_user()
    {
        return $this->val_user;
    }

    public function setVal_user($val_user)
    {
        $this->val_user = $val_user;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }


}
?>
