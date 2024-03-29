<?php

class BaseMySQL extends BaseDatos{

    static public function conexion($host,$db,$usuario,$password,$puerto,$charset){
        try {
            $dsn = "mysql:host=".$host.";"."dbname=".$db.";"."port=".$puerto.";"."charset=".$charset;
            $baseDatos = new PDO($dsn,$usuario,$password);
            $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $baseDatos;
        } catch (PDOException $errores) {
            echo "No me pude conectar a la BD ". $errores->getmessage();
            header('location:mantenimiento.php');
            exit;
        }
    }

    static public function buscarPorEmail($email,$pdo,$tabla){
        $sql = "select * from $tabla where email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

    static public function buscarPorDNI($dni,$pdo){
        $sql = "SELECT * FROM admin WHERE usuario = :dni";
        $query = $pdo->prepare($sql);
        $query->bindValue(':dni',$dni);
        $query->execute();
        $admin = $query->fetch(PDO::FETCH_ASSOC);
        return $admin;
    }

    static public function buscarRegistro($pdo,$tabla,$campo,$busqueda){
        $sql = "select * from $tabla where $campo = :busqueda";
        $query = $pdo->prepare($sql);
        $query->bindValue(':busqueda',$busqueda);
        $query->execute();
        $registro = $query->fetch(PDO::FETCH_ASSOC);
        return $registro;
    }

    static public function verCategorias($pdo){
      $sql = "SELECT * FROM categorias";
      $query = $pdo -> prepare($sql);
      $query -> execute();
      $categorias = $query -> fetchAll(PDO::FETCH_ASSOC);
      return $categorias;
    }

    static public function verRegistros($pdo,$tabla){
      $sql = "SELECT * FROM $tabla";
      $query = $pdo->prepare($sql);
      $query->execute();
      $registros = $query->fetchAll(PDO::FETCH_ASSOC);
      return $registros;
    }

    static public function verProductos($pdo,$categoria){
      $sql = "SELECT * FROM productos WHERE categoria_id = $categoria";
      $query = $pdo->prepare($sql);
      $query->execute();
      $registros = $query->fetchAll(PDO::FETCH_ASSOC);
      return $registros;
    }

    static public function verProducto($pdo,$id,$cat){
      $sql = "SELECT * FROM productos WHERE id = $id AND categoria_id = $cat";
      $query = $pdo->prepare($sql);
      $query->execute();
      $producto = $query->fetch(PDO::FETCH_ASSOC);
      return $producto;
    }

    static public function lastProducto($pdo,$cat){
      $sql = "SELECT MAX(id) AS last FROM productos WHERE categoria_id = $cat";
      $query = $pdo->prepare($sql);
      $query->execute();
      $max = $query->fetch(PDO::FETCH_ASSOC);
      $last = $max["last"];
      return $last;
    }

    static public function firstProducto($pdo,$cat){
      $sql = "SELECT MIN(id) AS first FROM productos WHERE categoria_id = $cat";
      $query = $pdo->prepare($sql);
      $query->execute();
      $min = $query->fetch(PDO::FETCH_ASSOC);
      $first = $min["first"];
      return $first;
    }

    static public function verUsuario($pdo,$id){
      $sql = "SELECT * FROM usuarios WHERE id LIKE '$id'";
      $query = $pdo->prepare($sql);
      $query->execute();
      $registro = $query->fetchAll(PDO::FETCH_ASSOC);
      return $registro;
    }

    static public function contarUsuarios($pdo){
      $sql = "SELECT count(*) AS count FROM usuarios";
      $query = $pdo->prepare($sql);
      $query->execute();
      $contador = $query->fetch(PDO::FETCH_ASSOC);
      $count = $contador["count"];
      return $count;
    }

    static public function contarRegistros($pdo,$tabla,$campo,$condicion){
      $sql = "SELECT count(*) AS count FROM $tabla WHERE $campo LIKE $condicion";
      $query = $pdo->prepare($sql);
      $query->execute();
      $contador = $query->fetch(PDO::FETCH_ASSOC);
      $count = $contador["count"];
      return $count;
    }

    public static function eliminarImgPerfil($pdo,$id){
      $sql = "SELECT perfil FROM usuarios WHERE id LIKE '$id'";
      $query = $pdo->prepare($sql);
      $query->execute();
      $perfil = $query->fetch(PDO::FETCH_ASSOC);
      unlink("images/perfil/".$perfil["perfil"]);
    }

    static public function busqueda($pdo,$busca){
        $sql = "select * from productos where titulo like '%$busca%'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }

    static public function verFilas($pdo,$cat){
      $sql = "SELECT RANK() OVER (ORDER BY id) FILA, id, titulo, descripcion, valor, val_product, foto1, foto2, foto3 FROM productos where categoria_id like $cat";
      $query = $pdo->prepare($sql);
      $query->execute();
      $filas = $query->fetchAll(PDO::FETCH_ASSOC);
      return $filas;
    }

    static public function lastRegistro($pdo,$cat){
      $sql = "SELECT RANK() OVER (ORDER BY id) FILA FROM productos where categoria_id like $cat order by FILA DESC LIMIT 1;";
      $query = $pdo->prepare($sql);
      $query->execute();
      $last = $query->fetch(PDO::FETCH_ASSOC);
      return $last;

    }

    static public function selectProduc($pdo){
      $sql = "SELECT * FROM productos ORDER BY rand() LIMIT 20";
      $query = $pdo->prepare($sql);
      $query->execute();
      $productos = $query->fetchAll(PDO::FETCH_ASSOC);
      return $productos;
    }

    static public function selectCodigo($pdo){
      $sql = "SELECT * FROM codigo LIMIT 1";
      $query = $pdo->prepare($sql);
      $query->execute();
      $codigo = $query->fetch(PDO::FETCH_ASSOC);
      return $codigo;
    }








  public function leer(){
      //A futuro trabajaremos en esto
  }
  public function actualizar(){
      //A futuro trabajaremos en esto
  }
  public function borrar(){
      //A futuro trabajaremos en esto
  }
  public function guardar($usuario){
      //Este fue el método usao para json
  }

}


 ?>
