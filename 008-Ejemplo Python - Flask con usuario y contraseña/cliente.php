<!doctype html>
<html>
    <head>
    </head>
    <body>
        <?php
            $url = "http://localhost:8081/api/data";
        
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