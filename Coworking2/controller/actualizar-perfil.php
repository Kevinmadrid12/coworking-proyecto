<?php
// Incluir el archivo de conexión a la base de datos
require_once "../model/conected.php";

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han recibido los datos esperados
    if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["correo"])) {
        // Obtener los datos del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];

        // Preparar la consulta SQL
        $sql = "UPDATE usuario SET first_name=?, last_name=? WHERE email=?";

        // Preparar la declaración
        $stmt = $conn->prepare($sql);

        // Verificar si la preparación de la consulta ha sido exitosa
        if ($stmt === false) {
            die("Error de preparación de consulta: " . $conn->error);
        }

        // Vincular los parámetros y ejecutar la consulta
        $stmt->bind_param("sss", $nombre, $apellido, $correo);
        $stmt->execute();

        // Verificar si la ejecución de la consulta ha sido exitosa
        if ($stmt->affected_rows > 0) {
            header("Location: ../html/perfil.html");
        } else {
            echo "No se pudo actualizar el perfil.";
        }

        // Cerrar la conexión y liberar los recursos
        $stmt->close();
        $conn->close();
    } else {
        echo "No se recibieron todos los datos necesarios del formulario.";
    }
} else {
    echo "Acceso no válido al script.";
}
?>
