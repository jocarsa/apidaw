<!doctype html>
<html>
    <head>
    </head>
    <body>
        <?php
            $url = "http://127.0.0.1/apidaw/004-Ejemplo%20PHP%20con%20usuario%20y%20contrase%c3%b1a/servidor.php";
        
            $usuario = "josevicente";
            $contrasena = "carratala";
            $curl = curl_init($url);
            curl_setopt($curl,CURLOPT_HTTPAUTH,CURLAUTH_BASIC);
            curl_setopt($curl,CURLOPT_USERPWD,"$usuario:$contrasena");
        
            curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        
            $respuesta = curl_exec($curl);
            var_dump($respuesta);
                
        ?>
    </body>
</html>