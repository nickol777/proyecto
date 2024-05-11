<?php
$servername = "sql304.infinityfree.com";
$username = "if0_36233838";
$password = "o5zYKb7v0tI";
$dbname = "if0_36233838_musica";
//holaaaaaaaaaa

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre_artista:$_POST['nombre'];
$genero:$_POST['genero'];
$fecha_debut:$_POST['fecha'];
$nombre_album:$_POST['album'];
$fecha_estreno:$_POST['estreno'];
$valoracion:$_POST['valoracion']:
$calificacion:$_POST['calificacion'];
$fecha_grabacion:$_POST['grabacion'];
$comentarios:$_POST['comentario'];

$sql = "INSERT INTO musica (nombre, genero, fecha, album, estreno, valoracion, calificacion, grabacion, comentario)
 VALUES ('$nombre_artista', '$genero', '$fecha_debut', $nombre_album, $fecha_estreno, $valoracion, $calificacion, $fecha_grabacion, $comentarios)";

if ($conn->query($sql) === TRUE) {
    echo "Formulario enviado con exito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>