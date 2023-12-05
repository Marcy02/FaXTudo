/* MER_FAXTUDO_LOGICO: */

CREATE TABLE USUARIO (
    id INT PRIMARY KEY,
    cnpj_cpf VARCHAR(14),
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(20),
    tel VARCHAR(13),
    dt_nasc DATE,
    especialidades VARCHAR(80),
    FK_LOCAL_id INT
);

CREATE TABLE EMPREGO (
    id INT PRIMARY KEY,
    dt_cadastro DATE,
    cargo VARCHAR(50),
    descricao_cargo TEXT,
    local INT,
    salario REAL,
    jornada VARCHAR(40),
    turno VARCHAR(40),
    requerimentos VARCHAR(100),
    qualificacoes VARCHAR(100),
    habilidades VARCHAR(100),
    categoria_cargo VARCHAR(30),
    numero_candidatos INT,
    FK_LOCAL_id INT
);

CREATE TABLE LOCAL (
    id INT PRIMARY KEY,
    cidade VARCHAR(100),
    estado VARCHAR(100),
    pais VARCHAR(80)
);

CREATE TABLE publica (
    fk_USUARIO_id INT,
    fk_EMPREGO_id INT
);

CREATE TABLE trabalha (
    fk_USUARIO_id INT,
    fk_EMPREGO_id INT
);
 
ALTER TABLE USUARIO ADD CONSTRAINT FK_USUARIO_2
    FOREIGN KEY (FK_LOCAL_id)
    REFERENCES LOCAL (id)
    ON DELETE CASCADE;
 
ALTER TABLE EMPREGO ADD CONSTRAINT FK_EMPREGO_2
    FOREIGN KEY (FK_LOCAL_id)
    REFERENCES LOCAL (id)
    ON DELETE CASCADE;
 
ALTER TABLE publica ADD CONSTRAINT FK_publica_1
    FOREIGN KEY (fk_USUARIO_id)
    REFERENCES USUARIO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE publica ADD CONSTRAINT FK_publica_2
    FOREIGN KEY (fk_EMPREGO_id)
    REFERENCES EMPREGO (id)
    ON DELETE SET NULL;
 
ALTER TABLE trabalha ADD CONSTRAINT FK_trabalha_1
    FOREIGN KEY (fk_USUARIO_id)
    REFERENCES USUARIO (id)
    ON DELETE SET NULL;
 
ALTER TABLE trabalha ADD CONSTRAINT FK_trabalha_2
    FOREIGN KEY (fk_EMPREGO_id)
    REFERENCES EMPREGO (id)
    ON DELETE SET NULL;