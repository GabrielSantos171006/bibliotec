<?php
    include("../../controllers/config.php");
    include ("../../controllers/protect.php");
    if(!isset($_SESSION)){
        session_start();
    }
?>
<html>
  <head>
   <link rel="stylesheet" href="../../models/style/cadlivro.css">
  </head>
  <body>
    <h1>Cadastro do livro</h1>
    <div class="form-container">
      <form class="cadastro" action="../../models/functions/php/createLivro.php" method="post" enctype="multipart/form-data">
        <label for="livro_cod">Código:</label>
        <input type="text" name="livro_cod" required>
        
        <label for="livro_tombo">Tombo:</label>
        <input type="number" name="livro_tombo" required>
        
        <label for="livro_titulo">Titulo:</label>
        <input type="text" name="livro_titulo" required>
        
        <label for="livro_autor">Autor:</label>
        <input type="text" name="livro_autor" required>
        
        <label for="livro_exemplar">Exemplar:</label>
        <input type="text" name="livro_exemplar" required>
        
        <label for="livro_area">Livro Área:</label>
        <input type="text" name="livro_area" required>
        
        <label for="livro_qtd_disponivel">Cópias:</label>
        <input type="number" name="livro_qtd_disponivel" required>
        
        <label for="livro_qtd_pagina">Quantidade de páginas:</label>
        <input type="text" name="livro_qtd_pagina" required> 
        
        <label for="livro_classificacao">Faixa Etária:</label>
        <select name="livro_classificacao" required>
          <option value="0">Livre</option>
          <option value="1">10 Anos</option>
          <option value="2">12 Anos</option>
          <option value="3">14 Anos</option>
          <option value="4">16 Anos</option>
          <option value="5">18 Anos</option>
        </select>
        
        <label for="livro_vestibular">Vestibular:</label>
        <select name="livro_vestibular">
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select> 
        
        <label for="livro_nota">Nota:</label>
        <input type="text" name="livro_nota" required>
        
        <label for="livro_sinopse">Sinopse:</label>
        <textarea name="livro_sinopse" required></textarea>
        
        <label for="livro_capa">Capa:</label>
        <input name="livro_capa" type="file" class="form-control" accept="image/*">
        
        <button type="submit">Cadastrar</button>
      </form>
    </div>
  </body>
</html>