create database avaliacao;

use avaliacao;

create table avaliacoes(
nome varchar(255),
email varchar(120),
docente_presenca varchar(10),
docente_pontualidade varchar(10),
docente_comunicacao varchar(10),
docente_dominio varchar(10),
docente_interesse varchar(10),
docente_interacao varchar(10),
docente_avaliacao varchar(10),
curso_needs varchar(10),
curso_temas varchar(10),
curso_carga varchar(10),
curso_relacao varchar(10),
material_suficiente varchar(10),
instalacoes_satisfatorias varchar(10),
coordenacao_presente varchar(10),
aluno_presenca varchar(10),
aluno_pontualidade varchar(10),
aluno_motivacao varchar(10),
aluno_participacao varchar(10),
aluno_aproveitamento varchar(10),
aluno_capacidade varchar(10),
comentarios text,
curso_origem varchar(10)
);
alter table avaliacoes add turma varchar(20);
SELECT * FROM avaliacoes;

drop database avaliacao;