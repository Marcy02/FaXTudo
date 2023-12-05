/* MER_FAXTUDO: */

CREATE TABLE USUARIO (
    id_user INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cnpj_cpf VARCHAR(14) NOT NULL UNIQUE COLLATE latin1_general_ci,
    nome VARCHAR(500) COLLATE latin1_general_ci,
    email VARCHAR(500) COLLATE latin1_general_ci,
    senha VARCHAR(512) COLLATE latin1_general_ci,
    tel VARCHAR(500),
    dt_nasc DATE,
    especialidade VARCHAR(500) COLLATE latin1_general_ci,
    cep varchar(500),
    bairro varchar(500) COLLATE latin1_general_ci,
    cidade varchar(500) COLLATE latin1_general_ci,
    uf varchar(500) COLLATE latin1_general_ci,
    pais varchar(500) COLLATE latin1_general_ci
);

CREATE TABLE EMPREGO (
    id_job INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cargo VARCHAR(500) COLLATE latin1_general_ci,
    cat_cargo VARCHAR(500) COLLATE latin1_general_ci,
    desc_cargo TEXT COLLATE latin1_general_ci,
    dt_cadastro TIMESTAMP,
    salario DOUBLE,
    jornada VARCHAR(500) COLLATE latin1_general_ci,
    turno VARCHAR(500) COLLATE latin1_general_ci,
    requerimentos VARCHAR(500) COLLATE latin1_general_ci,
    qualificacao_min VARCHAR(500) COLLATE latin1_general_ci,
    habilidades VARCHAR(500) COLLATE latin1_general_ci,
    n_vagas INT,
    cep varchar(500),
    bairro VARCHAR(500) COLLATE latin1_general_ci,
    cidade VARCHAR(500) COLLATE latin1_general_ci,
    uf VARCHAR(500) COLLATE latin1_general_ci,
    pais VARCHAR(500) COLLATE latin1_general_ci
);

CREATE TABLE publica (
    fk_USUARIO_id_user INT UNSIGNED NOT NULL,
    fk_EMPREGO_id_job INT UNSIGNED NOT NULL,
    PRIMARY KEY (fk_USUARIO_id_user, fk_EMPREGO_id_job)
);

CREATE TABLE candidata (
    fk_USUARIO_id_user INT UNSIGNED NOT NULL,
    fk_EMPREGO_id_job INT UNSIGNED NOT NULL,
    aprovado BOOLEAN,
    PRIMARY KEY (fk_USUARIO_id_user, fk_EMPREGO_id_job)
);
 
ALTER TABLE publica ADD CONSTRAINT FK_publica_U
    FOREIGN KEY (fk_USUARIO_id_user)
    REFERENCES USUARIO (id_user)
    ON DELETE CASCADE;
 
ALTER TABLE publica ADD CONSTRAINT FK_publica_E
    FOREIGN KEY (fk_EMPREGO_id_job)
    REFERENCES EMPREGO (id_job)
    ON DELETE CASCADE;
 
ALTER TABLE candidata ADD CONSTRAINT FK_candidata_U
    FOREIGN KEY (fk_USUARIO_id_user)
    REFERENCES USUARIO (id_user)
    ON DELETE CASCADE;
 
ALTER TABLE candidata ADD CONSTRAINT FK_candidata_E
    FOREIGN KEY (fk_EMPREGO_id_job)
    REFERENCES EMPREGO (id_job)
    ON DELETE CASCADE;