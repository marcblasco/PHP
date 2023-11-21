<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agencia inmobiliaria</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="nuevo.php">Nuevo inmueble</a></li>
                <li><a href="buscar.php">Buscador</a></li>
            </ul>
        </nav>
    </header>
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

        <section id="resultados">
            <!-- Aquí dejamos un contenido estático que sirva
                 de guía a cómo debe quedar el listado. Este contenido
                 deberá quitarse y reemplazarse por el que se obtenga
                 de la base de datos -->
            <section class="inmueble">
                <h4>Bungalow zona Universidad</h4>
                <p>3 habitaciones - 210000 eur</p>
                <p>San Vicente</p>
                <p><a href="ficha.php">Ver ficha</a><a href="">Añadir a favoritos</a></p>
            </section>
            <section class="inmueble">
                <h4>Apartamento Albufera</h4>
                <p>2 habitaciones - 250000 eur</p>
                <p>Alicante</p>
                <p><a href="ficha.php">Ver ficha</a><a href="">Añadir a favoritos</a></p>
            </section>
            <section class="inmueble">
                <h4>Chalet en Moralet</h4>
                <p>2 habitaciones - 180000 eur</p>
                <p>Alicante</p>
                <p><a href="ficha.php">Ver ficha</a><a href="">Añadir a favoritos</a></p>
            </section>
        </section>
    </section>
</body>
</html>