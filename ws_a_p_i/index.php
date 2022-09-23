<?php 
var_dump("HOLA");
require_once('conexion.php');
require_once('api.php');
require_once('cors.php');
//https://www.youtube.com/watch?v=AkpyJfT7dqk
//Obtiene los metodos que la aplicación utiliza
$method = $_SERVER['REQUEST_METHOD'];
var_dump($method);

// if($method == "GET"){
//     //Consulta por ID
// 	if(!empty($_GET['id'])){
// 			$id = $_GET['id'];
// 			$api = new Api();
// 			$obj = $api->getProducto($id);
// 			$json = json_encode($obj);
// 			echo $json;
// 		}
// }else{
//     //Consultado todo
// 	$vector = array();
// 	$api = new Api();
// 	$vector = $api->getProductos();
// 	$json = json_encode($vector );
// 	echo $json;
// }

// if($method == "POST"){
//     $json = null;
//     $data = json_decode(file_get_contents("php://input"), true);
//     $nombre = $data['nombre'];
//     $precio = $data['precio'];
//     $api = new Api();
//     $json = $api->addProducto($nombre, $precio);
//     echo $json;
// }


// if($method == "DELETE"){
//     $json = null;
//     $id = $_REQUEST['id'];
//     $api = new Api();
//     $json = $api->deleteProducto($id);
//     $json = json_encode($id);
//     echo $json;

// }


?>