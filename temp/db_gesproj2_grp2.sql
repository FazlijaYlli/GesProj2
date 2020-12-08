-- *********************************************
-- * SQL MySQL generation                      
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.1              
-- * Generator date: Dec  4 2018              
-- * Generation date: Tue Dec  8 13:02:54 2020 
-- * Schema: db_gesproj2_grp2/mld 
-- ********************************************* 


-- Database Section
-- ________________ 

create database db_gesproj2_grp2;
use db_gesproj2_grp2;


-- Tables Section
-- _____________ 

create table t_consommable (
     idConsommable int not null auto_increment,
     conType varchar(50) not null,
     conName varchar(50) not null,
     conDescription varchar(500) not null,
     conPrix float(1) not null,
     constraint ID_t_consommable_ID primary key (idConsommable));

create table t_correspondre (
     idConsommable int not null,
     idImprimante int not null,
     constraint ID_t_correspondre_ID primary key (idConsommable, idImprimante));

create table t_imprimante (
     idImprimante int not null auto_increment,
     impFabriquant varchar(50) not null,
     impMarque varchar(50) not null,
     impModele varchar(100) not null,
     impTechImpression varchar(50) not null,
     impVitesseImpression float(1) not null,
     impCapaciteBac int not null,
     impPoids float(1) not null,
     impResolutionX int not null,
     impResolutionY int not null,
     impLongueur float(1) not null,
     impLargeur float(1) not null,
     impHauteur float(1) not null,
     impPrix float(1) not null,
     impImage varchar(200) not null,
     constraint ID_t_imprimante_ID primary key (idImprimante));


-- Constraints Section
-- ___________________ 

-- Not implemented
-- alter table t_consommable add constraint ID_t_consommable_CHK
--     check(exists(select * from t_correspondre
--                  where t_correspondre.idConsommable = idConsommable)); 

alter table t_correspondre add constraint FKt_c_t_i_FK
     foreign key (idImprimante)
     references t_imprimante (idImprimante);

alter table t_correspondre add constraint FKt_c_t_c
     foreign key (idConsommable)
     references t_consommable (idConsommable);


-- Index Section
-- _____________ 

create unique index ID_t_consommable_IND
     on t_consommable (idConsommable);

create unique index ID_t_correspondre_IND
     on t_correspondre (idConsommable, idImprimante);

create index FKt_c_t_i_IND
     on t_correspondre (idImprimante);

create unique index ID_t_imprimante_IND
     on t_imprimante (idImprimante);

