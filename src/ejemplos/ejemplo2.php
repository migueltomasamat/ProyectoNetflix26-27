<?php

    //POST
    /*$_POST['']*/

    //GET
if (isset($_GET['final']))
{
    $valorFinal = $_GET['final'];
}else{
    $valorFinal =10;
}

    for ($i=0;$i<$valorFinal;$i++){
        echo $i."</br>";
    }
