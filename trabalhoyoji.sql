/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(180) DEFAULT NULL,
  `email` varchar(180) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `pessoas` (`id`, `nome`, `email`, `telefone`, `cpf`, `senha`, `created`, `modified`) VALUES
(1, 'Claudemir', 'claudemir@gmail.com', '(11) 11111-1111', '111.111.111-11', '111', '2022-04-29 01:39:16', '2022-04-29 01:39:16');
INSERT INTO `pessoas` (`id`, `nome`, `email`, `telefone`, `cpf`, `senha`, `created`, `modified`) VALUES
(2, 'Arlindo', 'arlindo@gmail.com', '(22) 22222-2222', '222.222.222-22', '222', '2022-04-29 01:39:42', '2022-04-29 01:39:42');
INSERT INTO `pessoas` (`id`, `nome`, `email`, `telefone`, `cpf`, `senha`, `created`, `modified`) VALUES
(3, 'Michel', 'michel@gmail.com', '(33) 33333-3333', '333.333.333-33', '333', '2022-04-29 01:40:03', '2022-04-29 01:40:03');

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20220429013656, 'CreatePessoas', '2022-04-29 01:37:45', '2022-04-29 01:37:45', 0);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;