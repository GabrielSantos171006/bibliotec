<?php
  include("../../controllers/config.php");
  include("../../controllers/protect.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Barra Lateral</title>
    <link rel="stylesheet" href="../../models/style/home.css">
    <!-- Incluir ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <header>
      <div class="logo"><a href="?actions="><img src="../../models/src/bibliotec.png" class="imglogo" alt="Logo"></a></div>
      <div class="search-bar">
        <form class="barra" action="../../models/functions/php/search.php">
          <input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar...">
          <button class="search-btn">🔍</button>
        </form>
      </div>
      <div class="user-icon"><a href="dashboard.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a></div>
  </header>
  <section class="main-container">
      <aside class="sidebar">
        <?php
          if(isset($_SESSION['userType']) && $_SESSION['userType'] == "adm"){
            ?>
              <div class="icon"><a href="?actions=catalogo"><i class="fa-solid fa-book-open fa-xl" style="color: #ffffff;"></i></a></div>
              <!--<div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>-->
            <?php
          }
          if(isset($_SESSION['userType']) && $_SESSION['userType'] == "func"){
            ?>
              <div class="icon"><a href="?actions=cadLivro"><i class="fa-solid fa-book-medical fa-xl" style="color: #ffffff;"></i></a></div>
              <div class="icon"><a href="?actions=listar"><i class="fa-solid fa-book fa-xl" style="color: #ffffff;"></i></a></div>
              <!--<div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>-->
            <?php
          }
          if(isset($_SESSION['userType']) && $_SESSION['userType'] == "aluno"){
            ?>
             <div class="icon"><a href="?actions=catalogo"><i class="fa-solid fa-book-open fa-xl" style="color: #ffffff;"></i></a></div>
              <div class="icon"><a href="?actions=carrinho"><i class="fa-solid fa-bag-shopping fa-xl" style="color: #ffffff;"></i> </a></div>
              <!--<div class="icon"><a href="faq.php">🔶</a></div>-->
            <?php
          }
        ?>
      </aside>
      <div class="content">
          
          <?php
            switch(@$_REQUEST['actions']){      
              case "cadLivro":
                include("../sub/php/cadLivro.php");
              break;
              case "catalogo":
                include("../sub/php/catalogo.php");
              break;
              case "book":
                include("../sub/php/book.php");
              break;
              case "carrinho":
                include("../sub/php/cart.php");
              break;
              case "listar":
                include("../sub/php/listarLivro.php");
              break;
              case "editarLivro":
                include("../sub/php/editarLivro.php");
              break;
              default:
              ?>
                <h1>"O homem não é nada além daquilo que a educação faz dele."</h1>
                <?php
                include("../sub/php/defaultInclude.php");
              break;
            }
          ?>
      </div>
  </section>
  <footer><strong>
      &copy; 2024 Equipe BiblioTec
  </strong></footer>
</body>
</script>
</html>
