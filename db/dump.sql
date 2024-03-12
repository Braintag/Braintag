CREATE TABLE Aluno (
    idAluno		    INT PRIMARY KEY AUTO_INCREMENT,
    nome		    VARCHAR(100) NOT NULL,
    email		    VARCHAR(100) NOT NULL,
    senha		    VARCHAR(50) NOT NULL
);

CREATE TABLE Curso (
    idCurso 		INT PRIMARY KEY AUTO_INCREMENT,
    nome		    VARCHAR(100) NOT NULL,
    nivel   		VARCHAR(100) NOT NULL,
    descricao 		VARCHAR(3000) NOT NULL
);

CREATE TABLE Aula (
    idAula		    INT PRIMARY KEY AUTO_INCREMENT,
    nome		    VARCHAR(100) NOT NULL,
    link		    VARCHAR(3000) NOT NULL,
    idCurso         INT,

    CONSTRAINT fkAulaCurso FOREIGN KEY (idCurso) REFERENCES Curso (idCurso)
);

CREATE TABLE faleConosco (
    idFaleConosco 	INT PRIMARY KEY AUTO_INCREMENT,
    nome 		    VARCHAR(100) NOT NULL,
    email		    VARCHAR(100) NOT NULL,
    assunto		    VARCHAR(100) NOT NULL,
    mensagem 		VARCHAR(3000) NOT NULL
);



DELIMITER //
CREATE PROCEDURE piAluno
(
    IN  _nome   VARCHAR(100),
    IN  _email  VARCHAR(100),
    IN  _senha  VARCHAR(50)
)
BEGIN
	INSERT INTO aluno (nome, email, senha) 
    VALUES (_nome, _email, _senha);
END //


DELIMITER //
CREATE PROCEDURE psLoginAluno(
    IN  _email  VARCHAR(100),
    IN  _senha  VARCHAR(50)
)
BEGIN
	SELECT * FROM aluno WHERE email = _email AND senha = _senha;
END //


DELIMITER //
CREATE PROCEDURE psAula()
BEGIN
	SELECT * FROM aula;
END //


DELIMITER //
CREATE PROCEDURE psVisualizarCurso(
  IN _idCurso	INT,
  IN _idAula	INT
)
BEGIN
    SELECT 
        curso.nome AS nomeCurso, 
        aula.nome AS nomeAula, 
        aula.descricao AS descricaoAula,
        aula.link AS linkAula
    FROM curso
    JOIN aula ON curso.idCurso = aula.idCurso
    WHERE curso.idCurso = _idCurso AND aula.idAula = _idAula;
END //



DELIMITER //
CREATE PROCEDURE psVisualizarAula (
    IN _idCurso     INT
) 
BEGIN
    SELECT * FROM Aula WHERE idCurso = _idCurso;
END //



DELIMITER //
CREATE PROCEDURE faleConosco
(
    IN	_nome				VARCHAR(100),
    IN _email				VARCHAR(100),
    IN _assunto				VARCHAR(100), 
    IN _mensagem			VARCHAR(3000)
)
BEGIN
	INSERT INTO faleConosco (nome, email, assunto, mensagem) 
    VALUES (_nome, _email, _assunto, _mensagem);
END //