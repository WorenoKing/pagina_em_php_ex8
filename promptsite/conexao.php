<?php 

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("SCHEMA", "promptsite");

    function getConnection()
    {
        $key = "strval"; # a variavel $key vai se comportar como a função strval
        $con = new PDO("mysql:host={$key(HOSTNAME)};dbname={$key(SCHEMA)}", USERNAME, PASSWORD);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }
?>