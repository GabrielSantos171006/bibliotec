<?php
  include("../../controllers/config.php");
  include("../../controllers/protect.php");
  if($_SESSION['userType'] == "func"){
    $livroCod = $_GET['livroCod'];
    $tableLivro = "livro".$_SESSION['biblioCod'];
    $sqlcode = "SELECT * FROM $tableLivro WHERE livro_cod = '$livroCod'";
    $sqlquery = $conn->query($sqlcode);
    $qtdRowAffected = $sqlquery->num_rows;
    if($qtdRowAffected == 1){
      $livro = $sqlquery->fetch_assoc();
    }
    ?>
    <head>
      <link rel="stylesheet" href="../../models/style/cadLivro.css">
    </head>
    <body>
      <h1>Editar livro</h1>
      <br>
      <div class="form-edita-container">
        <form class="edita-form" action="../../models/functions/php/editLivro.php" method="post" enctype="multipart/form-data">
          <label for="livro_cod">Código:</label>
          <input type="text" name="livro_cod" value="<?php echo $livro['livro_cod'];?>" readonly>
          
          <label for="livro_tombo">Tombo:</label>
          <input type="number" name="livro_tombo" value="<?php echo $livro['livro_tombo'];?>" required>
          
          <label for="livro_titulo">Titulo:</label>
          <input type="text" name="livro_titulo" value="<?php echo $livro['livro_titulo'];?>" required>
          
          <label for="livro_autor">Autor:</label>
          <input type="text" name="livro_autor" value="<?php echo $livro['livro_autor'];?>" required>
          
          <!--<label for="livro_exemplar">Exemplar:</label>
          <input type="text" name="livro_exemplar" value="/*</*?php echo $livro['livro_exemplar'];?*/>*/"-->
          
          <label for="livro_area">Livro Área:</label>
          <input type="text" name="livro_area" value="<?php echo $livro['livro_area'];?>" required>
          
          <label for="livro_qtd_disponivel">Cópias:</label>
          <input type="number" name="livro_qtd_disponivel" value="<?php echo $livro['livro_qtdDisponivel'];?>" required>
          
          <label for="livro_qtd_pagina">Quantidade de páginas:</label>
          <input type="text" name="livro_qtd_pagina" value="<?php echo $livro['livro_qtdPaginas'];?>" required> 
          
          <label for="livro_classificacao">Faixa Etária:</label>
          <select name="livro_classificacao" required>
            <option value="0" <?php if($livro['livro_classificacao'] == 0 ){echo "seleceted";}?>>Livre</option>
            <option value="1" <?php if($livro['livro_classificacao'] == 1 ){echo "seleceted";}?>>10 Anos</option>
            <option value="2" <?php if($livro['livro_classificacao'] == 2 ){echo "seleceted";}?>>12 Anos</option>
            <option value="3" <?php if($livro['livro_classificacao'] == 3 ){echo "seleceted";}?>>14 Anos</option>
            <option value="4" <?php if($livro['livro_classificacao'] == 4 ){echo "seleceted";}?>>16 Anos</option>
            <option value="5" <?php if($livro['livro_classificacao'] == 5 ){echo "seleceted";}?>>18 Anos</option>
          </select>
          
          <label for="livro_vestibular">Vestibular:</label>
          <select name="livro_vestibular">
            <option value="0" <?php if($livro['livro_vestibular'] == 0 ){echo "seleceted";}?>>Não</option>
            <option value="1" <?php if($livro['livro_vestibular'] == 1 ){echo "seleceted";}?>>Sim</option>
          </select> 
          
          <label for="livro_nota">Nota:</label>
          <input type="text" name="livro_nota" value="<?php echo $livro['livro_nota'];?>" required>
          
          <label for="livro_sinopse">Sinopse:</label>
          <textarea name="livro_sinopse" required><?php echo $livro['livro_sinopse'];?></textarea>
          
          

          <label for="livro_capa">Capa:</label>
          <span><input type="checkbox" name="trocar_img" value="1">Deseja trocar a imagem?</span>
          <input name="livro_capa" type="file" class="form-control-edita" accept="image/*">
          
          <button type="submit" class="editar">Editar</button>
        </form>
      </div>  
    </body>
    <?php
  }
?>