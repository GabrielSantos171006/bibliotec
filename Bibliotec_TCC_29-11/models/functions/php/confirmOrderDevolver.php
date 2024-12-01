<?php
  include("../../../controllers/config.php");
  include ("../../../controllers/protect.php");
  if(!isset($_SESSION)){
    session_start();
  }
  if($_SESSION['userType'] == "aluno"){
    $alunoRm = $_SESSION['userCod'];
    $tableEmprestimo = "emprestimo".$_SESSION['biblioCod'];
    $sqlcode = "SELECT * FROM $tableEmprestimo WHERE aluno_rm = '$alunoRm' AND emprestimo_pendente = 1";
    $sqlquery = $conn->query($sqlcode);
    $qtdRowsAffected = $sqlquery->num_rows;
    if($qtdRowsAffected == 1){
      $emprestimo = $sqlquery->fetch_assoc();
      $emprestimo_livro1 = $emprestimo['emprestimo_livro1'];
      $emprestimo_livro2 = $emprestimo['emprestimo_livro2'];
      $emprestimo_livro3 = $emprestimo['emprestimo_livro3'];
      $biblioCod = $_SESSION['biblioCod'];
      $tablePedido = "pedidos".$_SESSION['biblioCod'];
      $sqlcode = "INSERT INTO $tablePedido(pedido_livro1, pedido_livro2, pedido_livro3, pedido_tipo, aluno_rm, biblio_cod) VALUES('$emprestimo_livro1','$emprestimo_livro2','$emprestimo_livro3', 1 ,'$alunoRm','$biblioCod')";
      $sqlquery = $conn->query($sqlcode);
      echo "<script>alert('pedido realizado');</script>";
      header("Refresh: 0.5; ../../../views/php/dashboard.php");
    }
  }
?>