-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para youfitness
CREATE DATABASE IF NOT EXISTS `youfitness` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `youfitness`;

-- Copiando estrutura para tabela youfitness.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `idade` varchar(45) NOT NULL,
  `peso` varchar(2) NOT NULL,
  `altura` varchar(4) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela youfitness.alunos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`id`, `nome`, `idade`, `peso`, `altura`, `sexo`, `usuario_id`, `email`, `senha`, `tipo`) VALUES
	(1, 'lucas', '20', '90', '190', 'm', NULL, 'lucas@gmail.com', '123', NULL),
	(2, 'jamile', '22', '85', '150', 'f', NULL, 'jamile@gmail.com', '123', 1),
	(3, 'joao', '20', '90', '190', 'm', NULL, 'joao@gmail.com', NULL, NULL);
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

-- Copiando estrutura para tabela youfitness.exercicios
CREATE TABLE IF NOT EXISTS `exercicios` (
  `treinos_id` int(11) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `nome` varchar(80) NOT NULL,
  KEY `fk_exercicios_treinos1` (`treinos_id`),
  CONSTRAINT `fk_exercicios_treinos1` FOREIGN KEY (`treinos_id`) REFERENCES `treinos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela youfitness.exercicios: ~49 rows (aproximadamente)
/*!40000 ALTER TABLE `exercicios` DISABLE KEYS */;
INSERT INTO `exercicios` (`treinos_id`, `sexo`, `nome`) VALUES
	(2, 'm', '3 x 15 Supino Reto'),
	(3, 'f', '3 x 15 Agachamento Livre'),
	(4, 'm', '3 x 20 Agachamento Livre'),
	(5, 'f', '3 x 10 Remada Livre'),
	(6, 'm', '3 x 10 Remada Com Alteres'),
	(7, 'f', '3 x 8 Supino Reto'),
	(8, 'm ', '15 Minutos Esteira'),
	(9, 'f', '3 x 10 10 Minutos Esteira'),
	(10, 'm', '3 x 15 Supino Reto'),
	(1, 'f', '3 x 8 Supino Reto'),
	(2, 'm', '3 x 15 Crucifixo'),
	(2, 'm', '3 x 15 Cross Over'),
	(2, 'm', '3 x 10 Supino Com Alteres'),
	(2, 'm', '3 x 10 Triceps Pulley'),
	(2, 'm', '3 x 10 Triceps Barra'),
	(10, 'm', '3 x 10 Triceps Barra'),
	(10, 'm', '3 x 10 Triceps Testa'),
	(10, 'm', '3 x 15 Cruscifixo CrossOver'),
	(10, 'm', '3 x 15 Cruscifixo Livre'),
	(4, 'm', '3 x 20 Agachamento Guiado'),
	(4, 'm', '3 x 15 LegPress 45'),
	(4, 'm', '3 x 15 LegPress 90'),
	(4, 'm', '3 x 15 Panturrilha Livre'),
	(6, 'm', '3 x 10 Puxada Alta'),
	(6, 'm', '3 x 15 Remada Com Triangulo'),
	(6, 'm', '3 x 5 Barra Fixa'),
	(6, 'm', '3 x 10 Martelo Com Alteres'),
	(8, 'm', '3 x 10 Passada Livre'),
	(8, 'm', '3 x 15 Cadeira Extensora'),
	(8, 'm', '3 x 15 Cadeira Flexora'),
	(8, 'm', '3 x 10 Stiff'),
	(1, 'f', '3 x 10 Cruscifixo'),
	(1, 'f', '3 x 10 CrossOver'),
	(1, 'f', '3 x 10 Triceps Barra'),
	(1, 'f', '3 x 10 Triceps Testa'),
	(3, 'f', '3 x 10 Cadeira Extensora'),
	(3, 'f', '3 x 15 Passos Alternados'),
	(3, 'f', '3 x 10 Stiff'),
	(3, 'f', 'Cadeira Flexora'),
	(5, 'f', '3 x 10 Remada Guiada'),
	(5, 'f', '3 x 10 Puxada Alta'),
	(5, 'f', '3 x 10 Voador '),
	(5, 'f', '3 x 10 Remada com Triangulo'),
	(7, 'f', '3 x 8 Cruscifixo Voador'),
	(7, 'f', '3 x 10 CrossOver'),
	(7, 'f', '3 x 10 Supino Reclinado'),
	(7, 'f', '3 x 8 Supino Inclinado'),
	(9, 'f', '3 x 10 Agachamento Livre'),
	(9, 'f', '3 x 10 Stiff '),
	(9, 'f', '3 x 10 Glúteo'),
	(9, 'f', '3 x 15 Panturrilhas Livre');
/*!40000 ALTER TABLE `exercicios` ENABLE KEYS */;

-- Copiando estrutura para tabela youfitness.treinos
CREATE TABLE IF NOT EXISTS `treinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) DEFAULT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela youfitness.treinos: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `treinos` DISABLE KEYS */;
INSERT INTO `treinos` (`id`, `nome`, `sexo`) VALUES
	(1, 'Segunda', 'f'),
	(2, 'Segunda', 'm'),
	(3, 'Terca', 'f'),
	(4, 'Terca', 'm'),
	(5, 'Quarta', 'f'),
	(6, 'Quarta', 'm'),
	(7, 'Quinta', 'f'),
	(8, 'Quinta', 'm'),
	(9, 'Sexta', 'f'),
	(10, 'Sexta', 'm');
/*!40000 ALTER TABLE `treinos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
