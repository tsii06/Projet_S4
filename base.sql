create database baseRegime;
use baseRegime;


create table utilisateur(
	idUtilisateur int primary key AUTO_INCREMENT,
	nom varchar(50),
	email varchar(50),
	mdp varchar(50)
);

create table profilUtilisateur(
	idProfilUtilisateur int primary key AUTO_INCREMENT,
	idUtilisateur int,
	taille float,
	genre varchar(20),
	poids float,
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

insert into profilUtilisateur values(NULL,1,32,'male',32);
insert into profilUtilisateur values(NULL,2,32,'femelle',32);
insert into profilUtilisateur values(NULL,3,32,'male',32);

create table objectif(
	idObjectif int primary key AUTO_INCREMENT,
	nom varchar(50)
);

insert into objectif values(NULL,'Miena');
insert into objectif values(NULL,'Mitombo');

create table regime(
	idRegime int primary key AUTO_INCREMENT,
	idObjectif int,
	poids float,
	prix float,
	duree float,
	foreign key (idObjectif) references objectif(idObjectif)
);

insert into regime values(NULL,1,20,200,30);
insert into regime values(NULL,2,20,200,30);
insert into regime values(NULL,1,20,200,30);

create table regimeUtilisateur(
	idRegime int,
	idUtilisateur int,
	dateDebut date,
	foreign key (idRegime) references regime(idRegime),
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

insert into regimeUtilisateur values(1,1,'23/03/04');
insert into regimeUtilisateur values(2,1,'23/03/04');


select * from regimeUtilisateur as ru join regime on 

create table sakafo(
	idSakafo int primary key AUTO_INCREMENT,
	idObjectif int,
	idCategorie int,
	nom varchar(30),
	foreign key (idObjectif) references objectif(idObjectif),
	foreign key (idCategorie) references categorie(idCategorie)
);



create table categorie(
	idCategorie int primary key AUTO_INCREMENT,
	nom varchar(50)
);

create table activiteSportive(
	idActiviteSportive int primary key AUTO_INCREMENT,
	nom varchar(50),
	idObjectif int,
	foreign key (idObjectif) references objectif(idObjectif)
);

create table codeMonnaie(
	idCodeMonnaie int primary key AUTO_INCREMENT,
	valeur float
);

create table etatCode(
	idCodeMonnaie int,
	idUtilisateur int,
	etat int,
	foreign key (idCodeMonnaie) references codeMonnaie(idCodeMonnaie),
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

