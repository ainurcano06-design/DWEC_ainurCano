<html>
    <head>
        <title>Examen de Desarrollo web en entorno servidor</title>
        <link rel="icon" type="image/png" sizes="32x32" href="../imagenes/favicon.jpeg">
        <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    </head>
    <body>
        <h1>Centro de Ayuda al Empleo</h1>
        <h2>
            <?php
                //Soldadura es el valor por defecto, si no se selecciona ninguna profesion en el formulario
                $tipo = "Soldadura";
                $profesionSQL = "Soldadura";

                //la variable $tipo se usa para mostrar el tipo de profesion en el encabezado de 
                // la tabla, y la variable $profesionSQL se usa para la consulta SQL
                if (isset($_REQUEST['tipo'])) {
                    
                //Si hemos seleccionado informatica, filtra por Informatica, y si no por Sociosanitaria
                //Si no se selecciona ninguna profesion, se mostrara la tabla de Soldadura
                    if ($_REQUEST['tipo'] == 'informatica') {
                        $tipo = 'Informatica';
                        $profesionSQL = "Informatica";

                    } elseif ($_REQUEST['tipo'] == 'socio') {
                        $tipo = "Sociosanitaria";
                        $profesionSQL = "Sociosanitaria";
                    }
                }
                //Muestra las solicitudes de la profesion seleccionada en el encabezado de la tabla
                echo "Solicitudes de $tipo";
            ?>
        </h2>

        <?php
            //Conexion a la base de datos CAE y sin contraseña
            $conexion = new mysqli("localhost", "root", "", "CAE");

            if ($conexion->connect_error) {
                die("Error de conexion: " . $conexion->connect_error);
            }
            //Busca solo las filas donde la columna profesion coincide con: Soldadura, Informatica o Sociosanitaria.
            $sql = "SELECT * FROM SOLICITUD WHERE profesion='$profesionSQL'";
            $resultado = $conexion->query($sql);

            //Crea la tabla HTML
            echo "<table border='1'>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Fecha Nac.</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Jornada</th>
                        <th>Euskera</th>
                        <th>Ingles</th>
                    </tr>";

            //Con fetch-assoc() obtenemos un array asociativo con los datos de cada fila, y los mostramos en la tabla HTML
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['apellidos']}</td>
                        <td>{$fila['dni']}</td>
                        <td>{$fila['f_nac']}</td>
                        <td>{$fila['tlf']}</td>
                        <td>{$fila['email']}</td>
                        <td>{$fila['jornada']}</td>
                        <td>" . ($fila['euskera'] ? "Si" : "No") . "</td>
                        <td>" . ($fila['ingles'] ? "Si" : "No") . "</td>
                      </tr>";
            }

            echo "</table>";

            //Cerrar conexion a la base de datos
            $conexion->close();
        ?>

        <!-- Boton para volver al formulario -->
        <button onclick="location.href='../html/index.html'">Volver al formulario</button>
    </body>
</html>
