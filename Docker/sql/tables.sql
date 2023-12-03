SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `prace`;
CREATE TABLE `prace`
(
    `id`      int(11)      NOT NULL AUTO_INCREMENT,
    `nazov`    varchar(100) NOT NULL,
    `veduci` varchar(30) NOT NULL,
    `tutor` varchar(30) NULL,
    `text` varchar(300) NOT NULL,
    `stupen` varchar(10) NOT NULL,
    `katedra` varchar(10) NOT NULL,
    `stav` varchar(11) NOT NULL,
    `jazyk` varchar(10) NULL,
    `odbor` varchar(10) NOT NULL,
    `cas` date NOT NULL,

    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

    INSERT INTO `prace` (`id`, `nazov`, `veduci`, `text`, `stupen`, `katedra`,`stav`,`jazyk`,`odbor`,`cas`)
VALUES (1, 'tema1', 'Janko Hruška', 'nejaky text opisujuci bakalarku', 'Bakalár', 'KIS', 'nepriradená', 'en', 'INF', sysdate()),
       (2, 'tema1', 'Pavol Prút', 'nejaky text opisujuci bakalarku', 'Bakalár', 'KMMOA', 'priradená', null, 'PI', sysdate()),
       (3, 'tema1', 'Kamil Lipa', 'nejaky text opisujuci bakalarku', 'Inžinier', 'KTK', 'skončená', 'sk', 'INF', sysdate());
