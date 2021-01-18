CREATE TABLE posts (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name text NOT NULL,
  description text NOT NULL,
  text text  NOT NULL
) ENGINE=InnoDB;

CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  login varchar(15) NOT NULL,
  password varchar(200) NOT NULL
) ENGINE=InnoDB;
