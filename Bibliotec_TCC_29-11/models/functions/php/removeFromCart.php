<?php
  include("../../../controllers/config.php");
  include ("../../../controllers/protect.php");
  if(!isset($_SESSION)){
    session_start();
  }
  if($_SESSION['userType'] == "aluno"){
    $tableCarrinho = "carrinho".$_SESSION['biblioCod'];
    $alunoRm = $_SESSION['userCod'];
    $sqlcode = "SELECT * FROM $tableCarrinho WHERE aluno_rm = '$alunoRm'";
    $sqlquery = $conn->query($sqlcode);
    $qtdRowsAffected = $sqlquery->num_rows;
    if($qtdRowsAffected == 1){
      if(isset($_GET['livro1'])){
        $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro1 = carrinho_livro2, carrinho_livro2 = carrinho_livro3, carrinho_livro3 = null WHERE aluno_rm = '$alunoRm'";
        $sqlquery = $conn->query($sqlcode);
        echo "<script>alert('ação realizada com sucesso');</script>";
        header("Refresh: 0.5;../../../views/php/home.php?actions=carrinho");
      }
      if(isset($_GET['livro2'])){
        $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro2 = carrinho_livro3, carrinho_livro3 = null WHERE aluno_rm = '$alunoRm'";
        $sqlquery = $conn->query($sqlcode);
        echo "<script>alert('ação realizada com sucesso');</script>";
        header("Refresh: 0.5;../../../views/php/home.php?actions=carrinho");
      }
      if(isset($_GET['livro3'])){
        $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro3 = null WHERE aluno_rm = '$alunoRm'";
        $sqlquery = $conn->query($sqlcode);
        echo "<script>alert('ação realizada com sucesso');</script>";
        header("Refresh: 0.5;../../../views/php/home.php?actions=carrinho");
      }
    }
  }
?>