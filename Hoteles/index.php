<?php include('cabecera.inc'); ?>
<h2>Listado de Hoteles</h2>   
<script>
        function cargarHotelesFiltrados() {
            var formData = new FormData(document.getElementById('filtrarForm'));

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                let elemento = document.getElementById("lista_hoteles");
                let hoteles = JSON.parse(this.responseText);
                var tablaHtml = "<table border='1'>";
                tablaHtml += "<tr><th>Nombre</th><th>Provincia</th><th>Estrellas</th></tr>";
                hoteles.forEach(function(hotel) {
                    tablaHtml += "<tr><td>" + hotel.nombre + "</td><td>" + hotel.provincia + "</td><td>" + hotel.estrellas + " estrellas</td></tr>";
                });
                tablaHtml += "</table>";
                elemento.innerHTML = tablaHtml;
            }
        };

            xhttp.open("POST", "listado.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(new URLSearchParams(formData).toString());
        }
    </script>

<form method="post" id="filtrarForm">
    <label for="provincia">Provincia:</label>
    <select id="provincia" name="provincia">
        <option value="Alicante">Alicante</option>
        <option value="Barcelona">Barcelona</option>
        <option value="Sevilla">Sevilla</option>
    </select>

    <label for="estrellas">Estrellas:</label>
    <select id="estrellas" name="estrellas">
        <option value="2">2 o mas</option>
        <option value="3">3 o mas</option>
        <option value="4">4 o mas</option>
        <option value="5">5</option>
    </select>
</form>
<br>
<button onclick="cargarHotelesFiltrados()">Buscar</button>
    <div id="lista_hoteles"></div>
    <br>

</body>

</html>