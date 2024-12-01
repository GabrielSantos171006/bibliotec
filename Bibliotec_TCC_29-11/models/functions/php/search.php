<?php
  include("../../../controllers/config.php");
  include("../../../controllers/protect.php");
  

  $biblioCod = isset($_GET['biblioCod']) ? $_GET['biblioCod'] : $_SESSION['biblioCod'];
  $tableLivro = "livro" . $biblioCod; 

  if (!isset($_GET['pesquisar']) || empty($_GET['pesquisar']) || empty($biblioCod)) {
      header("Location: ../../../views/php/home.php");
      exit;
  }

  $pesquisar = "%" . trim($_GET['pesquisar']) . "%"; 

  try {
      $bd = new PDO('mysql:host=localhost;dbname=bibliotec', 'root', '');
      $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = 'SELECT * FROM ' . $tableLivro . ' WHERE livro_titulo LIKE :pesquisar';
      $sqll = 'SELECT livro_capa FROM ' . $tableLivro . ' WHERE livro_titulo LIKE :pesquisar';

      $sth = $bd->prepare($sql);
      $sth->bindParam(':pesquisar', $pesquisar, PDO::PARAM_STR);
      $sth->execute();

      $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      exit;
  }
?>

<!--Página com os resultados da busca-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da busca</title>
    <link rel="stylesheet" href="../../style/searchResult.css">    
    <!-- Incluir ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
      /*.icon{
        margin: 20dvh 0;
      }*/
    </style>
</head>
<body>
<header>
      <div class="logo"><a href="?actions="><img src="../../src/bibliotec.png" class="imglogo" alt="Logo"></a></div>
      <div class="search-bar">
        <form class="barra" action="search.php">
          <input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar...">
          <button class="search-btn">🔍</button>
        </form>
      </div>
      <div class="user-icon"><a href="../../../views/php/dashboard.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a></div>
  </header>
  <section class="main-container">
      <aside class="sidebar">
    <?php
        if(isset($_SESSION['userType']) && $_SESSION['userType'] == "adm"){
          ?>
            <div class="icon"><a href="../../../views/php/home.php?actions=catalogo"><i class="fa-solid fa-book-open fa-xl" style="color: #ffffff;"></i></a></div>
            <!--<div class="icon"><a href="">🔶</a></div>
            <div class="icon"><a href="">🔶</a></div>
            <div class="icon"><a href="">🔶</a></div>-->
          <?php
        }
        if(isset($_SESSION['userType']) && $_SESSION['userType'] == "func"){
          ?>
            <div class="icon"><a href="../../../views/php/home.php?actions=cadLivro"><i class="fa-solid fa-book-medical fa-xl" style="color: #ffffff;"></i></a></div>
            <div class="icon"><a href="../../../views/php/home.php?actions=listar"><i class="fa-solid fa-book fa-xl" style="color: #ffffff;"></i></a></div>
            <!--<div class="icon"><a href="">🔶</a></div>
            <div class="icon"><a href="">🔶</a></div>-->
          <?php
        }
        if(isset($_SESSION['userType']) && $_SESSION['userType'] == "aluno"){
          ?>
            <div class="icon"><a href="../../../views/php/home.php?actions=catalogo"><i class="fa-solid fa-book-open fa-xl" style="color: #ffffff;"></i></a></div>
            <div class="icon"><a href="../../../views/php/home.php?actions=carrinho"><i class="fa-solid fa-bag-shopping fa-xl" style="color: #ffffff;"></i> </a></div>
            <!--<div class="icon"><a href="faq.php">🔶</a></div>-->
          <?php
        }
      ?>
      </aside>
    <div class="content">
    <h1>Resultados da busca</h1>
    <div class="search-container">
    <div class="result-container">
      
        <?php
        if (isset($resultados) && is_array($resultados) && count($resultados) > 0) {
            foreach($resultados as $Resultado) {
              ?><div class="search-sec">
                <?php
                $livroCod = $Resultado['livro_cod'];
                echo "<a class='capa' href='../../../views/php/home.php?actions=book&livroCod={$livroCod}'><img src='../../../{$Resultado['livro_capa']}'></a>";
                echo "<a class='nome' href='../../../views/php/home.php?actions=book&livroCod={$livroCod}'>" . htmlspecialchars($Resultado['livro_titulo']) . "</a>";
              ?>
              </div>
              <?php
            }
        } else {
            echo '<p>Não foram encontrados resultados pelo termo buscado</p>';
        }
        ?></div>
        </div>
        </div>
    </div>
</section>
<footer><strong>
    &copy; 2024 Equipe BiblioTec
</strong></footer>

</body>
</html>
