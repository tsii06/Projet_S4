create database baseRegime;
use baseRegime;

create table genre(
	idGenre int primary key AUTO_INCREMENT,
	sexe varchar(50)
);

insert into genre(sexe) values
	('Homme'),
	('Femme');

create table utilisateur(
	idUtilisateur int primary key AUTO_INCREMENT,
	nom varchar(50),
	email varchar(50),
	mdp varchar(50),
	idgenre int,
	foreign key (idgenre) references genre(idGenre)
);

create table profilUtilisateur(
	idProfilUtilisateur int primary key AUTO_INCREMENT,
	idUtilisateur int,
	taille float,
	poids float,
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);



create table objectif(
	idObjectif int primary key AUTO_INCREMENT,
	nom varchar(50)
);

insert into objectif values(NULL,'Miena');
insert into objectif values(NULL,'Mitombo');

create table categorie(
	idCategorie int primary key AUTO_INCREMENT,
	nom varchar(50)
);
insert into categorie(nom) values
	('viande rouge'),
	('viande blanc');

create table sakafo(
	idSakafo int primary key AUTO_INCREMENT,
	idObjectif int,
	idCategorie int,
	nom varchar(30),
	foreign key (idObjectif) references objectif(idObjectif),
	foreign key (idCategorie) references categorie(idCategorie)
);

insert into sakafo(idObjectif,idCategorie,nom) values
	(1,1,'Hena omby'),
	(1,2,'Atody');



create table regime(
	idRegime int primary key AUTO_INCREMENT,
	idObjectif int,
	poids float,
	prix float,
	duree float,
	foreign key (idObjectif) references objectif(idObjectif)
);

create table detailRegimeSakafo(
	idRegime int,
	idSakafo int,
	quantite float,
	foreign key (idRegime) references regime(idRegime),
	foreign key (idSakafo) references sakafo(idSakafo)	
);




create table activiteSportive(
	idActiviteSportive int primary key AUTO_INCREMENT,
	nom varchar(50),
	idObjectif int,
	foreign key (idObjectif) references objectif(idObjectif)
);

insert into activiteSportive(nom,idObjectif) values 
	('Pompe',1),
	('Abdo',1);

create table detailRegimeSport(
	idRegime int,
	idActiviteSportive int,
	nombre float,
	foreign key (idRegime) references regime(idRegime),
	foreign key (idActiviteSportive) references activiteSportive(idActiviteSportive)
);


create table codeMonnaie(
	idCodeMonnaie int primary key AUTO_INCREMENT,
	valeur float
);

insert into codeMonnaie values
	(1,5000),
	(2,7000),
	(3,10000);

create table etatCode(
	idCodeMonnaie int,
	idUtilisateur int,
	etat int,
	foreign key (idCodeMonnaie) references codeMonnaie(idCodeMonnaie),
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

create table objectifUtilisateur(
	idObjectif int,
	idUtilisateur int,
	poids float,
	foreign key (idObjectif) references objectif(idObjectif),
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

create table achatRegime(
	idUtilisateur int,
	idRegime int,
	multiple decimal(14,2) default 1,
	datedebut date,
	foreign key (idRegime) references regime(idRegime),
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

