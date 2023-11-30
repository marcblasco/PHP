<?php include('cabecera.inc'); ?>
    <section id="formulario">
        <h1>Buscador de inmuebles</h1>
        <p>Rellena tus criterios de búsqueda en el formulario para filtrar los inmuebles.</p>
        <p>Haz clic en el enlace correspondiente a cada inmueble para añadirlo a favoritos y poderlo ver en la página inicial.</p>
        <form action="" method="post">
            <label>
                <span>Categoría:</span>
                <select name="categoria" id="categoria">
                    <option value="Piso">Piso</option>
                    <option value="Casa adosada">Casa adosada</option>
                    <option value="Chalet">Chalet</option>
                </select>
            </label>
            <label>
                <span>Precio máximo:</span>
                <input type="text" name="precio" id="precio" size="5">
            </label>
            <label>
                <span>Habitaciones mínimas:</span>
                <input type="text" name="habitaciones" id="habitaciones" size="5">
            </label>
            <label>
                <span>Localidad:</span>
                <select name="localidad" id="localidad">
                    <option value="Alicante">Alicante</option>
                    <option value="San Vicente">San Vicente</option>
                    <option value="Mutxamel">Mutxamel</option>
                </select>
            </label>
            <input type="submit" value="Buscar">
        </form>
        <?php
            include('conexion.inc');         
            $sql = "SELECT * FROM inmuebles";
            $consulta = $pdo->query($sql);
            foreach ($consulta as $fila) {
                $inmueblesArray[] = [
                    'codigo' => trim($fila['codigo']),
                    'titulo' => trim($fila['titulo']),
                    'habitaciones' => (int)trim($fila['habitaciones']),
                    'precio' => (float)trim($fila['precio']),
                    'categoria' => trim($fila['categoria'])
                ];
            }
        
            $categoriaFiltro = isset($_POST['categoria']) ? $_POST['categoria'] : null;
            $habitacionesFiltro = isset($_POST['habitaciones']) ? (int)$_POST['habitaciones'] : null;
            $precioFiltro = isset($_POST['precio']) ? (float)$_POST['precio'] : null;
        
            $inmueblesFiltrados = array_filter($inmueblesArray, function ($inmueble) use ($categoriaFiltro, $habitacionesFiltro, $precioFiltro) {
                return ((empty($categoriaFiltro) || $inmueble['categoria'] === $categoriaFiltro) &&
                    (empty($habitacionesFiltro) || $inmueble['habitaciones'] >= $habitacionesFiltro) &&
                    (empty($precioFiltro) || $inmueble['precio'] <= $precioFiltro));
            });
            echo '<section id="resultados">';
            foreach ($inmueblesFiltrados as $row) {
                echo '<section class="inmueble">';
                echo '<h4>' . $row['titulo'] . '</h4>';
                echo '<p>' . $row['categoria'] . '</p>';
                echo '<p>' . $row['habitaciones'] . ' habitaciones - ' . $row['precio'] . ' eur</p>';
                echo '<a href="index.php?codigo_inmueble=' . $row['codigo'] . '" class="btn-add-favoritos">Añadir a favoritos</a>';
                echo '</section>';
            }
            echo '</section>';

            ?>
    </section>
</body>
</html>