CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `cargo` varchar(256) NOT NULL,
  `salario` integer  NOT NULL,
  'cpf' integer NOT NULL,
  'rg' integer NOT NULL,
  `senha` text NOT NULL,
  'atribuicoes' varchar(256) NOT NULL,
  `inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nascimento` datetime NOT NULL,


  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;


INSERT INTO `cliente` (`id`, `name`, `email`, `cargo`, `salario`, `cpf`, `rg`, 'senha', 'atribuicoes', 'inicio', 'nascimento') VALUES
(1, 'Brian', 'brian@example.com', 'desenolvedor', 1500, 123456, 654321, 'senha', 'mapas',  '2014-06-01 01:12:26', '1998-05-31 17:12:26'),

