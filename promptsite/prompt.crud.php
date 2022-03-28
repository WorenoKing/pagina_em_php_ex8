<?php 

require_once("conexao.php");

    function listaPersona()
    {
        $link = getConnection();
        $sql = "select * from persona";
        $result = mysqli_query($link, $sql);
        $listaPersona = array();
        while($persona = mysqli_fetch_object($result))
        {
            array_push($listaPersona, $persona);
        }
        mysqli_close($link);
        return $listaPersona;
    }

    function listaPortfolios()
    {
        $link = getConnection();
        $sql = "select * from portfolios";
        $result = mysqli_query($link, $sql);
        $listaPortfolios = array();
        while($portfolios = mysqli_fetch_object($result))
        {
            array_push($listaPersona, $portfolios);
        }
        mysqli_close($link);
        return $listaPortfolios;
    }
?>