<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento = $_POST["selDocumento"];
    $documentoValor = $_POST["txtDocumento"];
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $email = $_POST["txtMail"];

    // Crear una cadena con los datos del usuario
    $userData = "Documento: " . $documento . "\n" .
                "Número de documento: " . $documentoValor . "\n" .
                "Nombre: " . $nombre . "\n" .
                "Apellido: " . $apellido . "\n" .
                "Correo electrónico: " . $email . "\n\n";

    $filePath = "clientes.txt";

    // Agregar los datos al archivo de texto
    file_put_contents($filePath, $userData, FILE_APPEND);

    echo "Datos de usuario guardados con éxito.";
}
?>