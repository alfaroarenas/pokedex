create database pokemons_alfaro_edmundo;

use pokemons_alfaro_edmundo;

create table pokemon(
id_pokemon int auto_increment, 
nombre varchar(40),
tipo varchar(40),
imagen varchar(10),
primary key(id_pokemon)
);

insert into pokemon (nombre,tipo,imagen) 
			values('bulbasaur','planta','url'),
				  ('charmander','fuego','url'),
				  ('squirtle','agua','url'),
				('caterpie','bicho','url'),
				('butterfree','volador','url');


select * from pokemon