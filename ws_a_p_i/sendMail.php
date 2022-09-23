<?php 
require_once('cors.php');
require_once('mail.php');
$method = $_SERVER['REQUEST_METHOD'];
var_dump("HOLA");
var_dump($method);

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    return $datos;
}

if($method == "POST"){
    $json = null;
    $data = json_decode(file_get_contents("php://input"), true);
    $sendMethod = $data['cMethod']; //Method request -> MethodEmail

    if($sendMethod == true){
        // $nombre = $data['name'];
        // $apellido = $data['surname'];
        // $telefono = $data['phone'];
        // $correo = $data['mail'];
        // $mensaje = $data['message'];


        $nombre = filtrado($data['name']);
        $apellido = filtrado($data['surname']);
        $telefono = filtrado($data['phone']);
        $correo = filtrado($data['mail']);
        $mensaje = filtrado($data['message']);

        $api = new Mail();
        $json = $api->correo($nombre, $apellido, $telefono, $correo, $mensaje);
        echo $json;
    }
}