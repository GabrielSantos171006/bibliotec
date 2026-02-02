# 📚 BiblioTec - Sistema de Gestão de Bibliotecas

O **BiblioTec** é uma plataforma web completa para a gestão de bibliotecas escolares, desenvolvida como Trabalho de Conclusão de Curso (TCC) na Etec Jardim Ângela. O sistema foi projetado para modernizar o acesso ao acervo, permitindo que uma única instalação gerencie múltiplas unidades de bibliotecas de forma independente através de uma arquitetura de tabelas dinâmicas no banco de dados.

---

## 🌟 Diferenciais do Projeto

* **Arquitetura Multi-Biblioteca:** O sistema gera automaticamente tabelas exclusivas para cada nova unidade cadastrada (livros, alunos, funcionários e pedidos), garantindo isolamento total dos dados.
* **Design Responsivo:** Interface construída com foco em dispositivos móveis (*Mobile First*), garantindo usabilidade em smartphones e tablets através de `@media queries` personalizadas.
* **Identidade Visual:** Utiliza o símbolo da coruja (sabedoria) com uma paleta de cores moderna em tons de roxo e magenta.

---

## 🚀 Principais Funcionalidades

O sistema possui três níveis de acesso protegidos por sessão:

### 👑 Administrador (Master)
* **Gestão de Unidades:** Cadastro de novas bibliotecas definindo código, nome, endereço e estado.
* **Monitoramento:** Visualização em tempo real da quantidade de bibliotecas ativas no sistema.

### 👔 Funcionário (Bibliotecário)
* **Gestão do Acervo:** Cadastro e edição completa de livros, incluindo upload de capas, controle de tombo, sinopse e classificação etária.
* **Controle de Pedidos:** Interface para aprovar ou reprovar solicitações de retirada e devolução de livros.
* **Listagem de Livros:** Tabela detalhada com estatísticas de empréstimos por obra.

### 🎓 Aluno (Usuário final)
* **Mochila Digital:** Sistema de carrinho onde o aluno pode reservar até 3 livros simultaneamente.
* **Dashboard Pessoal:** Consulta de livros atualmente em posse e solicitação de devolução digital.
* **Busca de Acervo:** Pesquisa inteligente de títulos no catálogo específico de sua unidade.

---

## 🛠️ Tecnologias Utilizadas

* **Backend:** PHP 8.1 com arquitetura baseada em controladores e sessões protegidas.
* **Frontend:** HTML5, CSS3 customizado e JavaScript (ES6+) para manipulação de DOM e efeitos de rolagem.
* **Banco de Dados:** MySQL com suporte a `mysqli` e `PDO` para buscas seguras.
* **Frameworks:** Integração com Bootstrap para layout básico do formulário de login.

---

## 📂 Estrutura do Projeto

A organização segue o padrão **MVC (Models, Views, Controllers)**:

* `/controllers`: Lógica de conexão, segurança e proteção de rotas.
* `/models`: Armazenamento de estilos (CSS), scripts (JS) e ativos (imagens e capas).
* `/views`: Interfaces gráficas para cada perfil de usuário e subpáginas dinâmicas.
* `bibliotec.sql`: Script completo para inicialização das tabelas base e dados de teste.

---

## 🚀 Guia de Instalação e Configuração

Esta é a parte crucial para colocar o **BiblioTec** em funcionamento. Siga os passos abaixo para configurar seu ambiente de desenvolvimento local.

### 1. Pré-requisitos
Antes de começar, você precisará de um ambiente que suporte PHP e MySQL. Recomendamos o uso de um dos seguintes pacotes:
* **XAMPP** (Windows/Linux)
* **WampServer** (Windows)
* **Laragon** (Windows - Altamente recomendado pela facilidade com domínios locais)

> **Versão do PHP:** Certifique-se de estar usando a versão **8.1** ou superior para total compatibilidade com as funções utilizadas.

### 2. Configuração do Banco de Dados
O sistema utiliza uma estrutura dinâmica que depende da importação inicial do esquema SQL.

1.  Abra o **phpMyAdmin** (geralmente em `http://localhost/phpmyadmin`).
2.  Crie um novo banco de dados chamado `bibliotec`.
3.  Selecione o banco criado e clique na aba **Importar**.
4.  Escolha o arquivo `bibliotec.sql` localizado na raiz do projeto e clique em **Executar**.
5.  Isso criará a estrutura base, incluindo a tabela de administradores (`adm`) e as tabelas iniciais das bibliotecas de teste (como `livro100`, `aluno100`, etc.).



### 3. Ajuste de Conexão (config.php)
Para que o sistema se comunique com o banco, verifique se o arquivo `controllers/config.php` reflete suas credenciais locais:

```php
// No seu arquivo controllers/config.php
$conn = new mysqli("localhost", "seu_usuario", "sua_senha", "bibliotec");
```
---

<p align="center">
  <b>Desenvolvido pela Equipe BiblioTec — Etec 2024</b><br>
  <i>"O homem não é nada além daquilo que a educação faz dele."</i>
</p>
