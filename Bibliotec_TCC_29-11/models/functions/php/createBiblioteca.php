<?php
  include('../../../controllers/config.php');
  if(isset($_POST['biblio_cod']) && isset($_POST['biblio_nome']) && isset($_POST['biblio_end']) && isset($_POST['biblio_estado']) && isset($_POST['biblio_dataCriacao'])){
    $biblio_cod = $_POST['biblio_cod'];
    $biblio_nome = $_POST['biblio_nome'];
    $biblio_end = $_POST['biblio_end'];
    $biblio_estado = $_POST['biblio_estado'];
    $biblio_dataCriacao = $_POST['biblio_dataCriacao'];
    $sqlcode = "INSERT INTO bibliotecas(biblio_cod,biblio_nome,biblio_endereco,biblio_estado,biblio_dataCriacao) VALUES('$biblio_cod','$biblio_nome','$biblio_end','$biblio_estado','$biblio_dataCriacao')";
    $sqlquery = $conn->query($sqlcode);
    {
      $tableLivro = "livro".$biblio_cod;
      $sqlcode = "CREATE TABLE IF NOT EXISTS $tableLivro(livro_cod varchar(255) PRIMARY KEY, 
	    livro_titulo VARCHAR(255),livro_tombo int not null,livro_area varchar(255), livro_autor varchar(255), livro_avaliacao int(11) default 0, livro_capa varchar(255), livro_classificacao int(11), livro_emprestimos int(11) default 0, livro_nota varchar(255), livro_qtdDisponivel int(11), livro_qtdPaginas int(11), livro_sinopse LONGTEXT, livro_status int default 1, livro_vestibular int default 1,biblio_cod int, FOREIGN KEY (biblio_cod) REFERENCES bibliotecas(biblio_cod))";
      $sqlquery = $conn->query($sqlcode);
    }
    {
      $tableAluno = "aluno".$biblio_cod;
      $sqlcode = "CREATE TABLE IF NOT EXISTS $tableAluno(aluno_rm int(11) PRIMARY KEY, aluno_nome varchar(255), aluno_senha varchar(35), aluno_livro1 varchar(255), aluno_livro2 varchar(255),aluno_livro3 varchar(255),biblio_cod int, FOREIGN KEY (biblio_cod) REFERENCES bibliotecas(biblio_cod))";
      $sqlquery = $conn->query($sqlcode);
    }
    {
      $tableFuncionario = "funcionario".$biblio_cod;
      $sqlcode = "CREATE TABLE IF NOT EXISTS $tableFuncionario(func_cod int(11) PRIMARY KEY, func_cargo VARCHAR(255), func_nome varchar(255), func_senha varchar(35),biblio_cod int, FOREIGN KEY (biblio_cod) REFERENCES bibliotecas(biblio_cod))";
      $sqlquery = $conn->query($sqlcode);
    }
    {
      $tablePedido = "pedidos".$biblio_cod;
      $sqlcode = "CREATE TABLE IF NOT EXISTS $tablePedido(pedido_id int NOT NULL AUTO_INCREMENT, pedido_livro1 varchar(255), pedido_livro2 varchar(255), pedido_livro3 varchar(255), pedido_tipo int(1) default 0, pedido_visto int (1) default 0,aluno_rm int,biblio_cod int, FOREIGN KEY (biblio_cod) REFERENCES bibliotecas(biblio_cod), FOREIGN KEY (aluno_rm) REFERENCES $tableAluno(aluno_rm), PRIMARY KEY (pedido_id))";
      $sqlquery = $conn->query($sqlcode);
    }
    {
      $tableEmprestimo = "emprestimo".$biblio_cod;
      $sqlcode = "CREATE TABLE IF NOT EXISTS $tableEmprestimo(emprestimo_id int NOT NULL AUTO_INCREMENT,emprestimo_pendente int(2) default 1, emprestimo_livro1 varchar (255),emprestimo_livro2 varchar (255),emprestimo_livro3 varchar (255),aluno_rm int,biblio_cod int, FOREIGN KEY (biblio_cod) REFERENCES bibliotecas(biblio_cod), FOREIGN KEY (aluno_rm) REFERENCES $tableAluno(aluno_rm), PRIMARY KEY(emprestimo_id))";
      $sqlquery = $conn->query($sqlcode);
    }
    {
      $tableCarrinho = "carrinho".$biblio_cod;
      $sqlcode = "CREATE TABLE IF NOT EXISTS $tableCarrinho(carrinho_id int NOT NULL AUTO_INCREMENT, carrinho_livro1 varchar(255), carrinho_livro2 varchar(255), carrinho_livro3 varchar(255), aluno_rm int,FOREIGN KEY (aluno_rm) REFERENCES $tableAluno(aluno_rm), PRIMARY KEY(carrinho_id))";
      $sqlquery = $conn->query($sqlcode);
    }
    header("Location: ../../../views/php/home.php");
  }                  
?>