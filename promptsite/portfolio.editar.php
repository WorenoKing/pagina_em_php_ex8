<?php
    require_once("prompt.crud.php");

    $id = $_POST['inputId'];
    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputTitulo'];
    $comentario = $_POST['inputComentario'];

    if(atualizarPortfolios($id, $imagem, $titulo, $comentario))
    {
        header('Location: index.php');
        exit;
    }

    header('Location: portfolio.edit.php?error=true');
    exit;