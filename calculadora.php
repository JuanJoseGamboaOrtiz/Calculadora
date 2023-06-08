<?php

$texto=$_GET['ans'];

try{
    $resultado=eval("return $texto;");
    echo "<br>";
    echo "El resultado de la operación (". $texto. ") es :" . $resultado;
}catch(\Throwable $th){
    echo "La operación no se puede realizar";
}




?>