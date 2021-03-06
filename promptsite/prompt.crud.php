<?php 

    require_once("conexao.php");

    function cadastrarPortfolios($imagem, $titulo, $comentario) 
    {
        $link = getConnection();

        $sql = "insert into portfolios (imagem, titulo, comentario) values ('{$imagem}', '{$titulo}', '{$comentario}')";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true; # retorno quando ocorrer sucesso na inserção

        return false; # retorno padrão(default)
    }

    function listaPortfolios()
    {
        $link = getConnection();
        $sql = "select * from portfolios";
        $result = mysqli_query($link, $sql);
        $listaPortfolios = array();
        while($portfolios = mysqli_fetch_object($result))
        {
            array_push($listaPortfolios, $portfolios);
        }
        mysqli_close($link);
        return $listaPortfolios;
    }

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
?>