<?php
$mensajeError = "";
$mensajeExito = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registro"])) {
    if (empty(trim($_POST["Nombre"])) || empty(trim($_POST["Numero_Cuenta"])) || empty(trim($_POST["email"])) || empty(trim($_POST["Contraseña"])) || empty(trim($_POST["Confirmar_Contraseña"]))) {
        $mensajeError = "Error: Ingresar todos los datos por favor.";
    } else {
        if ($_POST["Contraseña"] !== $_POST["Confirmar_Contraseña"]) {
            $mensajeError = "La contraseña no coincide.";
        } else {
            $mensajeExito = "Registro exitoso.";
            $nombre = $_POST["Nombre"]; 
            $Numero_Cuenta = $_POST["Numero_Cuenta"]; 
            $email = $_POST["email"]; 
            $Contraseña = $_POST["Contraseña"]; 
        }
    }
}
?>

<!-- Mostrar mensajes en el HTML -->
<div style="color: red; font-size: 1em;"><?php echo $mensajeError; ?></div>
<div style="color: green; font-size: 1em;"><?php echo $mensajeExito; ?></div>

