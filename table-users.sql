CREATE TABLE IF NOT EXISTS `user` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(255),
    `lastname` varchar(255),
    `email` varchar(255),
    `password` varchar(255),
    PRIMARY KEY (`id`)
) CHARSET=utf8mb4;
