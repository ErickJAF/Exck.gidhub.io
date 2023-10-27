<?php
// Verifica las credenciales de inicio de sesión (usuario y contraseña)
$usuario_valido = "U";
$contrasena_valida = "C";

if ($_POST['username'] === $usuario_valido && $_POST['password'] === $contrasena_valida) {
    // Las credenciales son válidas, redirige al usuario a una página de éxito o realiza alguna acción
    header("Location: Menu.html");
    exit;
} else {
    // Las credenciales son inválidas, redirige al usuario a una página de error o muestra un mensaje de error
    header("Location: inicio_fallido.php");
    exit;
}
?>