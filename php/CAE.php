<?php
//Conexion a la base de datos CAE y sin contraseña
$conexion = new mysqli("localhost", "root", "", "CAE");

//Si falla la conexion, se muestra un mensaje de error y se detiene la ejecucion del script
if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}

//Recoge los datos del formulario enviados mediante POST
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$f_nac = $_POST['f_nac'];
$tlf = $_POST['tlf'];
$email = $_POST['email'];
$profesion = $_POST['profesion'];   
$jornada = $_POST['jornada'];

//Convierte los checkboxes a booleanos, si esta marcada la casilla se asigna 1, si no se asigna 0
$euskera = isset($_POST['euskera']) ? 1 : 0;
$ingles = isset($_POST['ingles']) ? 1 : 0;

//Crea un INSERT que recoge los datos del formulario y los inserta en las columnas correspondientes de la tabla SOLICITUD
$sql = "INSERT INTO SOLICITUD (nombre, apellidos, dni, f_nac, tlf, email, profesion, jornada, euskera, ingles)
        VALUES ('$nombre', '$apellidos', '$dni', '$f_nac', '$tlf', '$email', '$profesion', '$jornada', $euskera, $ingles)";

//Si la consulta se ejecuta correctamente, se muestra el mensaje "Solicitud enviada correctamente.", si no, se muestra un mensaje de error
if ($conexion->query($sql) === TRUE) {
    echo "Solicitud enviada correctamente.";
} else {
    echo "Error: " . $conexion->error;
}

//Cerramos la conexion a la base de datos
$conexion->close();

//Nos envia al index.html para volver a rellenar el formulario
echo "<br><br><button onclick=\"location.href='../html/index.html'\">Volver</button>";
?>

