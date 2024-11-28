<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';
class modelousuario
{
    private $conexion;
    private $pdo;
    //al instaciar la clase debo obtener la conexion
    public function __construct()
    {
        $this->conexion = Conexion::obtenerconexion();
    }
    //dedbe
    public function obtenerusuario()
    {
        $query = $this->conexion->query('SELECT id,username,password,perfil from usuarios');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    // debe hacer un metodo para haser un insert
    public function insertarUsuarios($username, $password, $perfil)
    {
        $query = $this->conexion->query("INSERT INTO usuarios(username, password, 
      perfil) VALUES(:username, :password, :perfil)");

        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':perfil', $perfil);

        return $stmt->execute();
    }
    public  function agregarUsuario($username, $password, $perfil)
    {
        $query = $this->conexion->prepare("INSERT INTO usuarios (username, password, perfil) VALUES (?, ?, ?)");
        $query->execute([$username, $password, $perfil]);
    }
    public  function  eliminarUsuario($username)
    {
        $query = $this->conexion->prepare("DELETE FROM usuarios WHERE username = ?");
        $query->execute([$username]);
    }
    public  function obtenerUsuarioPorNombre($username)
    {
        $query = $this->conexion->prepare("SELECT * FROM usuarios WHERE username = ?");
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public  function modificarUsuario($id, $username, $password, $perfil)
    {
        $query = $this->conexion->prepare("UPDATE usuarios SET username = ?, password = ?, perfil = ? WHERE id = ?");
        $query->execute([$username, $password, $perfil, $id]);
        return $query->rowCount() > 0;
    }
}
