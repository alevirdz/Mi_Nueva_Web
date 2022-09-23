<?php 

class Api {
    public function getProductos(){
        $vector = array();
        $conexion = new Conexion();
        $db = $conexion->getConexion();

        //Query
        $sql = "SELECT * FROM productos";
        $query = $db->prepare($sql);
        $query->execute();
        //Condición
        while($fila = $consulta->fetch()){
            $vector [] = array(
                "id" => $fila['id'],
                "nombre" => $fila['nombre'],
                "precio" => $fila['precio']
            );
        }
        return $vector;
    }


    public function getProducto($id){
        $vector = array();
        $conexion = new Conexion();
        $db = $conexion->getConexion();

        //Query
        $sql = "SELECT * FROM productos WHERE id=:id";
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        //Condición
        while($fila = $consulta->fetch()){
            $vector [] = array(
                "id" => $fila['id'],
                "nombre" => $fila['nombre'],
                "precio" => $fila['precio']
            );
        }
        return $vector[0];
    }

    public function addProducto($nombre, $precio){
        $conexion = new Conexion();
        $db = $conexion->getConexion();

        //Query
        $sql = "INSERT INTO producto (nombre, precio) VALUES (:nombre, :precio)";
        $query = $db->prepare($sql);
        $query->bindParam(':nombre', $nombre);
        $query->bindParam(':precio', $precio);
        $query->execute();
        //Response
        return '{"msg": "producto agregado"}';
    }


    public function deleteProducto($id){
        $conexion = new Conexion();
        $db = $conexion->getConexion();

        //Query
        $sql = "DELETE FROM producto WHERE id=:id";
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        //Response
        return '{"msg": "producto eliminado"}';
    }



}