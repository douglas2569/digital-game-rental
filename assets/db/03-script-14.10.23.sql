-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/10/2023 às 19:12
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `games`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `raing` decimal(4,2) NOT NULL,
  `cover` varchar(40) DEFAULT NULL,
  `producer_fk` int(11) NOT NULL,
  `gender_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `raing`, `cover`, `producer_fk`, `gender_fk`) VALUES
(12, 'Mario Odissey', 'Em Super Mario Odyssey, o jogador joga como Mario em suas aventuras por terras além do Reino dos Cogumelos com o auxílio de um novo personagem introduzido no jogo, o Cappy. Esse \"chapéu vivo\" garante um novo acréscimo à dificuldade e a dinâmica já vista nos jogos anteriores, pois além de ser uma forma de ataque além do seu tradicional pulo, ele dá também a habilidade de \"capturar\" os carismáticos inimigos da série e alguns objetos. A nova mecânica funciona da seguinte maneira: ao chacoalhar os Joy-Cons ou apertar um simples botão, Cappy é arremessado e volta para a cabeça de Mario automaticamente, apenas se não encostar em algo que ele possa interagir. Há também vários outros simples movimentos com os Joy-Cons que fazem o chapéu rodear o cenário de maneiras diferentes, sendo útil de várias maneiras, como por exemplo a possibilidade de coletar moedas eliminar inimigos ao seu redor com mais rapidez. As mecânicas já vistas anteriormente como o \"Ground Pound\" e o \"Wall Jump\" também estão presentes no game.', 9.50, 'mario.png', 5, 2),
(13, 'Call of Dutty: Black Ops', 'Call of Duty: Black Ops é um jogo eletrônico de tiro em primeira pessoa desenvolvido pela Treyarch, publicado pela Activision e lançado mundialmente em 9 de novembro de 2010 para as plataformas Microsoft Windows, Xbox 360, PlayStation 3, Wii e Nintendo DS. Anunciado em 30 de abril de 2010, o jogo é o sétimo capítulo da série Call of Duty, e o primeiro situado durante a Guerra Fria. É o terceiro da série a ser desenvolvido pela Treyarch, sendo uma sequência direta de Call of Duty: World at War.\r\n\r\nNas primeiras 24 horas de lançamento, o jogo vendeu mais de 5,6 milhões de unidades, sendo 4,2 milhões nos Estados Unidos e 1,4 milhão no Reino Unido, batendo o recorde alcançado por seu antecessor, Modern Warfare 2, em aproximadamente 2,3 milhões de cópias. A 1 de maio de 2012 foi revelado a sequência Call of Duty: Black Ops II com lançamento para novembro de 2012.', 3.50, 'cod.png', 7, 1),
(14, 'League of Legends', 'League of Legends abreviado como LoL é um jogo eletrônico do gênero multiplayer online battle arena, desenvolvido e publicado pela Riot Games para Microsoft Windows e Mac OS X. É um jogo gratuito para jogar e inspirado no modo Defense of the Ancients de Warcraft III: The Frozen Throne.\r\n\r\nEm League of Legends, os jogadores assumem o papel de \"invocadores\", controlando campeões com habilidades únicas e que lutam com seu time contra outros invocadores ou campeões controlados pelo computador. No modo mais popular do jogo, o objetivo de cada time é destruir o nexus da equipe adversária, uma construção localizada na base e protegida por outras estruturas. Cada jogo de League of Legends é distinto, pois os campeões sempre começam fracos e progridem através da acumulação de ouro e da experiência ao longo da partida.', 8.50, 'lol.png', 4, 1),
(15, 'Donkey Kong Tropical Freeze', 'Donkey Kong Country: Tropical Freeze é um jogo eletrônico de plataforma side-scrolling desenvolvido pela Retro Studios que foi publicado pela Nintendo para o Wii U em 21 de fevereiro de 2014 nos Estados Unidos. O décimo-sétimo jogo da série, e o primeiro em alta definição, segue o jogo de 2010 Donkey Kong Country Returns, também pela Retro Studios. Foi anunciado durante a pre-conferência E3 2013 da Nintendo em 11 de junho de 2013.A historia do jogo foca num grupo de criaturas viking, como morsas, corujas e pinguins, que invadem a Donkey Kong Island, forçando o protagonista Donkey Kong lutar contra eles com a ajuda de seus amigos Diddy Kong e Dixie Kong, a última fazendo sua primeira aparição na série desde Donkey Kong Country 3: Dixie Kongs Double Trouble, lançado em 1996. Até mesmo o velho Cranky Kong entrou para a aventura.', 8.00, 'donkey.png', 5, 2),
(16, 'Sonic the Hedgehog', 'Sonic the Hedgehog é uma franquia de videogames criada e produzida pela Sega. A franquia é centrada em uma série de jogos de plataforma focados em velocidade. O protagonizada da série é um ouriço azul chamado Sonic, cuja vida pacífica é sempre interrompida pelo antagonista principal da série, Dr. Eggman. Tipicamente Sonic -normalmente junto de um de seus amigos, como Tails, Amy e Knuckles- se aventuram para parar Eggman e seus planos para dominação mundial. O primeiro jogo da série, lançado em 1991, foi concebido pela divisão da Sega, Sonic Team após um pedido para um novo mascote. O título foi um sucesso, e foi renovado para várias sequelas, que levaram a Sega a liderança no rumo dos consoles de vídeogame da era 16-bit do começo até a metade dos anos 90.', 8.50, 'sonic.png', 9, 2),
(17, 'God of War', 'God of War é uma série de jogos eletrônicos de ação-aventura vagamente baseada na mitologia grega criada por David Jaffe. Iniciada em 2005, a série tornou-se carro-chefe para a marca PlayStation, que consiste em sete jogos em várias plataformas. Um oitavo título está em desenvolvimento; será uma reinicialização suave para a série e será baseada na mitologia nórdica. A história centra-se em torno de sua personagem jogável, Kratos, um guerreiro espartano enganado para matar sua esposa e filha por seu antigo mestre, o deus da guerra Ares. Kratos mata Ares a mando da deusa Atena e toma seu lugar como o novo deus da guerra, mas ainda é assombrado por pesadelos de seu passado. Revelado ser um semideus e filho de Zeus, o rei dos deuses do Olimpo, que trai Kratos. O espartano em seguida busca vingança contra os deuses para suas maquinações. O que se segue é uma série de tentativas de libertar-se da influência dos deuses e dos titãs e vingança. Cada jogo faz parte de uma saga com vingança como motivo central.', 9.50, 'gow.png', 6, 1),
(18, 'Counter-Strike', 'Counter-Strike (também abreviado por CS) é um popular jogo eletrônico de tiro em primeira pessoa. Inicialmente criado como um \"mod\" de Half-Life para jogos online, foi desenvolvido por Minh Le e Jess Cliffe e depois adquirido pela Valve Corporation. Foi lançado em 1999, porém em 2000 ele começou a ser comercializado oficialmente, e posteriormente foram feitas versões para Xbox, Mac OS X e Linux. Atualmente o game é jogado na versão Counter-Strike: Global Offensive.O jogo é baseado em rodadas nas quais equipes de contra-terroristas e terroristas combatem-se até a eliminação completa de um dos times, e tem como objetivo principal plantar e desarmar bombas, ou sequestrar e salvar reféns.\r\n\r\nO Counter-Strike foi um dos responsáveis pela massificação dos jogos por rede no início do século, sendo considerado o grande responsável pela popularização das LAN houses no mundo. O jogo é considerado o originador do \"esporte eletrônico\", onde muitos jogadores levam-no a sério e recebem salários fixos, existindo até clãs profissionais, e que são patrocinados por grandes empresas como a Intel e a NVIDIA. Pelo mundo existem ligas profissionais onde o Counter-Strike está presente, como o caso da CPL (que encerrou suas atividades em 2008), ESWC, ESL, WCG e WEG. No caso da ESWC funciona da seguinte forma: cada país tem as suas qualificações no qual qualquer clã pode ir a uma qualificação em uma lan house em qualquer parte do mesmo país, passando depois às melhores equipes, as melhores equipes de cada país encontram-se depois no complexo da ESWC, localizado em Paris, para disputar o lugar da melhor equipe do mundo de Counter-Strike.', 9.00, 'cs.png', 13, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `genders`
--

INSERT INTO `genders` (`id`, `gender`) VALUES
(1, 'Ação'),
(2, 'Aventura'),
(3, 'Terror'),
(4, 'Estratégia'),
(5, 'RPG'),
(6, 'Esporte'),
(7, 'Corrida'),
(8, 'Tabuleiro'),
(9, 'Puzzle'),
(10, 'Luta'),
(11, 'Musical');

-- --------------------------------------------------------

--
-- Estrutura para tabela `producers`
--

CREATE TABLE `producers` (
  `id` int(11) NOT NULL,
  `producer` varchar(20) NOT NULL,
  `country` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `producers`
--

INSERT INTO `producers` (`id`, `producer`, `country`) VALUES
(1, 'Microsoft', 'EUA'),
(2, 'Tencent', 'China'),
(3, 'Nintendo', 'Japão'),
(4, 'Sony', 'Japão'),
(5, 'Activision', 'EUA'),
(6, 'EA', 'EUA'),
(7, 'Sega', 'Japão'),
(8, 'Namco Bandai', 'Japão'),
(9, 'Konami', 'Japão'),
(10, 'Ubisoft', 'EUA'),
(11, 'Valve', 'EUA'),
(12, 'Square Enix', 'Japão'),
(13, 'Take Two', 'EUA'),
(14, 'Capcom', 'Japão');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `hash` varchar(255) NOT NULL DEFAULT '$2y$10$UpMQCcir.v649HrdLvUXiOC/ftU7xWhSxm8QhX.VzSe9LZHhvW/Ty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `type`, `hash`) VALUES
(1, 'admin', 'Gustavo Guanabara', '$2y$10$fSpRsbaic0FzX/PlTbQZ6eGf2Z0nzXS9ha/qYtoPS1rLIztpcb562', 'admin', '$2y$10$UpMQCcir.v649HrdLvUXiOC/ftU7xWhSxm8QhX.VzSe9LZHhvW/Tw'),
(2, 'teste', 'João da Silva', '$2y$10$k/BGtJUlivWRzN43tt066edyByCgyW0PENv035yF/G9AQ6WBMzhoi', 'editor', '$2y$10$UpMQCcir.v649HrdLvUXiOC/ftU7xWhSxm8QhX.VzSe9LZHhvW/Ty'),
(3, 'teste2', 'teste2', '$2y$10$X0Qigqg6VjcdXMDE9cGaRuc1xLJzIZtWiTc4igdMb7j56DrZNpzbq', 'editor', '$2y$10$gnJYNUZDlnic5YmrDAKfeeVSi.EFG8AiJaoAYp/oJ1IR2ogC9bAKu');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producer_fk` (`producer_fk`),
  ADD KEY `gender_fk` (`gender_fk`);

--
-- Índices de tabela `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `producers`
--
ALTER TABLE `producers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`producer_fk`) REFERENCES `producers` (`id`),
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`gender_fk`) REFERENCES `genders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
