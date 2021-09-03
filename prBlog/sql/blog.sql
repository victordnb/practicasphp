CREATE TABLE users(
    id int(255) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    date_time datetime NOT NULL,
    CONSTRAINT pk_users PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO users (username, lastname, password, email, date_time) VALUES ('Paco', 'Perez', '123456', 'paco@paco.es', '2018-01-01 00:00:00');
INSERT INTO users (username, lastname, password, email, date_time) VALUES ('Juan', 'Perez', '123456', 'juan@juan.com', '2018-01-01 00:00:00');
INSERT INTO users (username, lastname, password, email, date_time) VALUES ('Maria', 'Perez', '123456', 'maria@maria.com', '2018-01-01 00:00:00');
INSERT INTO users (username, lastname, password, email, date_time) VALUES ('Pedro', 'Parras', '123456', 'pedro@pedro.com', '2018-01-01 00:00:00'); 

CREATE TABLE categories(
    id int(255) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    CONSTRAINT pk_categories PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO categories (name) VALUES ('Programacion');
INSERT INTO categories (name) VALUES ('Deportes');
INSERT INTO categories (name) VALUES ('Cocina');
INSERT INTO categories (name) VALUES ('Tecnologia');
INSERT INTO categories (name) VALUES ('Ciencia');
INSERT INTO categories (name) VALUES ('Otros');


CREATE TABLE posts(
    id int(255) NOT NULL AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    content text NOT NULL,
    date_time datetime NOT NULL,
    user_id int(255) NOT NULL,
    category_id int(255) NOT NULL,
    CONSTRAINT pk_posts PRIMARY KEY (id),
    CONSTRAINT fk_posts_users FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT fk_posts_categories FOREIGN KEY (category_id) REFERENCES categories(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 1', 'Contenido del post 1', '2018-01-01 00:00:00', 1, 1);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 2', 'Contenido del post 2', '2018-01-01 00:00:00', 2, 2);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 3', 'Contenido del post 3', '2018-01-01 00:00:00', 3, 3);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 4', 'Contenido del post 4', '2018-01-01 00:00:00', 4, 4);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 5', 'Contenido del post 5', '2018-01-01 00:00:00', 5, 5);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 6', 'Contenido del post 6', '2018-01-01 00:00:00', 1, 6);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 7', 'Contenido del post 7', '2018-01-01 00:00:00', 2, 7);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 8', 'Contenido del post 8', '2018-01-01 00:00:00', 3, 8);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 9', 'Contenido del post 9', '2018-01-01 00:00:00', 4, 9);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 10', 'Contenido del post 10', '2018-01-01 00:00:00', 5, 10);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 11', 'Contenido del post 11', '2018-01-01 00:00:00', 1, 11);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 12', 'Contenido del post 12', '2018-01-01 00:00:00', 2, 12);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 13', 'Contenido del post 13', '2018-01-01 00:00:00', 3, 13);
INSERT INTO posts (title, content, date_time, user_id, category_id) VALUES ('Post 14', 'Contenido del post 14', '2018-01-01 00:00:00', 4, 14);

    


    







