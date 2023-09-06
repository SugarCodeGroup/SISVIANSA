<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rut = $_POST["txtRUT"];
    $nombreEmpresa = $_POST["txtNombreEmpresa"];
    $rubro = $_POST["txtRubro"];
    $documentoResponsable = $_POST["selDocumento"];
    $documentoValor = $_POST["txtDocumento"];
    $nombreResponsable = $_POST["txtNombre"];
    $apellidoResponsable = $_POST["txtApellido"];
    $emailResponsable = $_POST["txtMail"];

    // Crear una cadena con los datos de la empresa y el responsable
    $empresaData = "R.U.T.: " . $rut . "\n" .
                   "Nombre de la Empresa: " . $nombreEmpresa . "\n" .
                   "Rubro: " . $rubro . "\n\n" .
                   "DATOS DEL RESPONSABLE\n" .
                   "Documento de Identidad: " . $documentoResponsable . "\n" .
                   "Número de documento: " . $documentoValor . "\n" .
                   "Nombre: " . $nombreResponsable . "\n" .
                   "Apellido: " . $apellidoResponsable . "\n" .
                   "Correo electrónico: " . $emailResponsable . "\n\n";

    $filePath = "empresas.txt";

    // Agregar los datos al archivo de texto
    file_put_contents($filePath, $empresaData, FILE_APPEND);

    echo "Datos de empresa registrados con éxito.";
}
?>