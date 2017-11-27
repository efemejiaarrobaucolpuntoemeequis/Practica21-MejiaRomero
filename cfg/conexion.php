<?php
    $servidor = "0.0.0.0";
    $usuario = "fermejia";
    $password = "";
    $db = "c9";
    $dbport = 3306;
    
        /* Create connection
    $db = new mysqli($servername, $usuario, $password, $db, $dbport);
    
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")"; */

    $conexion = mysql_connect($servidor, $usuario);
        mysql_set_charset('utf8');
    if (!$conexion) {
        die("No pudo conectarse:" . mysql_error());
    }
    else{
       //echo 'Conectado  satisfactoriamente al servidor <br>';
    }
    mysql_select_db($db, $conexion) or die(mysql_error($conexion));
?>