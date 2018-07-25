--
-- Create database `search_user_contact`
--

CREATE DATABASE IF NOT EXISTS `search_user_contact` DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci;

--
-- Table structure for table `users`
--

CREATE TABLE users (
    id INT(1) NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    phone VARCHAR(15) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='Store users';

--
-- Insert data into table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `phone`) VALUES
("John", "Smith", "johnsmith@exmaple.com", "0121-421-3333"),
("James", "Cooper", "jamescooper@exmaple.com", "0121-421-4444"),
("Anthony", "Potato", "anthonypotato@exmaple.com", "0121-421-5555"),
("Fred", "Bloggs", "fredbloggs@exmaple.com", "0121-421-6666"),
("Ryan", "Butler", "ryanbutler@exmaple.com", "0121-421-7777"),
("James", "Blake", "jamesblake@exmaple.com", "0121-421-8888"),
("James", "Smith", "jamessmith@exmaple.com", "0121-421-9999");