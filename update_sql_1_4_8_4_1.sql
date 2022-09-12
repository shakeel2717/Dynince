/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

ALTER TABLE`extensions`
ADD COLUMN `dev` tinyint(1) NOT NULL COMMENT '';

INSERT INTO `extensions` (`id`, `name`, `description`, `image`, `slug`, `status`, `installed`, `activated`, `product_id`, `current_version`, `created_at`, `updated_at`, `dev`) VALUES
(8, 'P2P', 'Peer to Peer Extension', 'p2p.png', 'p2p', 0, 0, 0, 'DBFE65CA', '0.0.1', '2022-01-31 18:36:32', '2022-04-21 03:38:23', 2);

INSERT INTO `extensions` (`id`, `name`, `description`, `image`, `slug`, `status`, `installed`, `activated`, `product_id`, `current_version`, `created_at`, `updated_at`, `dev`) VALUES
(9, 'Swap', 'DEX Swap Extension', 'swap.png', 'swap', 0, 0, 0, 'C4160F60', '0.0.1', '2022-01-31 18:36:32', '2022-04-21 03:38:23', 2);

INSERT INTO `extensions` (`id`, `name`, `description`, `image`, `slug`, `status`, `installed`, `activated`, `product_id`, `current_version`, `created_at`, `updated_at`, `dev`) VALUES
(10, 'Ecosystem', 'Ecosystem, Native Trading', 'eco.png', 'eco', 0, 0, 0, 'EB4AADC3', '0.0.1', '2022-01-31 18:36:32', '2022-04-21 03:38:23', 1);

INSERT INTO `extensions` (`id`, `name`, `description`, `image`, `slug`, `status`, `installed`, `activated`, `product_id`, `current_version`, `created_at`, `updated_at`, `dev`) VALUES
(11, 'Knowledge Base', 'Knowledge Base, FAQs', 'knowledge.png', 'knowledge', 0, 0, 0, '90AC59FB', '0.0.1', '2022-01-31 18:36:32', '2022-04-21 03:38:23', 0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;