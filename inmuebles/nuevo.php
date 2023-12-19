<?php
    include('cabecera.inc');
    include('conexion.inc');
    $error_message = '';
    $success_message = '';
    if (isset($_POST['codigo'], $_POST['titulo'], $_POST['categoria'], $_POST['precio'], $_FILES['imagen'])) {
        $codigo = $_POST['codigo'];
        $titulo = $_POST['titulo'];
        $carpetaImagenes = 'imagenes/';
        $nombreArchivo = uniqid() . '_' . $_FILES['imagen']['name'];
        $rutaImagen = $carpetaImagenes . $nombreArchivo;
        move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen);
        $imagen = $rutaImagen;
    
        $categoria = $_POST['categoria'];
        $precio = $_POST['precio'];
        $habitaciones = $_POST['habitaciones'];
        $localidad = $_POST['localidad'];
        $descripcion = $_POST['descripcion'];
    
        $insercion = $pdo->prepare("INSERT INTO inmuebles(codigo, titulo, imagen, categoria, precio, habitaciones, localidad, descripcion)" .
        " VALUES (:codigo, :titulo, :imagen, :categoria, :precio, :habitaciones, :localidad, :descripcion)");
    
        $insercion->bindParam(':codigo', $codigo);
        $insercion->bindParam(':titulo', $titulo);
        $insercion->bindParam(':imagen', $imagen);  
        $insercion->bindParam(':categoria', $categoria);
        $insercion->bindParam(':precio', $precio);
        $insercion->bindParam(':habitaciones', $habitaciones);
        $insercion->bindParam(':localidad', $localidad);
        $insercion->bindParam(':descripcion', $descripcion);
    
        $todos = "SELECT * FROM inmuebles";
        $uno = "SELECT * FROM inmuebles WHERE codigo = :codigo";
        if ($insercion->execute()) {
            header("Location: nuevo.php");
            $success_message= "Inserción realizada correctamente";
            $pdo = NULL;
            exit();
        } else {
            $error_message= "Error: No se han enviado todos los datos del formulario." . implode(" - ", $insercion->errorInfo());;
            $pdo = NULL;
            exit();
        }
    } else {
        $error_message= "Error: No se han enviado todos los datos del formulario.";
    }
  ?>
    <section id="formulario">
        <?php if ($error_message != ''): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <?php if ($success_message != ''): ?>
            <p style="color: green;"><?php echo $success_message; ?></p>
        <?php endif; ?>

        <h1>Nuevo inmueble</h1>
        <p>Rellena los datos a continuación para dar de alta el nuevo inmueble.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <label class="nuevo">
                <span>Código:</span>
                <input type="text" name="codigo" id="codigo" required>
            </label>
            <label class="nuevo">
                <span>Título:</span>
                <input type="text" name="titulo" id="titulo" size="100" required>
            </label>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen">
            <label class="nuevo">
                <span>Categoría:</span>
                <select name="categoria" id="categoria">
                    <option value="Piso">Piso</option>
                    <option value="Casa adosada">Casa adosada</option>
                    <option value="Chalet">Chalet</option>
                </select>
            </label>
            <label class="nuevo">
                <span>Precio:</span>
                <input type="number" name="precio" id="precio" min="0" required>
            </label>
            <label class="nuevo">
                <span>Habitaciones:</span>
                <input type="number" name="habitaciones" id="habitaciones" min="1" required>
            </label>
            <label class="nuevo">
                <span>Localidad:</span>
                <select name="localidad" id="localidad">
                    <option value="Alicante">Alicante</option>
                    <option value="San Vicente">San Vicente</option>
                    <option value="Mutxamel">Mutxamel</option>
                </select>
            </label>
            <label class="nuevo">
                <span>Descripción:</span>
                <textarea name="descripcion" id="descripcion" rows="5" cols="100" required>
                </textarea>
            </label>
            <input type="submit" value="Guardar datos">
        </form>
</body>
</html>