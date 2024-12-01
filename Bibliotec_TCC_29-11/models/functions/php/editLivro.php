<?php
  include("../../../controllers/config.php");
  include ("../../../controllers/protect.php");
  if(!isset($_SESSION)){
      session_start();
  }
  if($_SESSION['userType'] = "func"){
    $biblioCod = $_SESSION['biblioCod'];
    $livro_cod = $_POST['livro_cod'];
    $livro_tombo = $_POST['livro_tombo'];
    $livro_titulo = $_POST['livro_titulo'];
    $livro_autor = $_POST['livro_autor'];
    $livro_exemplar = $_POST['livro_exemplar'];
    $livro_area = $_POST['livro_area'];
    $livro_qtd_disponivel = $_POST['livro_qtd_disponivel'];
    $livro_qtd_paginas = $_POST['livro_qtd_pagina'];
    $livro_classificacao = $_POST['livro_classificacao'];
    $livro_vestibular = $_POST['livro_vestibular'];
    $livro_nota = $_POST['livro_nota'];
    $livro_sinopse = $_POST['livro_sinopse'];
    $tableLivro = "livro".$biblioCod;
    if(isset($_POST['trocar_img'])){
      $livro_capa = $_FILES['livro_capa']['name'];
      $pasta_capas_livro = "models/src/book/";
      $voltar = "../";
      $ext = strtolower(pathinfo($livro_capa, PATHINFO_EXTENSION));
      $livro_capa_renomear = $livro_cod.'.'.$ext;
      if(move_uploaded_file($_FILES['livro_capa']['tmp_name'], $voltar.$voltar.$voltar.$pasta_capas_livro.$livro_capa_renomear)){
  
      }else{
          
      }
      $livro_capa_final = $pasta_capas_livro.$livro_capa_renomear;
      $sqlcode = "UPDATE $tableLivro SET livro_titulo = '$livro_titulo',livro_area = '$livro_area', livro_autor = '$livro_autor', livro_capa = '$livro_capa_final',livro_classificacao = '$livro_classificacao', livro_exemplar = '$livro_exemplar', livro_nota = '$livro_nota', livro_qtdDisponivel = '$livro_qtd_disponivel', livro_qtdPaginas = '$livro_qtd_paginas', livro_sinopse = '$livro_sinopse', livro_vestibular = '$livro_vestibular' WHERE livro_cod = '$livro_cod'";
      $sqlquery = $conn->query($sqlcode);
      echo "<script>alert('Livro Alterado com Sucesso!');</script>";
      header("Refresh: 0.5; ../../../views/php/home.php?actions=listar");
    }else{
      $sqlcode = "UPDATE $tableLivro SET livro_titulo = '$livro_titulo',livro_area = '$livro_area', livro_autor = '$livro_autor',livro_classificacao = '$livro_classificacao', livro_exemplar = '$livro_exemplar', livro_nota = '$livro_nota', livro_qtdDisponivel = '$livro_qtd_disponivel', livro_qtdPaginas = '$livro_qtd_paginas', livro_sinopse = '$livro_sinopse', livro_vestibular = '$livro_vestibular' WHERE livro_cod = '$livro_cod'";
      $sqlquery = $conn->query($sqlcode);
      echo "<script>alert('Livro Alterado com Sucesso!');</script>";
      header("Refresh: 0.5; ../../../views/php/home.php?actions=listar");
    }
  
  }
?>