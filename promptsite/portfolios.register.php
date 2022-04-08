<?php
    require_once("prompt.crud.php");

    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $comentario = filter_input(INPUT_POST, 'inputComentario', FILTER_SANITIZE_SPECIAL_CHARS);

    if(cadastrarPortfolio($imagem, $titulo, $comentario))
    {
        header('Location: index.php');
        exit;
    }

    header('Location: cadastro.form.php?error=true');
    exit;