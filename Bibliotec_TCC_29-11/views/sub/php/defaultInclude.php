<?php
  include("../../controllers/config.php");
  include ("../../controllers/protect.php");
  if(!isset($_SESSION)){
    session_start();
  }
  $tableLivro = "livro".$_SESSION['biblioCod'];
  $biblioCod = $_SESSION['biblioCod'];
?>
<html>
  <head>
    <link rel="stylesheet" href="../../models/style/defaultInclude.css">
  </head>
  <body>
  <div class="container">
        <h2 class="text">Livros de vestibulares</h2>
        <div class="book-box">
            <button class="buttons" onclick="backBtn();">◀</button>
            <div class="middle-content" id="middle-content">
              <?php
                  $tableLivro = "livro".$_SESSION['biblioCod'];
                  $sqlcode = "SELECT * FROM $tableLivro WHERE livro_vestibular = 1";
                  $sqlquery = $conn->query($sqlcode);
                  $qtdRowsAffected = $sqlquery->num_rows;
                for($i = 1; $i <= $qtdRowsAffected; $i++){
                    $livro = $sqlquery->fetch_assoc();
                    $livroCod = $livro['livro_cod'];
                  ?>
                  <div class="book">
                    <?php
                     echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img src='../../{$livro['livro_capa']}'></a>";
                    ?>
                  </div>
                  <?php
                }
              ?>
            </div>
            <button class="buttons" onclick="fowardBtn();">▶</button>
        </div>

        <h2 class="text">Livros mais desejados</h2>
        <div class="book-box">
        <button class="buttons" onclick="backBtn2();">◀</button>
            <div class="middle-content" id="middle-content2">
            <?php
                  $tableLivro = "livro".$_SESSION['biblioCod'];
                  $sqlcode = "SELECT * FROM $tableLivro WHERE livro_emprestimos >= 10";
                  $sqlquery = $conn->query($sqlcode);
                  $qtdRowsAffected = $sqlquery->num_rows;
                for($i = 1; $i <= $qtdRowsAffected; $i++){
                    $livro = $sqlquery->fetch_assoc();
                    $livroCod = $livro['livro_cod'];
                  ?>
                  <div class="book">
                    <?php
                     echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img style='width:50px;' src='../../{$livro['livro_capa']}'></a>";
                    ?>
                  </div>
                  <?php
                }
              ?>
            </div>
            <button class="buttons" onclick="fowardBtn2();">▶</button>
        </div>

        <h2 class="text">Livros novos</h2>
        <div class="book-box">
        <button class="buttons" onclick="backBtn3();">◀</button>
            <div class="middle-content" id="middle-content3">
            <?php
                  $tableLivro = "livro".$_SESSION['biblioCod'];
                  $sqlcode = "SELECT * FROM $tableLivro WHERE livro_emprestimos <= 3";
                  $sqlquery = $conn->query($sqlcode);
                  $qtdRowsAffected = $sqlquery->num_rows;
                for($i = 1; $i <= $qtdRowsAffected; $i++){
                    $livro = $sqlquery->fetch_assoc();
                    $livroCod = $livro['livro_cod'];
                  ?>
                  <div class="book">
                    <?php
                     echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img src='../../{$livro['livro_capa']}'></a>";
                    ?>
                  </div>
                  <?php
                }
              ?>
            </div>
            <button class="buttons" onclick="fowardBtn3();">▶</button>
        </div>
    </div>
    <script src="../../models/functions/js/backAndFowardBtn.js"></script>
  </body>
</html>