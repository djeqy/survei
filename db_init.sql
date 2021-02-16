CREATE DATABASE `survey` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
CREATE TABLE `divisi` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `instrumen_divisi` (
  `id` bigint unsigned NOT NULL,
  `instrumen_id` bigint unsigned DEFAULT NULL,
  `divisi_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_instrumen_divisi_1_idx` (`divisi_id`),
  KEY `fk_instrumen_divisi_2_idx` (`instrumen_id`),
  CONSTRAINT `fk_instrumen_divisi_1` FOREIGN KEY (`divisi_id`) REFERENCES `divisi` (`id`),
  CONSTRAINT `fk_instrumen_divisi_2` FOREIGN KEY (`instrumen_id`) REFERENCES `instrumen` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `instrumen` (
  `id` bigint unsigned NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `survei` (
  `id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `instrumen_id` bigint unsigned NOT NULL,
  `jawaban` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_survey_1_idx` (`user_id`),
  KEY `fk_survey_2_idx` (`instrumen_id`),
  CONSTRAINT `fk_survey_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `fk_survey_2` FOREIGN KEY (`instrumen_id`) REFERENCES `instrumen` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `tahun masuk` int DEFAULT NULL,
  `divisi_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_1_idx` (`divisi_id`),
  CONSTRAINT `fk_user_1` FOREIGN KEY (`divisi_id`) REFERENCES `divisi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
