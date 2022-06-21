DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties` (
                                 `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                 `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `content` longtext COLLATE utf8mb4_unicode_ci,
                                 `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `images` text COLLATE utf8mb4_unicode_ci,
                                 `price` decimal(15,2) DEFAULT NULL,
                                 `city` varchar(50) DEFAULT NULL,
                                 `state` varchar(50) DEFAULT NULL,
                                 `country` varchar(50) DEFAULT NULL,
                                 `category_id` int unsigned DEFAULT NULL,
                                 `latitude` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `longitude` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL,
                                 `deleted_at` timestamp NULL DEFAULT NULL,
                                 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
                                 `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                 `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL,
                                 `deleted_at` timestamp NULL DEFAULT NULL,
                                 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
