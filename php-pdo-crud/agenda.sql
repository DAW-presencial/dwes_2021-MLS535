create database agenda_mladaria;
use agenda_mladaria;

CREATE TABLE IF NOT EXISTS `agenda` (
`id` SERIAL PRIMARY KEY,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `telefono` text DEFAULT NULL
)

