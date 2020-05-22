<?php

//input db credentials here
$servername = "";
$username = "";
$password = "";
$dbname = "orogold";


//checks that all variables are included and not empty
if(!isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["telephono"])){
    $data = [ 'error' => 'Por favor incluya todas las entradas' ];
    echo json_encode($data);
}else if(empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["telephono"])){
    $data = [ 'error' => 'Por favor incluya todas las entradas' ];
    echo json_encode($data);
}
else{
    $nombre = $_POST["nombre"];    
    $email = $_POST["email"];    
    $telephono = $_POST["telephono"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    $data = [ 'error' => 'Error de la base de datos' ];
    echo json_encode($data);
}else{
// echo "Connected successfully";


//sql query string
$sql = "INSERT INTO reserva (nombre, email, telephono) VALUES ('$nombre', '$email', '$telephono')";


if ($conn->query($sql) === TRUE) {
    $data = [ 'success' => 'reserva realizada' ];
    echo json_encode($data);
} else {
    //checks for duplicate entry
    if(strpos($conn->error, 'Duplicate entry') !== false){
        $data = [ 'error' => 'Ya tienes una cita' ];
        echo json_encode($data);
    }
    //handles db error
    else{
        $data = [ 'error' => 'Error al crear la reserva' ];
        echo json_encode($data);
    }
}


$conn->close();
}
}
?>