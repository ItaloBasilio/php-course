-- Relembrando comandos sql

USE dbphp7;

CREATE TABLE tb_usuarios (
    idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(64),
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('root','147258');

SELECT * FROM tb_usuarios;

update tb_usuarios set dessenha = '123456' where idusuario = 1;

delete from tb_usuarios where idusuario = 1;

truncate table tb_usuarios;