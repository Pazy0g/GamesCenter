CREATE TABLE users(
   user_id INT AUTO_INCREMENT,
   username VARCHAR(20)  NOT NULL,
   email VARCHAR(50)  NOT NULL,
   password VARCHAR(255)  NOT NULL,
   user_image VARCHAR(255) ,
   is_admin BOOLEAN NOT NULL,
   PRIMARY KEY(user_id),
   UNIQUE(username),
   UNIQUE(email)
);

CREATE TABLE contact(
   id_contact INT AUTO_INCREMENT,
   email VARCHAR(50)  NOT NULL,
   message VARCHAR(400)  NOT NULL,
   name VARCHAR(50)  NOT NULL,
   surname VARCHAR(50) ,
   subject VARCHAR(50)  NOT NULL,
   PRIMARY KEY(id_contact)
);

CREATE TABLE editor(
   id_editor INT AUTO_INCREMENT,
   name VARCHAR(50)  NOT NULL,
   website_url VARCHAR(150) ,
   editor_logo_url VARCHAR(50) ,
   PRIMARY KEY(id_editor)
);

CREATE TABLE Games(
   game_id INT AUTO_INCREMENT,
   title VARCHAR(50)  NOT NULL,
   image_url VARCHAR(255) ,
   out_date DATE NOT NULL,
   id_editor INT NOT NULL,
   user_id INT NOT NULL,
   PRIMARY KEY(game_id),
   UNIQUE(image_url),
   FOREIGN KEY(id_editor) REFERENCES editor(id_editor),
   FOREIGN KEY(user_id) REFERENCES users(user_id)
);

CREATE TABLE comments(
   comment_id INT AUTO_INCREMENT,
   content VARCHAR(600)  NOT NULL,
   comment_date DATE NOT NULL,
   game_id INT NOT NULL,
   user_id INT NOT NULL,
   PRIMARY KEY(comment_id),
   FOREIGN KEY(game_id) REFERENCES Games(game_id),
   FOREIGN KEY(user_id) REFERENCES users(user_id)
);

CREATE TABLE paragraph(
   id_paragraph INT AUTO_INCREMENT,
   texte VARCHAR(255) ,
   rang INT NOT NULL,
   game_id INT NOT NULL,
   PRIMARY KEY(id_paragraph),
   FOREIGN KEY(game_id) REFERENCES Games(game_id)
);

CREATE TABLE noter(
   user_id INT,
   game_id INT,
   note TINYINT,
   PRIMARY KEY(user_id, game_id),
   FOREIGN KEY(user_id) REFERENCES users(user_id),
   FOREIGN KEY(game_id) REFERENCES Games(game_id)
);
