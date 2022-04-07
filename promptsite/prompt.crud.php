<?php 

    require_once("conexao.php");

    function cadastrarPortfolio($imagem, $titulo, $comentario) 
    {
        $con = getConnection();

        $sql = "insert into portfolios(imagem, titulo, comentario) values (:imagem, :titulo, :comentario)";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descricao", $comentario);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

    function listaPortfolios()
    {
        $con = getConnection();
        $sql = "select * from portfolios";

        $stmt = $con->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        unset($con);
        unset($stmt);
        return $result;
    }

    function apagarPortfolio($id) 
    {
        $con = getConnection();

        $sql = "delete from portfolios where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

    function localizaPortfolioPeloID($id)
    {
        $con = getConnection();

        $sql = "select * from portfolios where id = :id";

        $result = $con->query($sql)->fetch(PDO::FETCH_OBJ);

        unset($con);
        unset($result);
        return $result;
    }

    function atualizarPortfolios($id, $imagem, $titulo, $comentario)
    {
        $con = getConnection();

        $sql = "update portfolios set imagem = :imagem, titulo = :titulo, comentario = :comentario where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":comentario", $comentario);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

   
    function listaPersona()
    {
        $con = getConnection();
        $sql = "select * from persona";

       $stmt = $con->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        unset($con);
        unset($stmt);
        return $result;
    }
?>