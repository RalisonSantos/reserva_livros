CREATE DATABASE biblioteca_digital;

USE biblioteca_digital;




CREATE TABLE bibliotecarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);




CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);




CREATE TABLE autores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    biografia TEXT
);




CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    descricao TEXT
);



CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    autor_id INT NOT NULL,
    categoria_id INT NOT NULL,
    bibliotecario_id INT NOT NULL,
    isbn VARCHAR(20),
    ano_publicacao YEAR,
    descricao TEXT,
    arquivo VARCHAR(255),
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (autor_id) REFERENCES autores(id),
    FOREIGN KEY (categoria_id) REFERENCES categorias(id),
    FOREIGN KEY (bibliotecario_id) REFERENCES bibliotecarios(id)
);




CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    livro_id INT NOT NULL,
    data_reserva DATETIME DEFAULT CURRENT_TIMESTAMP,
    data_expiracao DATETIME,

    status ENUM(
        'ATIVA',
        'CANCELADA',
        'CONCLUIDA'
    ) DEFAULT 'ATIVA',

    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (livro_id) REFERENCES livros(id)
);




CREATE TABLE emprestimos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    livro_id INT NOT NULL,
    reserva_id INT,
    data_inicio DATETIME DEFAULT CURRENT_TIMESTAMP,
    data_devolucao DATETIME,
    status ENUM(
        'ATIVO',
        'DEVOLVIDO',
        'ATRASADO'
    ) DEFAULT 'ATIVO',

    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (livro_id) REFERENCES livros(id),
    FOREIGN KEY (reserva_id) REFERENCES reservas(id)
);




CREATE TABLE avaliacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    livro_id INT NOT NULL,
    nota INT NOT NULL,
    comentario TEXT,
    data_avaliacao DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (livro_id) REFERENCES livros(id),

    CHECK (nota >= 1 AND nota <= 5)
);