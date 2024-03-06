CREATE TABLE Aluno (
    idAluno		    INT PRIMARY KEY AUTO_INCREMENT,
    nome		    VARCHAR(100) NOT NULL,
    email		    VARCHAR(100) NOT NULL,
    senha		    VARCHAR(50) NOT NULL
);

CREATE TABLE Aula (
    idAula		    INT PRIMARY KEY AUTO_INCREMENT,
    nome		    VARCHAR(100) NOT NULL,
    video		    VARCHAR(3000) NOT NULL
);

CREATE TABLE Curso (
    idCurso 		INT PRIMARY KEY AUTO_INCREMENT,
    nome		    VARCHAR(100) NOT NULL,
    descricao 		VARCHAR(3000) NOT NULL,
    nivel   		VARCHAR(100) NOT NULL,
    ordem           INT NOT NULL,
    idAula 		    INT,
    
    CONSTRAINT fkCursoAula FOREIGN KEY (idAula) REFERENCES aula (idAula)
);

CREATE TABLE Matricula (
    idMatricula		INT PRIMARY KEY AUTO_INCREMENT,
    data 		    date NOT NULL,
    idAluno		    INT,
    idCurso		    INT,
    
    CONSTRAINT fkMatriculaAluno FOREIGN KEY (idAluno) REFERENCES Aluno (idAluno),
    CONSTRAINT fkMatriculaCurso FOREIGN KEY (idCurso) REFERENCES Curso (idCurso)
);

CREATE TABLE Tema (
    idTema          INT PRIMARY KEY AUTO_INCREMENT,
    titulo          VARCHAR(100) NOT NULL,
    ordem           INT,
    idCurso         INT,

    CONSTRAINT fkTemaCurso FOREIGN KEY (idCurso) REFERENCES Curso (idCurso)
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
CREATE PROCEDURE pdAluno
(
	IN 	_id		INT
)
BEGIN
	DELETE FROM aluno WHERE idAluno = _id;
END //

DELIMITER //
CREATE PROCEDURE pdCurso
(
	IN 	_id		INT
)
BEGIN
	DELETE FROM curso WHERE idCurso = _id;
END //

DELIMITER //
CREATE PROCEDURE puAluno
(
	IN	_id					INT,
    IN	_nome				VARCHAR(300),
    IN _email				VARCHAR(300),
    IN _cpf					DECIMAL(11), 
    IN _senha				VARCHAR(300)
)
BEGIN
	UPDATE aluno
    	SET nome = _nome,
        	email = _email,
            cpf = _cpf,
            senha = _senha
    WHERE idAluno = _id;
END //

DELIMITER //
CREATE PROCEDURE puAula
(
	IN	_id					INT,
    IN	_nome				VARCHAR(300),
    IN _video				VARCHAR(300)
)
BEGIN
	UPDATE aula
    	SET nome = _nome,
        	video = _video
    WHERE idAula = _id;
END //

DELIMITER //
CREATE PROCEDURE pdAula
(
	IN 	_id		INT
)
BEGIN
	DELETE FROM aula WHERE idAula = _id;
END //


DELIMITER //
CREATE PROCEDURE faleConosco
(
    IN	_nome				VARCHAR(300),
    IN _email				VARCHAR(300),
    IN _assunto				VARCHAR(300), 
    IN _mensagem			VARCHAR(300)
)
BEGIN
	INSERT INTO faleconosco (nome, email, assunto, mensagem) 
    VALUES (_nome, _email, _assunto, _mensagem);
END 
//

