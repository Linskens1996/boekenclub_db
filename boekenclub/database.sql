CREATE TABLE `booklist` (
	`book_id` INT(11) NOT NULL AUTO_INCREMENT,
	`book_name` VARCHAR(255) NOT NULL,
	`book_author` VARCHAR(255) NOT NULL,
	`book_comment` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`book_id`)
);

INSERT INTO booklist(book_id, book_name, book_author, book_comment) VALUES
('1', 'De acht bergen', 'Paolo Cognetti', 'Leuk boek, beetje dik'), 
('2', 'Slotcoulet', 'Sander de Hosson', 'Beetje kleine letters'),
('3', 'Zondagskind', 'Judith Visser', 'Leuk boek, zeker op zondag');