CREATE TABLE IF NOT EXISTS `progreso_videos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario_id` INT NOT NULL,
  `video_id` INT NOT NULL,
  `materia` VARCHAR(100),
  `completado` TINYINT(1) DEFAULT 1,
  `fecha_visto` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `idx_usuario_video` (`usuario_id`, `video_id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios_seguimiento`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
