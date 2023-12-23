<?php

    $usuarios = array(
        'josevicente' => 'carratala',
        'juan' => 'lopez'
    );

    if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
        $usuario = $_SERVER['PHP_AUTH_USER'];
        $contrasena = $_SERVER['PHP_AUTH_PW'];
        // Si existe en el array de usuarios
        if(
            array_key_exists($usuario,$usuarios) 
            && 
            $usuarios[$usuario] == $contrasena
        ){
            // Todo ok, te muestro la info
            $clientes = [];
            array_push($clientes,array('nombre'=>'Juan'));
            array_push($clientes,array('nombre'=>'Jose Vicente'));
            $json = json_encode($clientes,JSON_PRETTY_PRINT);
            echo $json;
        }else{
            // No existe, acceso no permitido
            header('HTTP/1.1 401 Unauthorized');
            header('WWW-Authenticate: Basic-realm="Acceso restringido"');
            echo "Acceso no autorizado de verdad";
        }
    }else{
        header('HTTP/1.1 401 Unauthorized');
        header('WWW-Authenticate: Basic realm="Acceso restringido"');
        echo "No autorizado";
    }

   
?>
