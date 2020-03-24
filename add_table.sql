DROP TABLE IF EXISTS user;
CREATE TABLE `user` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(128) NOT NULL,
    `nom` varchar(128),
    `prenom` varchar(128),
    `adresse` varchar(128),
    `numero` int(11),
    `date` date,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS comment;
CREATE TABLE `comment` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `title` varchar(128) NOT NULL,
                        `content` varchar(128),
                        `created_at` DATETIME,
                        `updated_at` DATETIME,
                        PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

commit;