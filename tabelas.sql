CREATE TABLE dados_form.form_proponente (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(128) NULL,
  cnpj VARCHAR(18) NULL,
  cep VARCHAR(10) NULL,
  cidade VARCHAR(60) NULL,
  uf VARCHAR(2) NULL,
  telefone VARCHAR(15) NULL,
  email VARCHAR(60) NULL,
  PRIMARY KEY (id));


CREATE TABLE dados_form.proponente_atuacao (
  id INT NOT NULL AUTO_INCREMENT,
  id_proponente INT NOT NULL,
  estado VARCHAR(128) NULL,
  municipio VARCHAR(128) NULL,
  localidade VARCHAR(256) NULL,
  PRIMARY KEY (id)
);


CREATE TABLE dados_form.representante_legal (
  id INT NOT NULL AUTO_INCREMENT,
  id_proponente INT NOT NULL,
  cpf VARCHAR(15) NULL,
  cargo VARCHAR(100) NULL,
  formacao VARCHAR(100) NULL,
  email VARCHAR(100) NULL,
  telefone VARCHAR(15) NULL,
  representante_legalcol VARCHAR(45) NULL,
  PRIMARY KEY (id));


CREATE TABLE dados_form.proponente_documento (
  id INT NOT NULL AUTO_INCREMENT,
  id_proponente VARCHAR(45) NOT NULL,
  nome_arquivo VARCHAR(45) NULL,
  caminho_arquivo VARCHAR(45) NULL,
  tipo_arquivo VARCHAR(5) NULL,
  tipo_documento INT NULL,
  PRIMARY KEY (id));