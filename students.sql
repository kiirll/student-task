-- Дамп структуры для таблица mvc2.students
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `ngroup` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO `students` (`id`, `email`, `sname`, `surname`, `father`, `ngroup`, `score`) VALUES
	(1, 'open@mail.ru', 'вася', 'леонов', 'сергеевич', '789', 980),
	(2, 'open2@mail.ru', 'коля', 'симонов', 'александрович', '433', 534);
