<?php
  include("../../../controllers/config.php");
  include ("../../../controllers/protect.php");
  if(!isset($_SESSION)){
    session_start();
  }
  $tablePedidos = "pedidos".$_SESSION['biblioCod'];
  $alunoRm = $_SESSION['userCod'];
  $sqlcode = "SELECT * FROM $tablePedidos WHERE aluno_rm = $alunoRm AND pedido_visto = 0";
  $sqlquery = $conn->query($sqlcode);
  $qtdRowsAffected = $sqlquery->num_rows;
  if($qtdRowsAffected == 0){
    $livroCod = $_SESSION['livroCod'];
    $tableLivro = "livro".$_SESSION['biblioCod'];
    $sqlcode = "SELECT * FROM $tableLivro WHERE livro_cod='$livroCod'";
    $sqlquery = $conn->query($sqlcode);
    $livro = $sqlquery->fetch_assoc();
    if($livro['livro_qtdDisponivel'] > 1 && $livro['livro_status'] == 1){
      $sqlcode = "UPDATE $tableLivro SET livro_qtdDisponivel -=1 WHERE livro_cod = '$livroCod'";
    }else if($livro['livro_qtdDisponivel'] == 1 && $livro['livro_status'] == 1){
      $sqlcode = "UPDATE $tableLivro SET livro_qtdDisponivel -=1, livro_status = 0 WHERE livro_cod = '$livroCod'";
    }
    if($_SESSION['userType'] == "aluno"){
      $tableCarrinho = "carrinho".$_SESSION['biblioCod'];
      $alunoRm = $_SESSION['userCod'];
      $sqlcode = "SELECT * FROM $tableCarrinho WHERE aluno_rm = $alunoRm";
      $sqlquery = $conn->query($sqlcode);
      $qtdRowsAffected = $sqlquery->num_rows;
      if($qtdRowsAffected == 1){
        $carrinho = $sqlquery->fetch_assoc();
        if($carrinho['carrinho_livro1'] == null){
          $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro1 = '$livroCod' WHERE aluno_rm = '$alunoRm'";
          $sqlquery = $conn->query($sqlcode);
          echo "<script>alert('Livro adicionado ao carrinho');</script>";
          header("Refresh: 0.5; ../../../views/php/home.php?actions=book&livroCod={$livroCod}");
        }else if($carrinho['carrinho_livro2'] == null && $carrinho['carrinho_livro1'] != null){
          $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro2 = '$livroCod' WHERE aluno_rm = '$alunoRm'";
          $sqlquery = $conn->query($sqlcode);
          echo "<script>alert('Livro adicionado ao carrinho');</script>";
          header("Refresh: 0.5; ../../../views/php/home.php?actions=book&livroCod={$livroCod}");
        }else if($carrinho['carrinho_livro3'] == null  && $carrinho['carrinho_livro1'] != null  && $carrinho['carrinho_livro2'] != null){
          $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro3 = '$livroCod' WHERE aluno_rm = '$alunoRm'";
          $sqlquery = $conn->query($sqlcode);
          echo "<script>alert('Livro adicionado ao carrinho');</script>";
          header("Refresh: 0.5; ../../../views/php/home.php?actions=book&livroCod={$livroCod}");
        }
        else if($carrinho['carrinho_livro3'] != null  && $carrinho['carrinho_livro1'] != null  && $carrinho['carrinho_livro2'] != null){
          echo "<script>alert('Carrinho lotado');</script>";
          header("Refresh: 0.5; ../../../views/php/home.php?actions=book&livroCod={$livroCod}");
        }
      }else if($qtdRowsAffected == 0){
        $sqlcode = "INSERT INTO $tableCarrinho(aluno_rm) VALUES('$alunoRm')";
        $sqlquery = $conn->query($sqlcode);
        $sqlcode = "SELECT * FROM $tableCarrinho WHERE aluno_rm = $alunoRm";
        $sqlquery = $conn->query($sqlcode);
        $qtdRowsAffected = $sqlquery->num_rows;
        if($qtdRowsAffected == 1){
          $carrinho = $sqlquery->fetch_assoc();
          if($carrinho['carrinho_livro1'] == null){
            $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro1 = '$livroCod' WHERE aluno_rm = '$alunoRm'";
            $sqlquery = $conn->query($sqlcode);
            echo "<script>alert('Livro adicionado ao carrinho');</script>";
            header("Refresh: 0.5; ../../../views/php/home.php?actions=book&livroCod={$livroCod}");
          }else if($carrinho['carrinho_livro2'] == null && $carrinho['carrinho_livro1'] != null){
            $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro2 = '$livroCod' WHERE aluno_rm = '$alunoRm'";
            $sqlquery = $conn->query($sqlcode);
            echo "<script>alert('Livro adicionado à mochila');</script>";
            header("Refresh: 0.5; ../../../views/php/home.php?actions=book&livroCod={$livroCod}");
          }else if($carrinho['carrinho_livro3'] == null  && $carrinho['carrinho_livro1'] != null  && $carrinho['carrinho_livro2'] != null){
            $sqlcode = "UPDATE $tableCarrinho SET carrinho_livro3 = '$livroCod' WHERE aluno_rm = '$alunoRm'";
            $sqlquery = $conn->query($sqlcode);
            echo "<script>alert('Livro adicionado ao carrinho');</script>";
            header("Refresh: 0.5; ../../../views/php/home.php?actions=book&livroCod={$livroCod}");
          }
        }
      }
    }
  }else{
    echo "<script>alert('você tem um pedido pendente')</script>";
    header("Refresh: 0.5; ../../../views/php/home.php");
  }
  
?>