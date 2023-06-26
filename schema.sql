create table notes (
    id int NOT NULL AUTO_INCREMENT,
    uuid varchar(255) NOT NULL UNIQUE,
    title varchar(255) NOT NULL,
    content text NOT NULL,
    updated date NOT NULL,
    PRIMARY KEY (id)
);
