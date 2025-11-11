-- MySQL Database Import for joljochnadata
-- Generated: 2025-11-11 19:19:19

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for table `about_sections`
DROP TABLE IF EXISTS `about_sections`;
CREATE TABLE `about_sections` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `section_key` VARCHAR(255) NOT NULL,
  `title` VARCHAR(255),
  `subtitle` VARCHAR(255),
  `content` TEXT,
  `content_2` TEXT,
  `content_3` TEXT,
  `image_url` VARCHAR(255),
  `name` VARCHAR(255),
  `position` VARCHAR(255),
  `extra_data` TEXT,
  `is_active` INT NOT NULL DEFAULT 1,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `bookings`
DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `plot_size` VARCHAR(255),
  `message` TEXT,
  `status` VARCHAR(255) NOT NULL DEFAULT 'pending',
  `is_read` INT NOT NULL DEFAULT 0,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `cache`
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` VARCHAR(255) NOT NULL,
  `value` TEXT NOT NULL,
  `expiration` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `cache_locks`
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` VARCHAR(255) NOT NULL,
  `owner` VARCHAR(255) NOT NULL,
  `expiration` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `contact_form_fields`
DROP TABLE IF EXISTS `contact_form_fields`;
CREATE TABLE `contact_form_fields` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `label` VARCHAR(255) NOT NULL,
  `type` VARCHAR(255) NOT NULL DEFAULT 'text',
  `placeholder` VARCHAR(255),
  `required` INT NOT NULL DEFAULT 0,
  `order` INT NOT NULL DEFAULT 0,
  `is_active` INT NOT NULL DEFAULT 1,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `failed_jobs`
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `uuid` VARCHAR(255) NOT NULL,
  `connection` TEXT NOT NULL,
  `queue` TEXT NOT NULL,
  `payload` TEXT NOT NULL,
  `exception` TEXT NOT NULL,
  `failed_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `footer_settings`
DROP TABLE IF EXISTS `footer_settings`;
CREATE TABLE `footer_settings` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `title` VARCHAR(255),
  `description` TEXT,
  `phone1` VARCHAR(255),
  `phone2` VARCHAR(255),
  `email` VARCHAR(255),
  `project_address` TEXT,
  `contact_address` TEXT,
  `quick_links` TEXT,
  `legal_links` TEXT,
  `social_links` TEXT,
  `map_url` VARCHAR(255),
  `bottom_text` VARCHAR(255),
  `qr_image_path` VARCHAR(255),
  `qr_section_title` VARCHAR(255),
  `map_button_text` VARCHAR(255),
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `footer_settings`
INSERT INTO `footer_settings` (`id`, `title`, `description`, `phone1`, `phone2`, `email`, `project_address`, `contact_address`, `quick_links`, `legal_links`, `social_links`, `map_url`, `bottom_text`, `qr_image_path`, `qr_section_title`, `map_button_text`, `created_at`, `updated_at`) VALUES ('1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[{"label":null,"href":null},{"label":null,"href":null},{"label":null,"href":null},{"label":null,"href":null},{"label":null,"href":null}]', '[{"label":null,"href":null},{"label":null,"href":null}]', '{"facebook":null,"instagram":null,"twitter":null,"linkedin":null,"youtube":null}', NULL, 'u', 'footer/0ToXwhGVIUYUe4VLm9cUVxw0XGcUhokm8aAhG5to.png', NULL, NULL, '2025-11-06 13:19:04', '2025-11-06 13:19:04');

-- Table structure for table `hero_sliders`
DROP TABLE IF EXISTS `hero_sliders`;
CREATE TABLE `hero_sliders` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `title` VARCHAR(255),
  `subtitle` VARCHAR(255),
  `description` TEXT,
  `primary_button_text` VARCHAR(255),
  `primary_button_link` VARCHAR(255),
  `secondary_button_text` VARCHAR(255),
  `secondary_button_link` VARCHAR(255),
  `image_url` VARCHAR(255),
  `order` INT NOT NULL DEFAULT 0,
  `is_active` INT NOT NULL DEFAULT 1,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `job_batches`
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `total_jobs` INT NOT NULL,
  `pending_jobs` INT NOT NULL,
  `failed_jobs` INT NOT NULL,
  `failed_job_ids` TEXT NOT NULL,
  `options` TEXT,
  `cancelled_at` INT,
  `created_at` INT NOT NULL,
  `finished_at` INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `jobs`
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `queue` VARCHAR(255) NOT NULL,
  `payload` TEXT NOT NULL,
  `attempts` INT NOT NULL,
  `reserved_at` INT,
  `available_at` INT NOT NULL,
  `created_at` INT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `migrations`
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `migrations`
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('1', '0001_01_01_000000_create_users_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('2', '0001_01_01_000001_create_cache_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('3', '0001_01_01_000002_create_jobs_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('4', '2025_11_01_101726_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('5', '2025_11_06_000000_create_footer_settings_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('6', '2025_11_06_170542_create_testimonials_table', '2');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('7', '2025_11_06_172241_add_image_to_testimonials_table', '3');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('8', '2025_11_07_000001_create_social_media_table', '4');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('9', '2025_11_08_024832_create_contact_form_fields_table', '4');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('10', '2025_11_08_131647_create_hero_sliders_table', '4');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('11', '2025_11_08_161025_create_about_sections_table', '4');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('12', '2025_11_08_163522_create_project_sections_table', '4');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('13', '2025_11_08_174756_add_logo_to_project_sections_table', '4');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('14', '2025_11_08_175735_create_our_projects_table', '4');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('15', '2025_11_08_203721_create_bookings_table', '4');

-- Table structure for table `our_projects`
DROP TABLE IF EXISTS `our_projects`;
CREATE TABLE `our_projects` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `image_path` VARCHAR(255) NOT NULL,
  `cta_text` VARCHAR(255) NOT NULL DEFAULT 'বিস্তারিত জানুন',
  `cta_link` VARCHAR(255),
  `order` INT NOT NULL DEFAULT 0,
  `is_active` INT NOT NULL DEFAULT 1,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `password_reset_tokens`
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `personal_access_tokens`
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `tokenable_type` VARCHAR(255) NOT NULL,
  `tokenable_id` INT NOT NULL,
  `name` TEXT NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `abilities` TEXT,
  `last_used_at` DATETIME,
  `expires_at` DATETIME,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `project_sections`
DROP TABLE IF EXISTS `project_sections`;
CREATE TABLE `project_sections` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `section_key` VARCHAR(255) NOT NULL,
  `title` VARCHAR(255),
  `subtitle` VARCHAR(255),
  `content` TEXT,
  `image_url` VARCHAR(255),
  `extra_data` TEXT,
  `is_active` INT NOT NULL DEFAULT 1,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  `logo_url` VARCHAR(255),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `sessions`
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` VARCHAR(255) NOT NULL,
  `user_id` INT,
  `ip_address` VARCHAR(255),
  `user_agent` TEXT,
  `payload` TEXT NOT NULL,
  `last_activity` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `sessions`
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('t9OjO6pCHOOsMqipQy9NDLOSLJToeukIQm0HGvD6', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiclJvMXU0T29NUE5JWFZTcHpxSlppS2VHcEhtQVZBNk1wbTBKdDM2YSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9hcGkvZm9vdGVyLXNldHRpbmdzIjtzOjU6InJvdXRlIjtzOjE5OiJhcGkuZm9vdGVyLXNldHRpbmdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', '1762511439');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('ZzK8VjtQ89hSr8Z1CUGd0sWlX4OGuY6yMfnUayOD', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaGFwcmNvU3BUWTc4a1NpeWx3WEp6VzhrQ09ra2VhTVdHUW96eUtUOSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGkvdGVzdGltb25pYWxzIjtzOjU6InJvdXRlIjtzOjIyOiJhcGkudGVzdGltb25pYWxzLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJpc19hZG1pbiI7YjoxO3M6MTE6ImFkbWluX2VtYWlsIjtzOjE1OiJhZG1pbkBnbWFpbC5jb20iO30=', '1762511439');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('HzabYnwng6Bb68J1ozjEDGLes3KvZArAoUngx1Aw', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVkdnVkl2S3MwZG56aEh4VGhsWHJSSlViUDljbUdMUExVMmQySm9pbSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9hcGkvZm9vdGVyLXNldHRpbmdzIjtzOjU6InJvdXRlIjtzOjE5OiJhcGkuZm9vdGVyLXNldHRpbmdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJpc19hZG1pbiI7YjoxO3M6MTE6ImFkbWluX2VtYWlsIjtzOjE1OiJhZG1pbkBnbWFpbC5jb20iO30=', '1762509048');

-- Table structure for table `social_media`
DROP TABLE IF EXISTS `social_media`;
CREATE TABLE `social_media` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `platform` VARCHAR(255) NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `content` TEXT,
  `link` VARCHAR(255),
  `image_path` VARCHAR(255),
  `order` INT NOT NULL DEFAULT 0,
  `is_active` INT NOT NULL DEFAULT 1,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `testimonials`
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `avatar` VARCHAR(255),
  `name` VARCHAR(255) NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `quote` TEXT NOT NULL,
  `order` INT NOT NULL DEFAULT 0,
  `is_active` INT NOT NULL DEFAULT 1,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  `image_path` VARCHAR(255),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `testimonials`
INSERT INTO `testimonials` (`id`, `avatar`, `name`, `title`, `quote`, `order`, `is_active`, `created_at`, `updated_at`, `image_path`) VALUES ('1', 'd', 'gf', 'hg', 'g', '0', '1', '2025-11-07 10:19:54', '2025-11-07 10:19:54', 'testimonials/7f8scp3TxClMoFrUXq81TKH35w2GCQLQC0Vil16N.jpg');

-- Table structure for table `users`
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` DATETIME,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(255),
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

COMMIT;
SET FOREIGN_KEY_CHECKS=1;
