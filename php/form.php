<?php 
    session_start();
    require_once("config.php");

    if (isset($_POST['submit'])) {
        $nombre_y_apellido = mysqli_real_escape_string($conn, $_POST['nombre-apellido']);
        $fecha = mysqli_real_escape_string($conn, $_POST['fecha']);
        $sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
        $direccion = mysqli_real_escape_string($conn, $_POST['direccion']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $cell = mysqli_real_escape_string($conn, $_POST['cell']);
        $hermanos = mysqli_real_escape_string($conn, $_POST['hermanos']);
        $seguro = mysqli_real_escape_string($conn, $_POST['seguro']);
        $sangreTipo = mysqli_real_escape_string($conn, $_POST['sangreTipo']);
        $enfermedad = mysqli_real_escape_string($conn, $_POST['enfermedad']);
        $emergencia = mysqli_real_escape_string($conn, $_POST['emergencia']);

        //chequea que no haya campos vacios
        $post = (isset($nombre_y_apellido) && !empty($fecha)) && (isset($sexo)
        && !empty($direccion)) && (isset($hermanos) && !empty($seguro)
        && !empty($sangreTipo) && !empty($emergencia));

        if (!$post) {
            array_push($errors, 'campo_vacio');
            header("Location: ../index.html");
        }

        //Enviar datos a la base de datos
        if (count($errors) == 0) {
            $query = "INSERT INTO students(nombre_y_apellido, fecha, sexo, direccion, telefono, celular, hermanos, seguro, sangre_tipo, alergia_enfermedad, contacto_emergencia)
            VALUES('$nombre_y_apellido', '$fecha', '$sexo', '$direccion', '$tel', '$cell', '$hermanos', '$seguro', '$sangreTipo', '$enfermedad', '$emergencia')";

            mysqli_query($conn, $query);

            echo '
                <script>
                    alert("A new user has been created");
                    window.location = "../index.html";
                </script>
            ';
        }
        exit;
    }

    $conn->close();
?>