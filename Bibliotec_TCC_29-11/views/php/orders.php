<?php
  include("../../controllers/config.php");
  include("../../controllers/protect.php");
  if($_SESSION['userType'] == "func"){
    $tipoPedido = $_GET['tipoPedido'];
  }
?>
<html>
  <head>
    <link rel="stylesheet" href="../../models/style/dash.css">
    <link rel="stylesheet" href="../../models/style/orders.css">
  </head>
  <body>
    <header>
      <div class="logo"><a href="dashboard.php"><img src="../../models/src/bibliotec.png" class="imglogo"></a></div>
    
      <div class="dropbutton-container">
        <button class="dropbutton" onclick="toggleDropdown()">Menu</button>
        <div id="dropdown-content" class="dropdown-content">
            <a href="../../models/functions/php/logout.php">Logout</a>
        </div>
      </div>
    </header>
    <section class="main-container">
      <?php
        if($tipoPedido == 1){
          ?>
          <div class="tabela-container">
            <table border=1>
              <thead>
                <tr>
                  <td>Id:</td>
                  <td>Livros:</td>
                  <td>Rm:</td>
                  <td>Nome:</td>
                  <td>Tipo:</td>
                  <td>Ações</td>
                </tr>
              </thead>
              <?php
              $tablePedidos = "pedidos".$_SESSION['biblioCod'];
              $sqlcode = "SELECT * FROM $tablePedidos WHERE pedido_tipo = 1 AND pedido_visto = 0";
              $sqlquery = $conn->query($sqlcode);
              $qtdPedidos = $sqlquery->num_rows;
              if($qtdPedidos >= 1){
                for($i = 1; $i <= $qtdPedidos; $i++){
                  $pedido = $sqlquery->fetch_assoc();
                  $pedidoId = $pedido['pedido_id'];
                  $pedidoTipo = $pedido['pedido_tipo'];
                  echo "<tr>";
                  echo "<td>{$pedido['pedido_id']}</td>";
                  echo "<td><ul>";
                  if($pedido['pedido_livro1'] != null){
                    echo "<li>{$pedido['pedido_livro1']}</li>";
                  }      
                  if($pedido['pedido_livro2'] != null){
                    echo "<li>{$pedido['pedido_livro2']}</li>";
                  }      
                  if($pedido['pedido_livro3'] != null){
                    echo "<li>{$pedido['pedido_livro3']}</li>";
                  }      
                  echo "</ul></td>";
                  echo "<td>{$pedido['aluno_rm']}</td>"; 
                  $tableAluno = "aluno".$_SESSION['biblioCod'];
                  $alunoRm = $pedido['aluno_rm'];
                  $sqlcode = "SELECT * FROM $tableAluno WHERE aluno_rm = $alunoRm";
                  $sqlquery = $conn->query($sqlcode);
                  $aluno = $sqlquery->fetch_assoc();
                  echo "<td>{$aluno['aluno_nome']}</td>";
                  echo "<td>Empréstimo</td>";
                  echo "<td><a href='../../models/functions/php/mngmtOrders.php?acao=aprovar&pedidoId=$pedidoId&pedidoTipo=$pedidoTipo' style='color:green;'>Aprovar</a>
                        <br>
                        <a href='../../models/functions/php/mngmtOrders.php?acao=reprovar&pedidoId=$pedidoId&pedidoTipo=$pedidoTipo' style='color:Red;'>Reprovar</a></td>";
                }
              }
            ?>
            </table>
          </div>
          <?php
        }else if($tipoPedido == 0){
          ?>
          <div class="tabela-container">
            <table border=1>
              <thead>
                <tr>
                  <td>Id:</td>
                  <td>Livros</td>
                  <td>Rm:</td>
                  <td>Nome:</td>
                  <td>Tipo:</td>
                  <td>Ações</td>
                </tr>
              </thead>
              <?php
                $tablePedidos = "pedidos".$_SESSION['biblioCod'];
                $sqlcode = "SELECT * FROM $tablePedidos WHERE pedido_tipo = 0 AND pedido_visto = 0";
                $sqlquery = $conn->query($sqlcode);
                $qtdPedidos = $sqlquery->num_rows;
                if($qtdPedidos >= 1){
                  for($i = 1; $i <= $qtdPedidos; $i++){
                    $pedido = $sqlquery->fetch_assoc();
                    $pedidoId = $pedido['pedido_id'];
                    $pedidoTipo = $pedido['pedido_tipo'];
                    echo "<tr>";
                    echo "<td>{$pedido['pedido_id']}</td>";
                    echo "<td><ul>";
                    if($pedido['pedido_livro1'] != null){
                      echo "<li>{$pedido['pedido_livro1']}</li>";
                    }      
                    if($pedido['pedido_livro2'] != null){
                      echo "<li>{$pedido['pedido_livro2']}</li>";
                    }      
                    if($pedido['pedido_livro3'] != null){
                      echo "<li>{$pedido['pedido_livro3']}</li>";
                    }      
                    echo "</ul></td>";
                    echo "<td>{$pedido['aluno_rm']}</td>";
                    $tableAluno = "aluno".$_SESSION['biblioCod'];
                    $alunoRm = $pedido['aluno_rm'];
                    $sqlcode = "SELECT * FROM $tableAluno WHERE aluno_rm = $alunoRm";
                    $sqlquery = $conn->query($sqlcode);
                    $aluno = $sqlquery->fetch_assoc();
                    echo "<td>{$aluno['aluno_nome']}</td>";
                    echo "<td>Empréstimo</td>";
                    echo "<td><a href='../../models/functions/php/mngmtOrders.php?acao=aprovar&pedidoId=$pedidoId&pedidoTipo=$pedidoTipo' style='color:green;'>Aprovar</a>
                          <br>
                          <a href='../../models/functions/php/mngmtOrders.php?acao=reprovar&pedidoId=$pedidoId&pedidoTipo=$pedidoTipo' style='color:Red;'>Reprovar</a></td>";
                  }
                }
              ?>
            </table>
          </div>
          <?php
        }
      ?>
    </section>
    <footer><strong>
      <p>&copy; 2024 Equipe BiblioTec</p>
    </strong></footer><!--Rodapé-->
    <script src="../../models/functions/js/dropBtnDashBoard.js"></script>
  </body>
</html>