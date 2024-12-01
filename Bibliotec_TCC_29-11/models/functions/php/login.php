<?php
  include("../../../controllers/config.php");
  if(session_status() === PHP_SESSION_ACTIVE){
    session_unset();
    session_destroy();
  }
  if(isset($_POST['log']) && $_POST['log'] == "adm"){
    if(isset($_POST['biblio_cod']) && isset($_POST['user_cod']) && isset($_POST['user_password'])){
      $biblioCod = $_POST['biblio_cod'];
      $userCod = $_POST['user_cod'];
      $userPassWord = $_POST['user_password'];
      $sqlcode = "SELECT * FROM adm WHERE adm_cod = '$userCod' AND adm_senha = '$userPassWord'";
      $sqlquery = $conn->query($sqlcode);
      $qtdRowAffected = $sqlquery->num_rows;
      if($qtdRowAffected == 1){
        echo 1;
        $adm = $sqlquery->fetch_assoc();
        if(!isset($_SESSION)){
          session_start();
        }
        $_SESSION['userType'] = "adm";
        $_SESSION['userCod'] = $adm['adm_cod'];
        $_SESSION['userName'] = $adm['adm_user'];
        $_SESSION['biblioCod'] = $biblioCod;
        header("Location: ../../../views/php/home.php");
      }else{
        echo "<script>alert('Usuário não encontrado');</script>";
        header("Refresh: 0.5; ../../../views/html/index.html");
      }
    }
  }//Login com ADM
  if(isset($_POST['log']) && $_POST['log'] == "func"){
    if(isset($_POST['biblio_cod']) && isset($_POST['user_cod']) && isset($_POST['user_password'])){
      $biblioCod = $_POST['biblio_cod'];
      $userCod = $_POST['user_cod'];
      $userPassWord = $_POST['user_password'];
      $tableFuncionario = "funcionario".$biblioCod;
      $sqlcode = "SELECT * FROM $tableFuncionario WHERE func_cod = '$userCod' AND func_senha = '$userPassWord' AND biblio_cod = '$biblioCod'";
      $sqlquery = $conn->query($sqlcode);
      $qtdRowAffected = $sqlquery->num_rows;
      if($qtdRowAffected == 1){
        $funcionario = $sqlquery->fetch_assoc();
        if(!isset($_SESSION)){
          session_start();
        }
        $_SESSION['userType'] = "func";
        $_SESSION['biblioCod'] = $funcionario['biblio_cod'];
        $_SESSION['userCod'] = $funcionario['func_cod'];
        $_SESSION['userName'] = $funcionario['func_nome'];
        header("Location: ../../../views/php/home.php");
      }else{
        echo "<script>alert('Usuário não encontrado');</script>";
        header("Refresh: 0.5; ../../../views/html/index.html");
      }
    }
  }//Login como Funcionário
  if(isset($_POST['log']) && $_POST['log'] == "aluno"){
    if(isset($_POST['biblio_cod']) && isset($_POST['user_cod']) && isset($_POST['user_password'])){
      $biblioCod = $_POST['biblio_cod'];
      $userCod = $_POST['user_cod'];
      $userPassWord = $_POST['user_password'];
      $tableAluno = "aluno".$biblioCod;
      $sqlcode = "SELECT * FROM $tableAluno WHERE aluno_rm = '$userCod' AND aluno_senha = '$userPassWord' AND biblio_cod = '$biblioCod'";
      $sqlquery = $conn->query($sqlcode);
      $qtdRowAffected = $sqlquery->num_rows;
      if($qtdRowAffected == 1){
        $aluno = $sqlquery->fetch_assoc();
        if(!isset($_SESSION)){
          session_start();
        }
        $_SESSION['userType'] = "aluno";
        $_SESSION['biblioCod'] = $aluno['biblio_cod'];
        $_SESSION['userCod'] = $aluno['aluno_rm'];
        $_SESSION['userName'] = $aluno['aluno_nome'];
        header("Location: ../../../views/php/home.php");
      }else{
        echo "<script>alert('Usuário não encontrado');</script>";
        header("Refresh: 0.5; ../../../views/html/index.html");
      }
    }
  }//Login como Aluno