-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.1.0-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table sangam_initiative.answers
CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`answer_id`),
  KEY `login_id` (`login_id`),
  KEY `question_id` (`question_id`),
  CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`),
  CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.answers: ~0 rows (approximately)

-- Dumping structure for table sangam_initiative.chat_messages
CREATE TABLE IF NOT EXISTS `chat_messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_login_id` int(11) NOT NULL,
  `receiver_login_id` int(11) NOT NULL,
  `message_text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`message_id`),
  KEY `sender_login_id` (`sender_login_id`),
  KEY `receiver_login_id` (`receiver_login_id`),
  CONSTRAINT `chat_messages_ibfk_1` FOREIGN KEY (`sender_login_id`) REFERENCES `login` (`login_id`),
  CONSTRAINT `chat_messages_ibfk_2` FOREIGN KEY (`receiver_login_id`) REFERENCES `login` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.chat_messages: ~0 rows (approximately)

-- Dumping structure for table sangam_initiative.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `parent_type` enum('question','answer') NOT NULL,
  `parent_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`comment_id`),
  KEY `login_id` (`login_id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`),
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE,
  CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`parent_id`) REFERENCES `answers` (`answer_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.comments: ~0 rows (approximately)

-- Dumping structure for table sangam_initiative.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_by_login_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`group_id`),
  KEY `created_by_login_id` (`created_by_login_id`),
  CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`created_by_login_id`) REFERENCES `login` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.groups: ~0 rows (approximately)

-- Dumping structure for table sangam_initiative.group_members
CREATE TABLE IF NOT EXISTS `group_members` (
  `group_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`login_id`),
  KEY `login_id` (`login_id`),
  CONSTRAINT `group_members_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE,
  CONSTRAINT `group_members_ibfk_2` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.group_members: ~0 rows (approximately)

-- Dumping structure for table sangam_initiative.language
CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `language_code` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_enabled_lang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.language: ~0 rows (approximately)

-- Dumping structure for table sangam_initiative.login
CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` text NOT NULL,
  `contact_no` text NOT NULL,
  `password` text NOT NULL,
  `activation_code` varchar(6) NOT NULL DEFAULT '',
  `user_level` int(1) NOT NULL,
  `register_as` varchar(50) NOT NULL,
  `dat_of_birth` date NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `core_competency` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `organization_name` varchar(50) DEFAULT NULL,
  `potential_interest_areas` varchar(50) DEFAULT NULL,
  `office_address` varchar(50) DEFAULT NULL,
  `organisation_hq_address` varchar(50) DEFAULT NULL,
  `website_url` varchar(50) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1 COMMENT '0: de-active user\r\n1: active user',
  `is_verified` int(1) NOT NULL DEFAULT 0,
  `session_id` varchar(150) NOT NULL,
  `is_password_changed` int(11) NOT NULL,
  `current_login_time` datetime NOT NULL,
  `wrong_attempt` int(11) NOT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`login_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.login: ~1 rows (approximately)
INSERT INTO `login` (`login_id`, `user_id`, `email`, `user_name`, `contact_no`, `password`, `activation_code`, `user_level`, `register_as`, `dat_of_birth`, `full_name`, `core_competency`, `experience`, `organization_name`, `potential_interest_areas`, `office_address`, `organisation_hq_address`, `website_url`, `is_active`, `is_verified`, `session_id`, `is_password_changed`, `current_login_time`, `wrong_attempt`, `last_login_time`, `created_at`) VALUES
	(18, 'USR20240018', 'kdevendra7999@gmail.com', 'devendra verma', '8602375785', 'bdb9b954d3fd002170fd9c2caff408fcf7404acce5a1d818fc4a47af57e5312e95fe5d7243377fef25ba1ef9067859e55c56ea68073d4fc8bf02e6d96662d2de', '931057', 2, 'Individual', '2000-10-13', 'devendra verma', '["Virtual\\/Digital Twin Layer","Dynamic Information Layer"]', 'two years', NULL, NULL, NULL, NULL, NULL, 1, 1, '', 0, '2024-02-05 16:05:45', 0, NULL, '0000-00-00 00:00:00');

-- Dumping structure for table sangam_initiative.master_menu_items
CREATE TABLE IF NOT EXISTS `master_menu_items` (
  `menu_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_item_level` int(11) NOT NULL DEFAULT 0 COMMENT 'Parent and Child',
  `label` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`menu_item_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.master_menu_items: ~2 rows (approximately)
INSERT INTO `master_menu_items` (`menu_item_id`, `menu_item_level`, `label`, `url`, `icon`) VALUES
	(59, 0, 'Dashboard', 'admin-dashboard', 'dashboard-2-line'),
	(86, 0, 'EoI Form', 'eoi-form', 'survey-line');

-- Dumping structure for table sangam_initiative.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`question_id`),
  KEY `login_id` (`login_id`),
  CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.questions: ~0 rows (approximately)

-- Dumping structure for table sangam_initiative.theme_customizer_options
CREATE TABLE IF NOT EXISTS `theme_customizer_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang` varchar(50) DEFAULT '0',
  `layout` varchar(20) DEFAULT NULL,
  `sidebar_user_profile_avatar` varchar(20) DEFAULT NULL,
  `theme` varchar(20) DEFAULT NULL,
  `color_scheme` varchar(10) DEFAULT NULL,
  `layout_width` varchar(10) DEFAULT NULL,
  `layout_position` varchar(20) DEFAULT NULL,
  `topbar_color` varchar(10) DEFAULT NULL,
  `sidebar_size` varchar(20) DEFAULT NULL,
  `sidebar_color` varchar(20) DEFAULT NULL,
  `sidebar_images` varchar(255) DEFAULT NULL,
  `primary_color` varchar(20) DEFAULT NULL,
  `preloader_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.theme_customizer_options: ~0 rows (approximately)

-- Dumping structure for table sangam_initiative.user_menu_access
CREATE TABLE IF NOT EXISTS `user_menu_access` (
  `access_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_item_id` int(11) NOT NULL,
  `user_level` int(11) DEFAULT NULL,
  PRIMARY KEY (`access_id`) USING BTREE,
  KEY `menu_item_id` (`menu_item_id`),
  CONSTRAINT `FK_user_menu_access_master_menu_items` FOREIGN KEY (`menu_item_id`) REFERENCES `master_menu_items` (`menu_item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.user_menu_access: ~2 rows (approximately)
INSERT INTO `user_menu_access` (`access_id`, `menu_item_id`, `user_level`) VALUES
	(1, 59, 2),
	(2, 86, 2);

-- Dumping structure for table sangam_initiative.visitors
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.visitors: ~3 rows (approximately)
INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `timestamp`) VALUES
	(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', '2024-02-03 17:20:12'),
	(2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0', '2024-02-05 10:14:09'),
	(3, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 11; SAMSUNG SM-G973U) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/14.2 Chrome/87.0.4280.141 Mobile Safari/537.36', '2024-02-05 17:31:25');

-- Dumping structure for table sangam_initiative.votes
CREATE TABLE IF NOT EXISTS `votes` (
  `vote_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `parent_type` enum('question','answer') NOT NULL,
  `parent_id` int(11) NOT NULL,
  `vote_type` enum('upvote','downvote') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`vote_id`),
  KEY `login_id` (`login_id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`),
  CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE,
  CONSTRAINT `votes_ibfk_3` FOREIGN KEY (`parent_id`) REFERENCES `answers` (`answer_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sangam_initiative.votes: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
