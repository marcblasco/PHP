<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES);
    foreach ($usuarios as $usuario) {
        list($user, $pass) = explode(':', $usuario);
        if ($user === $login && $pass === $password) {
            $_SESSION['loginusu'] = $login;
            header("Location: index.php");
            exit;
        }
    }

    $error_message = "Login o contraseña incorrectos.";
}

require 'cabecera.inc';
?>

<h1>Inicio de Sesión</h1>

<?php if (isset($error_message)): ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
<?php endif; ?>

<form method="post" action="">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" required>
    <br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <br>

    <input type="submit" value="Iniciar Sesión">
</form>
