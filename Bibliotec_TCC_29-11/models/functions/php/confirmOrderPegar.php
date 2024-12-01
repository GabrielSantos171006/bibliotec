<?php
  include("../../../controllers/config.php");
  include ("../../../controllers/protect.php");
  if(!isset($_SESSION)){
    session_start();
  }
  if($_SESSION['userType'] == "aluno"){
    $tablePedido = "pedidos".$_SESSION['biblioCod'];
    $alunoRm = $_SESSION['userCod'];
    $biblioCod = $_SESSION['biblioCod'];
    $tableCarrinho = "carrinho".$_SESSION['biblioCod'];
    $sqlcode = "SELECT * FROM $tableCarrinho WHERE aluno_rm = '$alunoRm'";
    $sqlquery = $conn->query($sqlcode);
    $qtdRowAffected = $sqlquery->num_rows;
    if($qtdRowAffected == 1){
      $carrinho = $sqlquery->fetch_assoc();
      $carrinhoLivro1 = $carrinho['carrinho_livro1'];
      $carrinhoLivro2 = $carrinho['carrinho_livro2'];
      $carrinhoLivro3 = $carrinho['carrinho_livro3'];
      $sqlcode = "INSERT INTO $tablePedido(pedido_livro1,pedido_livro2,pedido_livro3,aluno_rm,biblio_cod) VALUES('$carrinhoLivro1','$carrinhoLivro2','$carrinhoLivro3','$alunoRm','$biblioCod')";
      $sqlquery = $conn->query($sqlcode);
      $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro1 = null, carrinho_livro2 = null, carrinho_livro3 = null WHERE aluno_rm = '$alunoRm'";
      $sqlquery = $conn->query($sqlcode);
      echo "<script>alert('pedido realizado');</script>";
      header("Refresh: 0.5; ../../../views/php/home.php?actions=");
    }    
  }
?>