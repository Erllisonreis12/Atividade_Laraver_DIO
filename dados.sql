-- --------------------------------------------------------
-- Servidor:                     mariadev.semsa
-- Versão do servidor:           10.11.6-MariaDB - MariaDB Server
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela heimdall.users: ~7 rows (aproximadamente)
INSERT IGNORE INTO `users` (`id`, `name`, `cpf_cnpj`, `email`, `password`, `status`, `username`, `photo`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Administrador de Sistema', '00000000000', 'ti.chamados@pmm.am.gov.br', '$2y$10$YMOGl60xwfd17luKMX7r8OUWHf8EvUp0svcEdi39GHkxMsMoX/U1q', 1, 'master', 'profile-default-circle.png', NULL, NULL, '2022-03-21 12:40:51', '2023-12-04 14:37:14', NULL),
	(2, 'Marcos Paulo', '00817021248', 'marcos.mamede@pmm.am.gov.br', '$2y$10$NH5EeCD9QbWx7SgEIlHFTut/.DMOE9jrx5Y1X6WvIZM7xVEFdEVWe', 1, 'marcos.mamede', 'profile-default-circle.png', NULL, NULL, '2022-03-29 11:53:49', '2023-12-06 08:50:06', NULL),
	(3, 'Ismael Silva', '00086101269', 'ismael.silva@manaus.am.gov.br', '$2y$10$PniBJsJtTFNj24bXSnseKer4rjxYI2s03SiFPV4.ZtJQFCjmxBDO2', 1, 'ismael.silva', 'profile-default-circle.png', NULL, NULL, '2023-12-04 09:34:53', '2023-12-04 09:38:54', NULL),
	(4, 'Jefferson Souza', '52892859204', 'jefferson.souza@pmm.am.gov.br', '$2y$10$qdX/aSTkXDnYTTxEYe1enuNirrMuJ7TDzXeJHE0cMQp8AxYIxnJ8m', 1, 'jefferson.souza', 'profile-default-circle.png', NULL, NULL, '2023-12-04 15:58:22', '2023-12-04 15:58:22', NULL),
	(9, 'Glenn Fonseca', '01536743267', 'glenn.fonseca@pmm.am.gov.br', '$2y$10$Yk3a0Lq1izUQ4ZXcMMZxiO.9yTKd/S9nfeCEzgjZRHnf646E/07G6', 1, 'glenn.fonseca', 'profile-default-circle.png', NULL, NULL, '2023-12-05 10:46:05', '2023-12-06 10:34:49', NULL),
	(10, 'Rafael Cacote', '74527436287', 'rafael.cacote@gmail.com', '$2y$10$RrStwKZoyUBxVQeGsLKcOOK6Uy.jJS9a/2i0.yLh8QGo4q5vvFOuG', 1, 'rafael.cacote', 'profile-default-circle.png', NULL, NULL, '2023-12-27 14:04:41', '2024-01-03 09:08:00', NULL),
	(11, 'Stepheson', '70343556227', 'stepheson.custodio@manaus.am.gov.br', '$2y$10$99TPoJQg/8CPV7lhfDajTeQPmD8yamK0uqczO9UVzxeGJuNAyTIXm', 1, 'stepheson.custodio', 'profile-default-circle.png', NULL, NULL, '2024-01-19 15:28:36', '2024-01-19 15:37:30', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
usersexemploexemploexemploexemplousersusers