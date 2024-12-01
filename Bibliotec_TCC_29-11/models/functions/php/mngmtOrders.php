<?php
  include("../../../controllers/config.php");
  include("../../../controllers/protect.php");
  if($_SESSION['userType'] == "func"){
    $pedidoId = $_GET['pedidoId'];
    $pedidoTipo = $_GET['pedidoTipo'];
    $acao = $_GET['acao'];
    if($acao == "aprovar" && $pedidoTipo == 0){
      $tablePedido = "pedidos".$_SESSION['biblioCod'];
      $sqlcode = "SELECT * FROM $tablePedido WHERE pedido_id = '$pedidoId'";
      $sqlquery = $conn->query($sqlcode); 
      $qtdRowAffected = $sqlquery->num_rows;
      if($qtdRowAffected == 1){
        $pedido = $sqlquery->fetch_assoc();
        $alunoRm = $pedido['aluno_rm'];
        $bibliCod = $_SESSION['biblioCod'];
        $sqlcode = "UPDATE $tablePedido SET pedido_visto = 1 WHERE pedido_id = '$pedidoId' AND aluno_rm = '$alunoRm'";
        $sqlquery = $conn->query($sqlcode);
        $tabeleEmprestimo = "emprestimo".$_SESSION['biblioCod'];
        $pedidoLivro1 = $pedido['pedido_livro1'];
        $pedidoLivro2 = $pedido['pedido_livro2'];
        $pedidoLivro3 = $pedido['pedido_livro3'];
        $sqlcode = "INSERT INTO $tabeleEmprestimo (emprestimo_livro1,emprestimo_livro2,emprestimo_livro3,aluno_rm,biblio_cod) VALUES ('$pedidoLivro1','$pedidoLivro2','$pedidoLivro3','$alunoRm','$bibliCod')";
        $sqlquery = $conn->query($sqlcode);
        $livroTable = "livro".$_SESSION['biblioCod'];
        $sqlcode = "UPDATE $livroTable SET livro_emprestimos = livro_emprestimos+1 WHERE livro_cod = '$pedidoLivro1'";
        $sqlquery = $conn->query($sqlcode);
        $sqlcode = "UPDATE $livroTable SET livro_emprestimos = livro_emprestimos+1 WHERE livro_cod = '$pedidoLivro2'";
        $sqlquery = $conn->query($sqlcode);
        $sqlcode = "UPDATE $livroTable SET livro_emprestimos = livro_emprestimos+1 WHERE livro_cod = '$pedidoLivro3'";
        $sqlquery = $conn->query($sqlcode);
        header("Location: ../../../views/php/dashboard.php");
      }
    }else if($acao == "aprovar" && $pedidoTipo == 1){
      $tablePedido = "pedidos".$_SESSION['biblioCod'];
      $sqlcode = "SELECT * FROM $tablePedido WHERE pedido_id = '$pedidoId'";
      $sqlquery = $conn->query($sqlcode); 
      $qtdRowAffected = $sqlquery->num_rows;
      if($qtdRowAffected == 1){
        $pedido = $sqlquery->fetch_assoc();
        $alunoRm = $pedido['aluno_rm'];
        $bibliCod = $_SESSION['biblioCod'];
        $sqlcode = "UPDATE $tablePedido SET pedido_visto = 1 WHERE pedido_id = '$pedidoId' AND aluno_rm = '$alunoRm'";
        $sqlquery = $conn->query($sqlcode);
        $tabeleEmprestimo = "emprestimo".$_SESSION['biblioCod'];
        $sqlcode = "SELECT * FROM $tabeleEmprestimo WHERE aluno_rm = '$alunoRm' AND emprestimo_pendente = 1";
        $sqlquery = $conn->query($sqlcode);
        $qtdRowAffected == $sqlquery->num_rows;
        if($qtdRowAffected == 1){
          $sqlcode = "UPDATE $tabeleEmprestimo SET emprestimo_pendente = 0 WHERE aluno_rm = '$alunoRm'";
          $sqlquery = $conn->query($sqlcode);
          echo "<script>alert('Pedido de devolução confirmado');</script>";
          header("Refresh: 0.5; ../../../views/php/dashboard.php");
        }
      }
    }
    if($acao == "reprovar" && $pedidoTipo == 0){
      $tablePedido = "pedidos".$_SESSION['biblioCod'];
      $sqlcode = "SELECT * FROM $tablePedido WHERE pedido_id = '$pedidoId'";
      $sqlquery = $conn->query($sqlcode); 
      $qtdRowAffected = $sqlquery->num_rows;
      if($qtdRowAffected == 1){
        $pedido = $sqlquery->fetch_assoc();
        $alunoRm = $pedido['aluno_rm'];
        $bibliCod = $_SESSION['biblioCod'];
        $sqlcode = "UPDATE $tablePedido SET pedido_visto = 1 WHERE pedido_id = '$pedidoId' AND aluno_rm = '$alunoRm'";
        $sqlquery = $conn->query($sqlcode);
        echo "<script>alert('Pedido de devolução confirmado');</script>";
        header("Refresh: 0.5; ../../../views/php/dashboard.php");
      }
    }
  }
?>