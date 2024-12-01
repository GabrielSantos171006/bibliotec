<?php
  include("../../controllers/config.php");
  include("../../controllers/protect.php");
  if($_SESSION['userType'] == "func"){
    ?>
      <html>
        <head>
          <link rel="stylesheet" href="../../models/style/listar.css">
        </head>
        <body>
          <div class="lista">
            <table border=1>
              <tr>
                <td>Livro:</td>
                <td>Título:</td>
                <td>Código:</td>
                <td>Emprestimos:</td>
                <td>Ações:</td>
              </tr>
              <?php
                $tableLivro = "livro".$_SESSION['biblioCod'];
                $sqlcode = "SELECT * FROM $tableLivro";
                $sqlquery = $conn->query($sqlcode);
                $qtdLivros = $sqlquery->num_rows;
                if($qtdLivros >= 1){
                  for($i = 1; $i <= $qtdLivros; $i++){
                    $livro = $sqlquery->fetch_assoc();
                    $livroCod = $livro['livro_cod'];
                    ?>
                      <tr>
                        <td><?php echo "<img style='width:50px;' src='../../{$livro['livro_capa']}'></a>"; ?></td>
                        <td><?php echo $livro['livro_titulo'];?></td>
                        <td><?php echo $livro['livro_cod'];?></td>
                        <td><?php echo $livro['livro_emprestimos'];?></td>
                        <td><a href="../php/home.php?actions=editarLivro&livroCod=<?php echo $livroCod;?>">Editar</a></td>
                      </tr>
                    <?php
                  }
                }
              ?>
            </table>
          </div>
        </body>
      </html>
    <?php
  }
?>
