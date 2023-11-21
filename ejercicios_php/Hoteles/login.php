<?php
session_start();
$error_message = '';

$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
    $host = "localhost";
    $nombreBD = "hoteles";
    $usuario = "root";
    $contraseña = "";
    $error_message = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8", $usuario, $contraseña);
        $consulta = $pdo->prepare("SELECT login, password FROM usuarios WHERE login = :login");
        $consulta->bindParam(':login', $login);
        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        
        if ($resultado && $resultado['password'] === $password) {
            $_SESSION['loginusu'] = $login;
            header("Location: index.php");
            exit;
        } else {
            $error_message = "Login o contraseña incorrectos.";
        }
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
    $pdo = null;

require 'cabecera.inc';
?>

<h1>Inicio de Sesión</h1>

<?php if ($error_message != ''): ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
<?php endif; ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" required>
    <br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <br>

    <input type="submit" value="Iniciar Sesión">
</form>
