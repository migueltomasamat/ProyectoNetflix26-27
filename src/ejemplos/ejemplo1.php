<?php

    $opcion1footer="Home";
    $opcion2footer="Ejercicio Siguiente";
    $usuario = "Miguel";


    $variable = "Hola";
    echo "</br>";
    echo "<h3>Esto es un titulo</h3></br>";
    echo "<p class='parrafo'>Esto es un ejemplo de parrafo</p>";
        echo "</br>";
    echo 'El valor de la variable 1 es $variable';
        echo "</br>";
    echo "El valor de la variable 1 es $variable";
        echo "</br>";

        print("Hola esto es un mensaje con la función print");
        echo "</br>";

    echo "esto es una cadena"."y esto otra cadena"."</br>";

?>

<p>Bienvenido <?php
    if (isset($usuario)){
        echo "$usuario";
    }else{
        echo "Sin nombre";
    }
?>
</p>
<a href="principal.php">
    <?php echo "$opcion1footer" ?>
</a>
<a href="ejemplo2.php"><?=$opcion2footer?></a>
