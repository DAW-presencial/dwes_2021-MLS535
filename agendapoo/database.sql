create database agenda_prueba;

use agenda_prueba;

CREATE TABLE "agenda" (
                          "id" serial NOT NULL,
                          PRIMARY KEY ("id"),
                          "nombres" character varying(100) NOT NULL DEFAULT '',
                          "apellidos" character varying(100) NOT NULL DEFAULT '',
                          "telefono" integer(20) NOT NULL DEFAULT ''
);

CREATE TABLE "agenda" (
                          "id" int (11) AUTO_INCREMENT,
                          PRIMARY KEY ("id"),
                          "nombres" varchar(100) NOT NULL,
                          "apellidos"  varchar(100) NOT NULL,
                          "telefono" varchar(20) NOT NULL ,
                          primary key ('id')
);