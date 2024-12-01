<?php
  include("../../controllers/config.php");
  include("../../controllers/protect.php");
  ?>
    <html>
      <head>
        <link rel="stylesheet" href="../../models/style/dashboard.css">
      </head>
      <body>
        <header class="dash-header">
        <div class="logo"><a href="home.php?actions="><img src="../../models/src/bibliotec.png" class="imglogo" alt="Logo"></a></div>
          <div class="dropbutton-container">
            <button class="dropbutton" onclick="toggleDropdown()">Menu</button>
            <div id="dropdown-content" class="dropdown-content">
                <a href="../../models/functions/php/logout.php">Logout</a>
            </div>
          </div>
        </header>
        <section class="main-container">
          <h1>Dashboard</h1>

          <?php 
            if($_SESSION['userType'] == "adm"){
              ?>
              <div class="block-container">
                <div class="block box-biblioteca">
                  <div class="top">
                    <h1>Quantidade de Bibliotecas:</h1>
                  </div>
                  <div class="mid">
                    <?php
                      $sqlcode = "SELECT * FROM bibliotecas";
                      $slqquery = $conn->query($sqlcode);
                      $qtdBibliotecas = $slqquery->num_rows;
                      echo "<p>{$qtdBibliotecas}</p>";
                    ?>
                  </div>
                  <div class="bottom">
                    <!--<a href="">Gerenciar bibliotecas</a>-->
                  </div>
                </div>
                <div class="block create-biblioteca">
                  <h1>Criar Biblioteca</h1>
                  <!--<input type="button" class="create-btn" value="Criar Biblioteca">-->
                  <form class="formulario" action="../../models/functions/php/createBiblioteca.php" method="post">
                    <label for="biblio_cod">Código</label>
                    <input type="text" id="biblio_cod" name="biblio_cod" placeholder="Digite o código da biblioteca" required>
                    <label for="biblio_nome">Nome</label>
                    <input type="biblio_nome" id="biblio_nome" name="biblio_nome" placeholder="Digite o nome da biblioteca" required>
                    <label for="biblio_end">Endereço</label>
                    <input type="text" id="biblio_end" name="biblio_end" placeholder="Digite o edereço da biblioteca" required>
                    <label for="biblio_estado">Estado</label>
                    <input type="text" id="biblio_estado" name="biblio_estado" placeholder="Digite o estado da biblioteca (EX.:SP)" required>
                    <label for="biblio_dataCriacao">Data de Criação</label>
                    <input type="date" id="biblio_dataCriacao" name="biblio_dataCriacao" required>
                    <!--<label for="biblio_submit">Confirmar</label>-->
                    <button type="submit" class="create-btn">Cadastrar</button>
                  </form>
                </div>
              </div>
            <?php
            }
            if($_SESSION['userType'] == "func"){
            ?>
              <div class="block-container">
                <div class="block">
                  <h1>Pedidos de emprestimos:</h1>
                  <?php
                    $tablePedidos = "pedidos".$_SESSION['biblioCod'];
                    $sqlcode = "SELECT * FROM $tablePedidos WHERE pedido_tipo = 0 AND pedido_visto = 0";
                    $sqlquery = $conn->query($sqlcode);
                    $qtdRowAffecteds = $sqlquery->num_rows;
                    echo "<p>$qtdRowAffecteds</p>";
                  ?>
                  <br>
                  <a href="orders.php?tipoPedido=0">Verificar Pedidos</a>
                </div>
                <div class="block">
                  <h1>Solicitações de devolução:</h1>
                  <?php
                    $tablePedidos = "pedidos".$_SESSION['biblioCod'];
                    $sqlcode = "SELECT * FROM $tablePedidos WHERE pedido_tipo = 1 AND pedido_visto = 0";
                    $sqlquery = $conn->query($sqlcode);
                    $qtdRowAffecteds = $sqlquery->num_rows;
                    echo "<p>$qtdRowAffecteds</p>";
                  ?>
                  <br>
                  <a href="orders.php?tipoPedido=1">Verificar Pedidos</a>
                </div>
              </div>
            <?php
            }
            if($_SESSION['userType'] == "aluno"){
              $tableEmprestimo = "emprestimo".$_SESSION['biblioCod'];
              $alunoRm = $_SESSION['userCod'];
              $sqlcode = "SELECT * FROM $tableEmprestimo WHERE aluno_rm='$alunoRm' AND emprestimo_pendente = 1";
              $sqlquery = $conn->query($sqlcode);
              $qtdRowAffecteds = $sqlquery->num_rows;
              if($qtdRowAffecteds == 1){
                $emprestimo = $sqlquery->fetch_assoc();
                ?>
                <div class="books-container">
                <?php
                  if($emprestimo['emprestimo_livro1'] != null){
                    ?>
                    <div class="book-sec">
                      <?php
                        $tableLivro = "livro".$_SESSION['biblioCod'];
                        $livroCod = $emprestimo['emprestimo_livro1'];
                        $sqlcode = "SELECT * FROM $tableLivro WHERE livro_cod = '$livroCod'";
                        $sqlquery = $conn->query($sqlcode);
                        $qtdRowAffecteds = $sqlquery->num_rows;
                        if($qtdRowAffecteds == 1){
                          $livro = $sqlquery->fetch_assoc();
                          echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img src='../../{$livro['livro_capa']}'></a>";
                          echo "<p class='tit-livro'> {$livro['livro_titulo']} </p>";
                        }
                      ?>
                    </div>
                    <?php
                  }
                  if($emprestimo['emprestimo_livro2'] != null){
                    ?>
                    <div class="book-sec">
                      <?php
                        $tableLivro = "livro".$_SESSION['biblioCod'];
                        $livroCod = $emprestimo['emprestimo_livro2'];
                        $sqlcode = "SELECT * FROM $tableLivro WHERE livro_cod = '$livroCod'";
                        $sqlquery = $conn->query($sqlcode);
                        $qtdRowAffecteds = $sqlquery->num_rows;
                        if($qtdRowAffecteds == 1){
                          $livro = $sqlquery->fetch_assoc();
                          echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img src='../../{$livro['livro_capa']}'></a>";
                          echo "<p class='tit-livro'> {$livro['livro_titulo']} </p>";
                        }
                      ?>
                    </div>
                    <?php
                  }
                  if($emprestimo['emprestimo_livro3'] != null){
                    ?>
                    <div class="book-sec">
                      <?php
                        $tableLivro = "livro".$_SESSION['biblioCod'];
                        $livroCod = $emprestimo['emprestimo_livro3'];
                        $sqlcode = "SELECT * FROM $tableLivro WHERE livro_cod = '$livroCod'";
                        $sqlquery = $conn->query($sqlcode);
                        $qtdRowAffecteds = $sqlquery->num_rows;
                        if($qtdRowAffecteds == 1){
                          $livro = $sqlquery->fetch_assoc();
                          echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img src='../../{$livro['livro_capa']}'></a>";
                          echo "<p class='tit-livro'> {$livro['livro_titulo']} </p>";
                        }
                      ?>
                        
                    </div>
                    <?php
                  }
                ?>
                  
                
                  <form action="../../models/functions/php/confirmOrderDevolver.php">
                    <button class="devolve">Solicitar devolução</button>
                  </form>
                </div>
                <?php
              }else{
                echo "<p>Você ainda não pegou nenhum livro emprestado.</p>";
              }
            }
          ?>
        
        </section><!--Section do conteúdo-->
        <footer><strong>
          <p>&copy; 2024 Equipe BiblioTec</p>
          </strong></footer><!--Rodapé-->
        <script src="../../models/functions/js/dropBtnDashBoard.js"></script>
      </body>
    </html>
  <?php
?>