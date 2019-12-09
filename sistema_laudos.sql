CREATE TABLE IF NOT EXISTS Usuario (
  id_usuario INTEGER NOT NULL,
  nome VARCHAR(60),
  email VARCHAR(100),
  senha VARCHAR(45),
  PRIMARY KEY (id_usuario)
);