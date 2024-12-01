-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 23/11/2024 às 21:03
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bibliotec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `adm_cod` int NOT NULL,
  `adm_user` varchar(50) NOT NULL,
  `adm_email` varchar(120) NOT NULL,
  `adm_senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`adm_cod`, `adm_user`, `adm_email`, `adm_senha`) VALUES
(233, 'M7', 'murilo.santos166@etec.sp.gov.br', 'Murilo123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno100`
--

CREATE TABLE `aluno100` (
  `aluno_rm` int NOT NULL,
  `aluno_nome` varchar(255) DEFAULT NULL,
  `aluno_senha` varchar(35) DEFAULT NULL,
  `aluno_livro1` varchar(255) DEFAULT NULL,
  `aluno_livro2` varchar(255) DEFAULT NULL,
  `aluno_livro3` varchar(255) DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `aluno100`
--

INSERT INTO `aluno100` (`aluno_rm`, `aluno_nome`, `aluno_senha`, `aluno_livro1`, `aluno_livro2`, `aluno_livro3`, `biblio_cod`) VALUES
(12345, 'Murilo', '12345', NULL, NULL, NULL, 100),
(54321, 'Julia', '54321', NULL, NULL, NULL, 100);

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno221`
--

CREATE TABLE `aluno221` (
  `aluno_rm` int NOT NULL,
  `aluno_nome` varchar(255) DEFAULT NULL,
  `aluno_senha` varchar(35) DEFAULT NULL,
  `aluno_livro1` varchar(255) DEFAULT NULL,
  `aluno_livro2` varchar(255) DEFAULT NULL,
  `aluno_livro3` varchar(255) DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `aluno221`
--

INSERT INTO `aluno221` (`aluno_rm`, `aluno_nome`, `aluno_senha`, `aluno_livro1`, `aluno_livro2`, `aluno_livro3`, `biblio_cod`) VALUES
(22334, 'Gabriel Gomes dos Santos', '22334', NULL, NULL, NULL, 221);

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno999`
--

CREATE TABLE `aluno999` (
  `aluno_rm` int NOT NULL,
  `aluno_nome` varchar(255) DEFAULT NULL,
  `aluno_senha` varchar(35) DEFAULT NULL,
  `aluno_livro1` varchar(255) NOT NULL,
  `aluno_livro2` varchar(255) NOT NULL,
  `aluno_livro3` varchar(255) NOT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `aluno999`
--

INSERT INTO `aluno999` (`aluno_rm`, `aluno_nome`, `aluno_senha`, `aluno_livro1`, `aluno_livro2`, `aluno_livro3`, `biblio_cod`) VALUES
(123, 'Mu', '123', '', '', '', 999),
(12345, 'Jorge', '12345', '', '', '', 999);

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno1112`
--

CREATE TABLE `aluno1112` (
  `aluno_rm` int NOT NULL,
  `aluno_nome` varchar(255) DEFAULT NULL,
  `aluno_senha` varchar(35) DEFAULT NULL,
  `aluno_livro1` varchar(255) DEFAULT NULL,
  `aluno_livro2` varchar(255) DEFAULT NULL,
  `aluno_livro3` varchar(255) DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `bibliotecas`
--

CREATE TABLE `bibliotecas` (
  `biblio_cod` int NOT NULL,
  `biblio_nome` varchar(255) NOT NULL,
  `biblio_endereco` varchar(255) NOT NULL,
  `biblio_estado` varchar(2) NOT NULL,
  `biblio_dataCriacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `bibliotecas`
--

INSERT INTO `bibliotecas` (`biblio_cod`, `biblio_nome`, `biblio_endereco`, `biblio_estado`, `biblio_dataCriacao`) VALUES
(100, 'bb', 'Rua 2', 'MG', '2020-09-12'),
(221, 'Etec Jardim Angela', 'Est. Baronesa 1695', 'SP', '2024-03-07'),
(999, 'Biblioteca do Murilo', 'Casa do Murilo n29', 'SP', '2000-06-11'),
(1112, 'Biblioteca teste1', 'Teste', 'SS', '1222-11-11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho100`
--

CREATE TABLE `carrinho100` (
  `carrinho_id` int NOT NULL,
  `carrinho_livro1` varchar(255) DEFAULT NULL,
  `carrinho_livro2` varchar(255) DEFAULT NULL,
  `carrinho_livro3` varchar(255) DEFAULT NULL,
  `aluno_rm` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `carrinho100`
--

INSERT INTO `carrinho100` (`carrinho_id`, `carrinho_livro1`, `carrinho_livro2`, `carrinho_livro3`, `aluno_rm`) VALUES
(1, NULL, NULL, NULL, 12345),
(2, NULL, NULL, NULL, 54321);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho221`
--

CREATE TABLE `carrinho221` (
  `carrinho_id` int NOT NULL,
  `carrinho_livro1` varchar(255) DEFAULT NULL,
  `carrinho_livro2` varchar(255) DEFAULT NULL,
  `carrinho_livro3` varchar(255) DEFAULT NULL,
  `aluno_rm` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `carrinho221`
--

INSERT INTO `carrinho221` (`carrinho_id`, `carrinho_livro1`, `carrinho_livro2`, `carrinho_livro3`, `aluno_rm`) VALUES
(1, NULL, NULL, NULL, 22334);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho1112`
--

CREATE TABLE `carrinho1112` (
  `carrinho_id` int NOT NULL,
  `carrinho_livro1` varchar(255) DEFAULT NULL,
  `carrinho_livro2` varchar(255) DEFAULT NULL,
  `carrinho_livro3` varchar(255) DEFAULT NULL,
  `aluno_rm` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimo100`
--

CREATE TABLE `emprestimo100` (
  `emprestimo_id` int NOT NULL,
  `emprestimo_pendente` int NOT NULL DEFAULT '1',
  `emprestimo_livro1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `emprestimo_livro2` varchar(255) NOT NULL,
  `emprestimo_livro3` varchar(255) NOT NULL,
  `aluno_rm` int DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `emprestimo100`
--

INSERT INTO `emprestimo100` (`emprestimo_id`, `emprestimo_pendente`, `emprestimo_livro1`, `emprestimo_livro2`, `emprestimo_livro3`, `aluno_rm`, `biblio_cod`) VALUES
(1, 0, '321', '1a', '', 12345, 100),
(6, 0, '1a', '321', '3232', 12345, 100),
(7, 0, '321', '1a', '', 54321, 100),
(8, 0, '1a', '', '', 12345, 100),
(9, 0, '3232', '', '', 12345, 100),
(10, 0, '1a', '321', '', 12345, 100),
(11, 0, '321', '', '', 12345, 100);

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimo221`
--

CREATE TABLE `emprestimo221` (
  `emprestimo_id` int NOT NULL,
  `emprestimo_pendente` int DEFAULT '1',
  `emprestimo_livro1` varchar(255) DEFAULT NULL,
  `emprestimo_livro2` varchar(255) DEFAULT NULL,
  `emprestimo_livro3` varchar(255) DEFAULT NULL,
  `aluno_rm` int DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `emprestimo221`
--

INSERT INTO `emprestimo221` (`emprestimo_id`, `emprestimo_pendente`, `emprestimo_livro1`, `emprestimo_livro2`, `emprestimo_livro3`, `aluno_rm`, `biblio_cod`) VALUES
(1, 0, '869.33A848qi', '82391D754sh', '', 22334, 221),
(2, 0, '869.33A848qi', '869.33A848qi', '', 22334, 221);

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimo999`
--

CREATE TABLE `emprestimo999` (
  `emprestimo_id` int NOT NULL,
  `emprestimo_pendente` int DEFAULT '1',
  `aluno_rm` int DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimo1112`
--

CREATE TABLE `emprestimo1112` (
  `emprestimo_id` int NOT NULL,
  `emprestimo_pendente` int DEFAULT '1',
  `emprestimo_livro1` varchar(255) DEFAULT NULL,
  `emprestimo_livro2` varchar(255) DEFAULT NULL,
  `emprestimo_livro3` varchar(255) DEFAULT NULL,
  `aluno_rm` int DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario100`
--

CREATE TABLE `funcionario100` (
  `func_cod` int NOT NULL,
  `func_cargo` varchar(255) DEFAULT NULL,
  `func_nome` varchar(255) DEFAULT NULL,
  `func_senha` varchar(35) DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `funcionario100`
--

INSERT INTO `funcionario100` (`func_cod`, `func_cargo`, `func_nome`, `func_senha`, `biblio_cod`) VALUES
(12345, 'Bibliotecario', 'Mariana', '12345', 100);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario221`
--

CREATE TABLE `funcionario221` (
  `func_cod` int NOT NULL,
  `func_cargo` varchar(255) DEFAULT NULL,
  `func_nome` varchar(255) DEFAULT NULL,
  `func_senha` varchar(35) DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `funcionario221`
--

INSERT INTO `funcionario221` (`func_cod`, `func_cargo`, `func_nome`, `func_senha`, `biblio_cod`) VALUES
(98765, 'Bibliotecário', 'Funcionario Teste', '12345', 221);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario999`
--

CREATE TABLE `funcionario999` (
  `func_cod` int NOT NULL,
  `func_cargo` varchar(255) DEFAULT NULL,
  `func_nome` varchar(255) DEFAULT NULL,
  `func_senha` varchar(35) DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `funcionario999`
--

INSERT INTO `funcionario999` (`func_cod`, `func_cargo`, `func_nome`, `func_senha`, `biblio_cod`) VALUES
(12345, 'Bibliotecário', 'Ronaldo', '12345', 999);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario1112`
--

CREATE TABLE `funcionario1112` (
  `func_cod` int NOT NULL,
  `func_cargo` varchar(255) DEFAULT NULL,
  `func_nome` varchar(255) DEFAULT NULL,
  `func_senha` varchar(35) DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro100`
--

CREATE TABLE `livro100` (
  `livro_cod` varchar(255) NOT NULL,
  `livro_titulo` varchar(255) DEFAULT NULL,
  `livro_tombo` int NOT NULL,
  `livro_area` varchar(255) DEFAULT NULL,
  `livro_autor` varchar(255) DEFAULT NULL,
  `livro_avaliacao` int DEFAULT '0',
  `livro_capa` varchar(255) DEFAULT NULL,
  `livro_classificacao` int DEFAULT NULL,
  `livro_emprestimos` int DEFAULT '0',
  `livro_exemplar` varchar(255) DEFAULT NULL,
  `livro_nota` varchar(255) DEFAULT NULL,
  `livro_qtdDisponivel` int DEFAULT NULL,
  `livro_qtdPaginas` int DEFAULT NULL,
  `livro_sinopse` text,
  `livro_status` int DEFAULT '1',
  `livro_vestibular` int DEFAULT '1',
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `livro100`
--

INSERT INTO `livro100` (`livro_cod`, `livro_titulo`, `livro_tombo`, `livro_area`, `livro_autor`, `livro_avaliacao`, `livro_capa`, `livro_classificacao`, `livro_emprestimos`, `livro_exemplar`, `livro_nota`, `livro_qtdDisponivel`, `livro_qtdPaginas`, `livro_sinopse`, `livro_status`, `livro_vestibular`, `biblio_cod`) VALUES
('1a', 'Livro Legal', 12, 'ca', 'Murilo', 0, 'models/src/book/1a.jpg', 0, 4, '12', 'dasdasdasd', 21, 22, ' standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie', 1, 0, NULL),
('321', 'Livro mais que legal', 321, 'ca', 'Murilo', 0, 'models/src/book/321.png', 0, 4, '12', 'dasdasdasd', 21, 22, ' standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie', 1, 0, NULL),
('3232', 'Imagem meramente ilustrativa', 12, 'ca', 'Murilo', 0, 'models/src/book/3232.png', 0, 2, '12', 'dasdasdasd', 21, 22, ' standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie', 1, 0, NULL),
('999', 'Julia Viegas', 1234123, 'Area nuclear', 'Julia', 0, 'models/src/book/999.jpg', 0, 0, '122', 'Nota muito legal', 122, 312, 'LOrem ipsum ', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro221`
--

CREATE TABLE `livro221` (
  `livro_cod` varchar(255) NOT NULL,
  `livro_titulo` varchar(255) DEFAULT NULL,
  `livro_tombo` int NOT NULL,
  `livro_area` varchar(255) DEFAULT NULL,
  `livro_autor` varchar(255) DEFAULT NULL,
  `livro_avaliacao` int DEFAULT '0',
  `livro_capa` varchar(255) DEFAULT NULL,
  `livro_classificacao` int DEFAULT NULL,
  `livro_emprestimos` int DEFAULT '0',
  `livro_nota` varchar(255) DEFAULT NULL,
  `livro_qtdDisponivel` int DEFAULT NULL,
  `livro_qtdPaginas` int DEFAULT NULL,
  `livro_sinopse` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `livro_status` int DEFAULT '1',
  `livro_vestibular` int DEFAULT '1',
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `livro221`
--

INSERT INTO `livro221` (`livro_cod`, `livro_titulo`, `livro_tombo`, `livro_area`, `livro_autor`, `livro_avaliacao`, `livro_capa`, `livro_classificacao`, `livro_emprestimos`, `livro_nota`, `livro_qtdDisponivel`, `livro_qtdPaginas`, `livro_sinopse`, `livro_status`, `livro_vestibular`, `biblio_cod`) VALUES
('82391D754sh', 'Sherlock Holmes : um estudo em vermelho', 1696, 'Ficção', 'Arthur Conan Doyle', 0, 'models/src/book/82391D754sh.png', 0, 1, '', 1, 191, 'Assassinato, traição, vingança, romance e mistério compõem o pano de fundo para Um Estudo em Vermelho, que marca a estreia da parceria entre o detetive mais famoso do mundo Sherlock Holmes, e o médico John Watson. A partir desse encontro, estará selado um pacto entre ambos: \"Na meada incolor da vida, corre o fio vermelho do crime, e o nosso dever consiste em desenredá-la, isolá-lo e expô-lo em toda a sua extensão', 1, 0, NULL),
('869.33A848qi', 'Quincas Borba', 1779, 'Romance', 'Machado de Assis', 0, 'models/src/book/869.33A848qi.png', 0, 3, '', 3, 360, 'Publicado pela primeira vez em livro em 1891, depois portanto de Memórias póstumas de Brás Cubas (1881) e antes de Dom Casmurro (1899), Quincas Borba é uma das obras mais marcantes da fase realista de Machado de Assis. Talvez por se situar justamente entre esses dois monumentos da obra machadiana, o romance muitas vezes foi considerado uma realização menor, uma espécie de mera continuação das Memórias póstumas - para irritação de seu autor, que em um raro comentário sobre a própria ficção afirmou que a presença do personagem Quincas Borba era “o único vínculo” entre os dois livros. Mais do que ao marco inaugural do Realismo no Brasil, porém, Quincas Borba remete ao Machado contista que começava a abordar temas historicamente mais próximos de sua época e a explorar os conflitos psicológicos de seus personagens com sua sofisticada e irônica narrativa em terceira pessoa presente em contos clássicos como “A cartomante” e “A causa secreta”. Neste romance da maturidade do autor, a história do provinciano Rubião - herdeiro da fortuna do idiossincrático filósofo Quincas Borba - e dos tipos urbanos da corte que o levam à ruína é narrada com o distanciamento, o ceticismo e o senso de humor implacável de que só Machado de Assis era capaz. Esta edição de Quincas Borba, além de mais uma centena de notas explicativas, traz uma extensa e abrangente introdução do britânico John Gledson, estudioso da obra machadiana e tradutor de Dom Casmurro para o inglês.', 1, 1, NULL),
('86912G642m', 'Marília de Dirceu', 1783, 'Ficção', 'Tomás Antônio Gonzaga', 0, 'models/src/book/86912G642m.jpg', 4, 0, '1º Edição', 3, 276, 'Marília de Dirceu reúne grande parte da poesia lírica de Tomás Antô- nio Gonzaga, autor associado à Inconfidência Mineira e condenado à prisão apesar de seu crime nunca ter sido efetivamente provado, foi exilado em Moçambique até o fim da vida.\r\n\r\nAo longo das liras, Gonzaga personifica o sentimento amoroso em Marília, aludindo à natureza idealizada e à durabilidade da arte diante do efêmero da vida, além de abordar temas como as aflições do cárcere, a melancolia e a constante saudade da amada.\r\n\r\nPublicado pela primeira vez em 1792, Marília de Dirceu é, além de exemplar obra poética do arcadismo brasileiro, uma das mais belas odes ao amor.', 1, 1, NULL),
('86914M478r13ed', 'Romanceiro da Inconfidência', 1784, 'Romance', 'Cecília Meireles', 0, 'models/src/book/86914M478r13ed.png', 3, 0, '', 1, 360, '', 1, 0, NULL),
('86934F178m', 'A máquina', 864, '', 'Adriana Falcão', 0, 'models/src/book/86934F178m.png', 0, 0, '', 1, 88, 'É em Nordestina, uma cidadezinha sem futuro, o cenário da doidice de Antônio por Karina. É onde se torna cada vez mais frequente o passeio das sombras deixando a cidade pelo asfalto quente, onde os diálogos nem sempre conversam e onde uma máquina é instalada. É lá mesmo, onde o nada insiste em acontecer todos os dias, que um dia algo acontece.', 1, 0, NULL),
('86934G963a', 'Água funda', 1790, 'Romance', 'Ruth Guimarães', 0, 'models/src/book/86934G963a.png', 3, 0, '', 2, 200, 'Romance de estreia de Ruth Guimarães (1920-2014), uma das primeiras escritoras negras a ganhar destaque na cena literária brasileira, Água funda foi lançado em 1946 ― mesmo ano de Sagarana, de Guimarães Rosa. Mas enquanto o escritor mineiro se valia da plasticidade da fala sertaneja para inventar um léxico novo, entre o popular e o erudito, Ruth fez aqui uma original reconstituição etnográfica da linguagem caipira ― que conheceu pessoalmente em sua infância passada no Vale do Paraíba e Sul de Minas ―, aproximando-a das pesquisas de Mário de Andrade.\r\n\r\nEntrelaçando diferentes tempos e personagens, inseridos no universo de uma comunidade rural na Serra da Mantiqueira, a autora construiu uma prosa ágil e fluida, permeada de ditos populares e causos marcados pela superstição e pelo fatalismo, que antecipa em certos aspectos o realismo mágico de Juan Rulfo e Gabriel García Márquez. É o caso das histórias de Sinhá Carolina, dona da Fazenda Nossa Senhora dos Olhos d’Água, e do casal Joca e Curiango, trabalhadores locais, num arco temporal que vai da época da escravidão até os anos 1930. Como afirma o narrador do livro: “A gente passa nesta vida como canoa em água funda. Passa. A água bole um pouco. E depois não fica mais nada”.\r\n\r\nEsta nova edição de Água funda, que se tornou um clássico da literatura brasileira do século XX, conta ainda com excertos da crítica da época de seu lançamento, incluindo nomes como Brito Broca, Antonio Candido e Alvaro Lins, e uma das primeiras entrevistas de Ruth Guimarães, saudada então como uma revelação de nossas letras.', 1, 1, NULL),
('8693A553', 'O peru de natal e outros contos', 869, 'Romance', 'Mário de Andrade', 0, 'models/src/book/8693A553.png', 0, 0, '', 1, 205, 'Desde cedinho, desde os tempos de ginásio, em que arranjava regulamente uma reprovação todos os anos; desde o beijo às escondidas, num prima, aos dez anos, descoberto por Tia Velha, um detestável de tia; e principalmente desde as lições que dei ou recebi, não sei, duma criada de parentes: eu consegui no reformatório do lar e na vasta parentagem, a fama conciliatória de louco.\r\nÉ doido, coitado! falavam. Meus pais falavam com certa tristeza condescendente, o resto da parentagem buscando exemplo para os filhos e provavelmente com aquele prazer dos que convencem de algum superioridade. Não tinham doidos entre os filhos. Pois foi o que me salvou, essa fama. ', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro999`
--

CREATE TABLE `livro999` (
  `livro_cod` varchar(255) NOT NULL,
  `livro_titulo` varchar(255) DEFAULT NULL,
  `livro_tombo` int NOT NULL,
  `livro_area` varchar(255) DEFAULT NULL,
  `livro_autor` varchar(255) DEFAULT NULL,
  `livro_avaliacao` int DEFAULT '0',
  `livro_capa` varchar(255) DEFAULT NULL,
  `livro_classificacao` int DEFAULT NULL,
  `livro_emprestimos` int DEFAULT '0',
  `livro_exemplar` varchar(255) DEFAULT NULL,
  `livro_nota` varchar(255) DEFAULT NULL,
  `livro_qtdDisponivel` int DEFAULT NULL,
  `livro_qtdPaginas` int DEFAULT NULL,
  `livro_sinopse` text,
  `livro_status` int DEFAULT '1',
  `livro_vestibular` int DEFAULT '1',
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `livro999`
--

INSERT INTO `livro999` (`livro_cod`, `livro_titulo`, `livro_tombo`, `livro_area`, `livro_autor`, `livro_avaliacao`, `livro_capa`, `livro_classificacao`, `livro_emprestimos`, `livro_exemplar`, `livro_nota`, `livro_qtdDisponivel`, `livro_qtdPaginas`, `livro_sinopse`, `livro_status`, `livro_vestibular`, `biblio_cod`) VALUES
('231', '321', 213, '31', '321', 0, 'models/src/book/231.', 0, 0, '321', '213', 321, 321, '332', 1, 0, NULL),
('321', '321', 13, '31', '321', 0, 'models/src/book/321.png', 1, 0, '321', '31', 31, 31, '31', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro1112`
--

CREATE TABLE `livro1112` (
  `livro_cod` varchar(255) NOT NULL,
  `livro_titulo` varchar(255) DEFAULT NULL,
  `livro_tombo` int NOT NULL,
  `livro_area` varchar(255) DEFAULT NULL,
  `livro_autor` varchar(255) DEFAULT NULL,
  `livro_avaliacao` int DEFAULT '0',
  `livro_capa` varchar(255) DEFAULT NULL,
  `livro_classificacao` int DEFAULT NULL,
  `livro_emprestimos` int DEFAULT '0',
  `livro_nota` varchar(255) DEFAULT NULL,
  `livro_qtdDisponivel` int DEFAULT NULL,
  `livro_qtdPaginas` int DEFAULT NULL,
  `livro_sinopse` longtext,
  `livro_status` int DEFAULT '1',
  `livro_vestibular` int DEFAULT '1',
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos100`
--

CREATE TABLE `pedidos100` (
  `pedido_id` int NOT NULL,
  `pedido_livro1` varchar(255) DEFAULT NULL,
  `pedido_livro2` varchar(255) DEFAULT NULL,
  `pedido_livro3` varchar(255) DEFAULT NULL,
  `pedido_tipo` int DEFAULT '0',
  `pedido_visto` int NOT NULL DEFAULT '0',
  `aluno_rm` int DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `pedidos100`
--

INSERT INTO `pedidos100` (`pedido_id`, `pedido_livro1`, `pedido_livro2`, `pedido_livro3`, `pedido_tipo`, `pedido_visto`, `aluno_rm`, `biblio_cod`) VALUES
(8, '321', '1a', '', 0, 1, 54321, 100),
(9, '321', '1a', '', 1, 1, 54321, 100),
(10, '321', '', '', 0, 1, 12345, 100),
(11, '1a', '3232', '', 0, 1, 54321, 100),
(12, '1a', '', '', 0, 1, 12345, 100),
(13, '1a', '', '', 1, 1, 12345, 100),
(14, '3232', '', '', 0, 1, 12345, 100),
(15, '3232', '', '', 1, 1, 12345, 100),
(16, '1a', '321', '', 0, 1, 12345, 100),
(17, '1a', '321', '', 1, 1, 12345, 100),
(18, '1a', '1a', '1a', 0, 1, 12345, 100),
(19, '321', '', '', 0, 1, 12345, 100),
(20, '321', '', '', 1, 1, 12345, 100);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos221`
--

CREATE TABLE `pedidos221` (
  `pedido_id` int NOT NULL,
  `pedido_livro1` varchar(255) DEFAULT NULL,
  `pedido_livro2` varchar(255) DEFAULT NULL,
  `pedido_livro3` varchar(255) DEFAULT NULL,
  `pedido_tipo` int DEFAULT '0',
  `pedido_visto` int DEFAULT '0',
  `aluno_rm` int DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `pedidos221`
--

INSERT INTO `pedidos221` (`pedido_id`, `pedido_livro1`, `pedido_livro2`, `pedido_livro3`, `pedido_tipo`, `pedido_visto`, `aluno_rm`, `biblio_cod`) VALUES
(1, '869.33A848qi', '82391D754sh', '', 0, 1, 22334, 221),
(2, '869.33A848qi', '82391D754sh', '', 1, 1, 22334, 221),
(3, '869.33A848qi', '869.33A848qi', '', 0, 1, 22334, 221),
(4, '869.33A848qi', '869.33A848qi', '', 1, 1, 22334, 221),
(5, '86912G642m', '', '', 0, 0, 22334, 221);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos999`
--

CREATE TABLE `pedidos999` (
  `pedido_id` int NOT NULL,
  `pedido_livro1` varchar(255) DEFAULT NULL,
  `pedido_livro2` varchar(255) DEFAULT NULL,
  `pedido_livro3` varchar(255) DEFAULT NULL,
  `pedidio_tipo` int NOT NULL DEFAULT '0',
  `aluno_rm` int DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos1112`
--

CREATE TABLE `pedidos1112` (
  `pedido_id` int NOT NULL,
  `pedido_livro1` varchar(255) DEFAULT NULL,
  `pedido_livro2` varchar(255) DEFAULT NULL,
  `pedido_livro3` varchar(255) DEFAULT NULL,
  `pedido_tipo` int DEFAULT '0',
  `pedido_visto` int DEFAULT '0',
  `aluno_rm` int DEFAULT NULL,
  `biblio_cod` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`adm_cod`);

--
-- Índices de tabela `aluno100`
--
ALTER TABLE `aluno100`
  ADD PRIMARY KEY (`aluno_rm`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `aluno221`
--
ALTER TABLE `aluno221`
  ADD PRIMARY KEY (`aluno_rm`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `aluno999`
--
ALTER TABLE `aluno999`
  ADD PRIMARY KEY (`aluno_rm`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `aluno1112`
--
ALTER TABLE `aluno1112`
  ADD PRIMARY KEY (`aluno_rm`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `bibliotecas`
--
ALTER TABLE `bibliotecas`
  ADD PRIMARY KEY (`biblio_cod`);

--
-- Índices de tabela `carrinho100`
--
ALTER TABLE `carrinho100`
  ADD PRIMARY KEY (`carrinho_id`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `carrinho221`
--
ALTER TABLE `carrinho221`
  ADD PRIMARY KEY (`carrinho_id`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `carrinho1112`
--
ALTER TABLE `carrinho1112`
  ADD PRIMARY KEY (`carrinho_id`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `emprestimo100`
--
ALTER TABLE `emprestimo100`
  ADD PRIMARY KEY (`emprestimo_id`),
  ADD KEY `biblio_cod` (`biblio_cod`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `emprestimo221`
--
ALTER TABLE `emprestimo221`
  ADD PRIMARY KEY (`emprestimo_id`),
  ADD KEY `biblio_cod` (`biblio_cod`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `emprestimo999`
--
ALTER TABLE `emprestimo999`
  ADD PRIMARY KEY (`emprestimo_id`),
  ADD KEY `biblio_cod` (`biblio_cod`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `emprestimo1112`
--
ALTER TABLE `emprestimo1112`
  ADD PRIMARY KEY (`emprestimo_id`),
  ADD KEY `biblio_cod` (`biblio_cod`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `funcionario100`
--
ALTER TABLE `funcionario100`
  ADD PRIMARY KEY (`func_cod`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `funcionario221`
--
ALTER TABLE `funcionario221`
  ADD PRIMARY KEY (`func_cod`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `funcionario999`
--
ALTER TABLE `funcionario999`
  ADD PRIMARY KEY (`func_cod`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `funcionario1112`
--
ALTER TABLE `funcionario1112`
  ADD PRIMARY KEY (`func_cod`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `livro100`
--
ALTER TABLE `livro100`
  ADD PRIMARY KEY (`livro_cod`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `livro221`
--
ALTER TABLE `livro221`
  ADD PRIMARY KEY (`livro_cod`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `livro999`
--
ALTER TABLE `livro999`
  ADD PRIMARY KEY (`livro_cod`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `livro1112`
--
ALTER TABLE `livro1112`
  ADD PRIMARY KEY (`livro_cod`),
  ADD KEY `biblio_cod` (`biblio_cod`);

--
-- Índices de tabela `pedidos100`
--
ALTER TABLE `pedidos100`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `biblio_cod` (`biblio_cod`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `pedidos221`
--
ALTER TABLE `pedidos221`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `biblio_cod` (`biblio_cod`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `pedidos999`
--
ALTER TABLE `pedidos999`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `biblio_cod` (`biblio_cod`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- Índices de tabela `pedidos1112`
--
ALTER TABLE `pedidos1112`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `biblio_cod` (`biblio_cod`),
  ADD KEY `aluno_rm` (`aluno_rm`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho100`
--
ALTER TABLE `carrinho100`
  MODIFY `carrinho_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `carrinho221`
--
ALTER TABLE `carrinho221`
  MODIFY `carrinho_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carrinho1112`
--
ALTER TABLE `carrinho1112`
  MODIFY `carrinho_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `emprestimo100`
--
ALTER TABLE `emprestimo100`
  MODIFY `emprestimo_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `emprestimo221`
--
ALTER TABLE `emprestimo221`
  MODIFY `emprestimo_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `emprestimo1112`
--
ALTER TABLE `emprestimo1112`
  MODIFY `emprestimo_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos100`
--
ALTER TABLE `pedidos100`
  MODIFY `pedido_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `pedidos221`
--
ALTER TABLE `pedidos221`
  MODIFY `pedido_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pedidos999`
--
ALTER TABLE `pedidos999`
  MODIFY `pedido_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos1112`
--
ALTER TABLE `pedidos1112`
  MODIFY `pedido_id` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `aluno100`
--
ALTER TABLE `aluno100`
  ADD CONSTRAINT `aluno100_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `aluno221`
--
ALTER TABLE `aluno221`
  ADD CONSTRAINT `aluno221_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `aluno999`
--
ALTER TABLE `aluno999`
  ADD CONSTRAINT `aluno999_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `aluno1112`
--
ALTER TABLE `aluno1112`
  ADD CONSTRAINT `aluno1112_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `carrinho100`
--
ALTER TABLE `carrinho100`
  ADD CONSTRAINT `carrinho100_ibfk_1` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno100` (`aluno_rm`);

--
-- Restrições para tabelas `carrinho221`
--
ALTER TABLE `carrinho221`
  ADD CONSTRAINT `carrinho221_ibfk_1` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno221` (`aluno_rm`);

--
-- Restrições para tabelas `carrinho1112`
--
ALTER TABLE `carrinho1112`
  ADD CONSTRAINT `carrinho1112_ibfk_1` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno1112` (`aluno_rm`);

--
-- Restrições para tabelas `emprestimo100`
--
ALTER TABLE `emprestimo100`
  ADD CONSTRAINT `emprestimo100_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`),
  ADD CONSTRAINT `emprestimo100_ibfk_2` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno100` (`aluno_rm`);

--
-- Restrições para tabelas `emprestimo221`
--
ALTER TABLE `emprestimo221`
  ADD CONSTRAINT `emprestimo221_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`),
  ADD CONSTRAINT `emprestimo221_ibfk_2` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno221` (`aluno_rm`);

--
-- Restrições para tabelas `emprestimo999`
--
ALTER TABLE `emprestimo999`
  ADD CONSTRAINT `emprestimo999_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`),
  ADD CONSTRAINT `emprestimo999_ibfk_2` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno999` (`aluno_rm`);

--
-- Restrições para tabelas `emprestimo1112`
--
ALTER TABLE `emprestimo1112`
  ADD CONSTRAINT `emprestimo1112_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`),
  ADD CONSTRAINT `emprestimo1112_ibfk_2` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno1112` (`aluno_rm`);

--
-- Restrições para tabelas `funcionario100`
--
ALTER TABLE `funcionario100`
  ADD CONSTRAINT `funcionario100_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `funcionario221`
--
ALTER TABLE `funcionario221`
  ADD CONSTRAINT `funcionario221_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `funcionario999`
--
ALTER TABLE `funcionario999`
  ADD CONSTRAINT `funcionario999_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `funcionario1112`
--
ALTER TABLE `funcionario1112`
  ADD CONSTRAINT `funcionario1112_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `livro100`
--
ALTER TABLE `livro100`
  ADD CONSTRAINT `livro100_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `livro221`
--
ALTER TABLE `livro221`
  ADD CONSTRAINT `livro221_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `livro999`
--
ALTER TABLE `livro999`
  ADD CONSTRAINT `livro999_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `livro1112`
--
ALTER TABLE `livro1112`
  ADD CONSTRAINT `livro1112_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`);

--
-- Restrições para tabelas `pedidos100`
--
ALTER TABLE `pedidos100`
  ADD CONSTRAINT `pedidos100_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`),
  ADD CONSTRAINT `pedidos100_ibfk_2` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno100` (`aluno_rm`);

--
-- Restrições para tabelas `pedidos221`
--
ALTER TABLE `pedidos221`
  ADD CONSTRAINT `pedidos221_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`),
  ADD CONSTRAINT `pedidos221_ibfk_2` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno221` (`aluno_rm`);

--
-- Restrições para tabelas `pedidos999`
--
ALTER TABLE `pedidos999`
  ADD CONSTRAINT `pedidos999_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`),
  ADD CONSTRAINT `pedidos999_ibfk_2` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno999` (`aluno_rm`);

--
-- Restrições para tabelas `pedidos1112`
--
ALTER TABLE `pedidos1112`
  ADD CONSTRAINT `pedidos1112_ibfk_1` FOREIGN KEY (`biblio_cod`) REFERENCES `bibliotecas` (`biblio_cod`),
  ADD CONSTRAINT `pedidos1112_ibfk_2` FOREIGN KEY (`aluno_rm`) REFERENCES `aluno1112` (`aluno_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
