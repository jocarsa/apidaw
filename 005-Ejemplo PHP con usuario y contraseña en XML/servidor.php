<?php
$usuarios = array(
    'josevicente' => 'carratala',
    'juan' => 'lopez'
);

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
    $usuario = $_SERVER['PHP_AUTH_USER'];
    $contrasena = $_SERVER['PHP_AUTH_PW'];
    // Si existe en el array de usuarios
    if (
        array_key_exists($usuario, $usuarios)
        &&
        $usuarios[$usuario] == $contrasena
    ) {
        // Todo ok, te muestro la info en formato XML
        $clientes = array();
        $clientes[] = 'Juan';
        $clientes[] = 'Jose Vicente';

        // Crear un objeto SimpleXMLElement para generar el XML
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><clientes></clientes>');
        
        foreach ($clientes as $cliente) {
            $xml->addChild('cliente', $cliente);
        }

        // Encabezado HTTP para indicar que la respuesta es XML
        header('Content-Type: application/xml');

        // Imprimir el XML
        echo $xml->asXML();
    } else {
        // No existe, acceso no permitido
        header('HTTP/1.1 401 Unauthorized');
        header('WWW-Authenticate: Basic realm="Acceso restringido"');
        echo "Acceso no autorizado de verdad";
    }
} else {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Acceso restringido"');
    echo "No autorizado";
}
?>
