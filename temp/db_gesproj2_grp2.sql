-- *********************************************
-- * SQL MySQL generation                      
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.1              
-- * Generator date: Dec  4 2018              
-- * Generation date: Tue Dec  1 14:40:52 2020 
-- * Schema: db_gesproj2_grp2/mld 
-- ********************************************* 


-- Database Section
-- ________________ 

create database db_gesproj2_grp2;
use db_gesproj2_grp2;


-- Tables Section
-- _____________ 

create table t_imprimante (
     idImprimante int not null auto_increment,
     impFabriquant varchar(50) not null,
     impMarque varchar(50) not null,
     impModele varchar(100) not null,
     impTechImpression varchar(50) not null,
     impVitesseImpression int not null,
     impCapaciteBac int not null,
     impPoids int not null,
     impResolutionX int not null,
     impResolutionY int not null,
     impLongueur int not null,
     impLargeur int not null,
     impHauteur int not null,
     impPrix int not null,
     constraint ID_t_imprimante_ID primary key (idImprimante));


-- Constraints Section
-- ___________________ 


-- Index Section
-- _____________ 

create unique index ID_t_imprimante_IND
     on t_imprimante (idImprimante);

