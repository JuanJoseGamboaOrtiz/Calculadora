<?php

$texto=$_GET['ans'];

try{
    $resultado=eval("return $texto;");
    echo dechex($resultado); 
    echo "<br>";
    echo $resultado;
}catch(\Throwable $th){
    echo "La operación no se puede realizar";
}




?>