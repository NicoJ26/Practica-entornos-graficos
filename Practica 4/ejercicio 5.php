<?php 
 
    function comprobar_nombre_usuario($nombre_usuario){  
        //compruebo la longitud.  
        if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){  
            echo $nombre_usuario . " no es válido<br>";  
            return false;  
        }  
        
        //compruebo que los caracteres sean los permitidos  
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789
        _";  
        for ($i=0; $i<strlen($nombre_usuario); $i++){  
            if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){  
                echo $nombre_usuario . " no es válido<br>";  
                return false;  
            }  
        }  
        echo $nombre_usuario . " es válido<br>";  
        return true;  
    }  

?>

/* Probado con ej:
    comprobar_nombre_usuario("Nico_123");

    comprobar_nombre_usuario("ab");

    comprobar_nombre_usuario("usuario$");

    comprobar_nombre_usuario("NicoJ2025");

    comprobar_nombre_usuario("nombre_demasiado_largo_12345");
*/