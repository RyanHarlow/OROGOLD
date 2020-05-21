<?php



$servername = "";
$username = "";
$password = "";
$dbname = "orogold";

if(!isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["telephono"])){
    $data = [ 'error' => 'Must include all inputs' ];
    echo json_encode($data);
}

if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];    
}
if (isset($_POST["email"])) {
    $email = $_POST["email"];    
}
if (isset($_POST["telephono"])) {
    $telephono = $_POST["telephono"];    
}




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$sql = "INSERT INTO reserva (nombre, email, telephono) VALUES ('$nombre', '$email', '$telephono')";

if ($conn->query($sql) === TRUE) {
    $data = [ 'success' => 'reserva realizada' ];
    echo json_encode($data);
} else {
    if(strpos($conn->error, 'Duplicate entry') !== false){
        $data = [ 'error' => 'Duplicate Reservation' ];
        echo json_encode($data);
    }else{
        $data = [ 'error' => 'Error creating reservation' ];
        echo json_encode($data);
    }
}


$conn->close();

?>