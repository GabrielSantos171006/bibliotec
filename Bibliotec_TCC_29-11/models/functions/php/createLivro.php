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
    $livro_capa = $_FILES['livro_capa']['name'];
    $pasta_capas_livro = "models/src/book/";
    $voltar = "../";
    $ext = strtolower(pathinfo($livro_capa, PATHINFO_EXTENSION));
    $livro_capa_renomear = $livro_cod.'.'.$ext;
    if(move_uploaded_file($_FILES['livro_capa']['tmp_name'], $voltar.$voltar.$voltar.$pasta_capas_livro.$livro_capa_renomear)){

    }else{
        
    }
    $livro_capa_final = $pasta_capas_livro.$livro_capa_renomear;
    $tableLivro = "livro".$biblioCod;
    $sqlcode = "INSERT INTO $tableLivro (Livro_Cod,Livro_Titulo,Livro_Autor,Livro_Capa,Livro_Exemplar,Livro_QtdDisponivel,Livro_QtdPaginas,Livro_Tombo,Livro_Classificacao,Livro_Nota,Livro_Vestibular,Livro_Area,Livro_Sinopse) VALUES('$livro_cod','$livro_titulo','$livro_autor','$livro_capa_final','$livro_exemplar','$livro_qtd_disponivel','$livro_qtd_paginas','$livro_tombo','$livro_classificacao','$livro_nota','$livro_vestibular','$livro_area','$livro_sinopse')";
    $sqlquery = $conn->query($sqlcode);
    echo "<script>alert('Livro Cadastrado com Sucesso!');</script>";
    header("Refresh: 0.5; ../../../views/php/home.php?actions=cadLivro");
  }
?>