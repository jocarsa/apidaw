
<?php
    $clientes = [];
    array_push($clientes,array('nombre'=>'Juan'));
    array_push($clientes,array('nombre'=>'Jose Vicente'));
    $json = json_encode($clientes,JSON_PRETTY_PRINT);
    echo $json;
?>