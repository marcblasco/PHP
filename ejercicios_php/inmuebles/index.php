<?php include('cabecera.inc'); ?>
    <section id="favoritos">
        <h1>Portal inmobiliario</h1>
        <p>En esta sección aparecerán tus inmuebles favoritos. Puedes dar de alta nuevos inmuebles, o buscar tus favoritos desde el menú superior.</p>
        <section id="resultados">
            <!-- Listar inmuebles favoritos aquí con PHP -->
            <!-- Aquí dejamos un contenido estático que sirva
                 de guía a cómo debe quedar el listado. Este contenido
                 deberá quitarse y reemplazarse por el que se obtenga
                 de los favoritos -->
                 <section class="inmueble">
                <h4>Bungalow zona Universidad</h4>
                <p><img src="imagenes/img01.jpg"></p>
                <p>3 habitaciones - 210000 eur</p>
                <p>San Vicente</p>
                <p><a href="ficha.php">Ver ficha</a></p>
            </section>
            <section class="inmueble">
                <h4>Apartamento Albufera</h4>
                <p><img src="imagenes/img02.jpg"></p>
                <p>2 habitaciones - 250000 eur</p>
                <p>Alicante</p>
                <p><a href="ficha.php">Ver ficha</a></p>
            </section>
        </section>
        <p><a href="cerrar_sesion.php">Limpiar favoritos</a></p>
    </section>
</body>
</html>