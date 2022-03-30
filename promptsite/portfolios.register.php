<?php 
    require_once('prompt.crud.php');

    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputTitulo'];
    $comentario = $_POST['inputComentario'];

    if(cadastrarPortfolios($imagem, $titulo, $comentario))
    {
        header('Location: index.php');
        exit;
    }

    header('Location: cadastro.form.php?error=true');
    exit;