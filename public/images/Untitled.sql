CREATE TABLE `boissons` (
  `id` int PRIMARY KEY NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL
);

CREATE TABLE `desserts` (
  `id` int PRIMARY KEY NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL
);

CREATE TABLE `pizza` (
  `id` int PRIMARY KEY NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `base` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL
);

CREATE TABLE `preparation` (
  `id` int PRIMARY KEY NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL
);

CREATE TABLE `users` (
  `id` int PRIMARY KEY NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numberphone` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT "0"
);

CREATE TABLE `commande` (
  `id` int PRIMARY KEY NOT NULL,
  `user_id` int,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numberphone` varchar(255) NOT NULL
);

CREATE TABLE `commande_pizza` (
  `id` int PRIMARY KEY NOT NULL,
  `pizza_id` int NOT NULL,
  `commande_id` int NOT NULL
);

ALTER TABLE `commande_pizza` ADD FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`);

ALTER TABLE `commande_pizza` ADD FOREIGN KEY (`pizza_id`) REFERENCES `pizza` (`id`);

ALTER TABLE `commande` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
