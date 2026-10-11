-- Krabby Enterprise Solution - Database Schema Prototype
-- WARNING: Do not deploy to production without approval from IT Architecture.

CREATE DATABASE IF NOT EXISTS `kes_enterprise_db`;
USE `kes_enterprise_db`;

-- Table structure for system modules
CREATE TABLE IF NOT EXISTS `system_modules` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `module_name` VARCHAR(50) NOT NULL,
    `status` ENUM('active', 'maintenance', 'deprecated') DEFAULT 'active',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `system_modules` (`module_name`, `status`) VALUES
('POS_Terminal', 'active'),
('Inventory_Control', 'active'),
('Employee_Portal', 'maintenance');

-- Table structure for public announcements
CREATE TABLE IF NOT EXISTS `announcements` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(100) NOT NULL,
    `content` TEXT NOT NULL,
    `published_date` DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `announcements` (`title`, `content`, `published_date`) VALUES
('System Upgrade Notice', 'Planned maintenance scheduled for next weekend. All services will experience brief downtime.', '2025-10-01'),
('New Security Policy', 'All departments are required to update their access keys before the end of the quarter.', '2025-10-05');