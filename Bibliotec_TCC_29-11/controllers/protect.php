<?php
  if(!isset($_SESSION)){
    session_start();
    // Inicia uma sessão 
  }
  if(isset($_SESSION['userType'])){
    // Permite que apenas um usuário logado acesse o conteúdo da página
  }else{
    header("Location: ../../controllers/invalidLogin.php");
    // Caso o usuário não esteja logado ele não vai acessar a página
  }
?>