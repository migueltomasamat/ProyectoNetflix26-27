<html>
<head>
    <title>Insertar una nueva película</title>
</head>
<body>
    <main>

        <form method="post" action="/movie" enctype="multipart/form-data">
            <label for="inputTitulo">Titulo de la pélicula</label>
            <input type="text" id="inputTitulo" name="titulo"><br>

            <label for="inputDuracion">Duración de la pelicula</label>
            <input type="number" id="inputDuracion" name="duracion"><br>

            <label for="inputDescripcion">Introduce la descripcion</label>
            <textarea id="inputDescripcion" name="descripcion" rows="5" cols="10"></textarea><br>

            <label for="inputPortada">Inserta la portada</label>
            <input type="file" id="inputPortada" name="portada">

            <select id="optionCategoria" name="categoria">
                <option>Todos lo publicos</option>
                <option>+12</option>
                <option>+18</option>
            </select>
            <br>

            <input type="checkbox" id="inputGeneroComedia" name="genero[]" value="comedia">
            <label for="optionGeneroComedia">Comedia</label>

            <br>

            <input type="checkbox" id="inputGeneroDrama" name="genero[]" value="drama">
            <label for="optionGeneroDrama">Drama</label>
            <br>

            <input type="checkbox" id="inputGeneroTerror" name="genero[]" value="terror">
            <label for="optionGeneroTerror">Terror</label>
            <br>


            <input type="submit" name="Enviar">






        </form>

    </main>

</body>
</html>
