drop database if exists airfrance;

create database airfrance;
	use airfrance;

create table pilote (
	idPilote int(3) not null auto_increment,
	nom varchar(50) not null,
	prenom varchar(50) not null,
	age int (2) not null,
	email varchar(50) not null,
	grade varchar(50) not null,
	mdp varchar (50) not null,
	primary key (idpilote)
	);

create table avion(
	idAvion int(5) not null auto_increment,
	modele varchar(50) not null,
	etat varchar(50) not null,
	nbPlaces int(3) not null,
	type varchar(50) not null,
	primary key (idavion)
	);

create table aeroport(
	idAeroport int(3) not null auto_increment,
	designationAeroport varchar(50) not null,
	adresse varchar(50),
	statut varchar(50) not null,
	primary key (idAeroport)
	);

create table vol(
	idVol int(6) not null auto_increment,
	designationVol varchar(50) not null,
	dateVol date not null,
	heureDepart varchar(50) not null,
	heureArrivee varchar(50),
	dureeVol varchar(50),
	idAvion int(3) not null,
	idAeroport1 int(3) not null,
	idAeroport2 int(3) not null,
	idPilote1 int(3) not null,
	idPilote2 int(3) not null,
	primary key (idVol),
	foreign key (idAvion) references avion(idAvion),
	foreign key (idAeroport1) references aeroport(idAeroport),
	foreign key (idAeroport2) references aeroport(idAeroport),
	foreign key (idPilote1) references pilote(idPilote),
	foreign key (idPilote2) references pilote(idPilote)
 	);


create table user (
	idUser int(3) not null auto_increment,
	nom varchar(30),
	prenom varchar(30),
	email varchar(30),
	mdp varchar(255),
	role enum("admin","user"),
	primary key(idUser)
);













