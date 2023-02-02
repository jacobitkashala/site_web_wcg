/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de creation :  31/01/2023 14:25:30                      */
/*==============================================================*/
-- Create
--


START TRANSACTION;

drop DATABASE if exists cms_site_wcg;
CREATE DATABASE  cms_site_wcg;
use cms_site_wcg;
--
drop table if exists `Users`;

drop table if exists `journal_rubrique`;
-- 
drop table if exists `journal_site`;
-- 
drop table if exists `Journal_sous_rubrique`;
-- 
drop table if exists `Media`;

drop table if exists `NewsLetter`;

drop table if exists `Rezo`;

drop table if exists `Rubrique`;

drop table if exists `Site_web`;

drop table if exists `Sous_rubrique`;

drop table if exists `Status_element`;

drop table if exists `Templete`;

drop table if exists `Type_media`;

/*==============================================================*/
/* Table : `Users`                                    */
/*==============================================================*/
create table `Users`
(
   `Users_id`               int(11) NOT NULL,
   `Users_firs_name`        varchar(50),
  --  `Users_last_name`        varchar(50) not null,
  --  `Users_surname`          varchar(50),
   `Users_login`            varchar(50) not null,
   `Users_pwd`              varchar(50) not null,
   `Users_last_session`     timestamp,
   `Users_token`            varchar(50),
   `date_created` timestamp NOT NULL DEFAULT current_timestamp()
);

ALTER TABLE `Users`
  ADD PRIMARY KEY (`Users_id`);

ALTER TABLE `Users`
  MODIFY `Users_id` int(11) NOT NULL AUTO_INCREMENT;


/*==============================================================*/
/* Table : `Journal_rubrique`                                     */
/*==============================================================*/
create table `Journal_rubrique`
(
   `Journal_rubrique_id`    int(11) NOT NULL,
   `Users_id`               int,
   `Rubrique_id`            int,
   `Journal_operation`      varchar(50) not null,
   `Journal_date`           timestamp not null
);
ALTER TABLE `Journal_rubrique`
  ADD PRIMARY KEY (`Journal_rubrique_id`);
ALTER TABLE `Journal_rubrique`
  MODIFY `Journal_rubrique_id` int(11) NOT NULL AUTO_INCREMENT;


-- /*==============================================================*/
-- /* Table : `journal_site`                                         */
-- /*==============================================================*/
create table `Journal_site`
(
   `Journal_site_id`      int(11),
   `Users_id`             int,
   `Site_id`              int,
   `Journal_operation`    varchar(50) not null,
   `Journal_date`         timestamp not null
);
ALTER TABLE `Journal_site`
  ADD PRIMARY KEY (`Journal_site_id`);
ALTER TABLE `Journal_site`
  MODIFY `Journal_site_id` int(11) NOT NULL AUTO_INCREMENT;

/*==============================================================*/
/* Table : `Journal_sous_rubrique`                                */
/*==============================================================*/

create table `Journal_sous_rubrique`
(
   `Journal_sous_rubrique_id`      int(11),
   `Sous_rubrique_id`             int,
   `Users_id`              int,
   `Journal_sous_rubrique_operation`    varchar(50) not null,
   `Journal_sous_rubrique_date`         timestamp not null
);

ALTER TABLE `Journal_sous_rubrique`
  ADD PRIMARY KEY (`Journal_sous_rubrique_id`);
ALTER TABLE `Journal_sous_rubrique`
  MODIFY `Journal_sous_rubrique_id` int(11) NOT NULL AUTO_INCREMENT;

/*==============================================================*/
/* Table : `Media`                                                */
/*==============================================================*/

create table `Media`
(
   `Media_id`              int(11) ,
   `Type_media_id`               int,
   `Media_libelle`         varchar(50) not null,
   `Media_ressource`       varchar(50) not null,
   `Media_infobulle`       varchar(50),
   `Media_meta`            varchar(50)
);
ALTER TABLE `Media`
  ADD PRIMARY KEY (`Media_id`);
ALTER TABLE `Media`
  MODIFY `Media_id` int(11) NOT NULL AUTO_INCREMENT;


/*==============================================================*/
/* Table : `NewsLetter`                                           */
/*==============================================================*/
create table `NewsLetter`
(
   `NewsLettre_id`               int(11) ,
   `NewsLettre_libelle`          varchar(50) not null,
   `NewLettre_status`           bool not null default 0
);
ALTER TABLE `NewsLetter`
  ADD PRIMARY KEY (`NewsLettre_id`);
ALTER TABLE `NewsLetter`
  MODIFY `NewsLettre_id` int(11) NOT NULL AUTO_INCREMENT;


-- /*==============================================================*/
-- /* Table : `Rezo`                                                 */
-- /*==============================================================*/
create table `Rezo`
(
   `Rezo_id`               int(11),
   `REZ_nom`              varchar(50) not null,
   `REZ_icone`            varchar(50),
   `REZ_url`              varchar(250) not null
);
ALTER TABLE `Rezo`
  ADD PRIMARY KEY (`Rezo_id`);
ALTER TABLE `Rezo`
  MODIFY `Rezo_id` int(11) NOT NULL AUTO_INCREMENT;
/*==============================================================*/
/* Table : `Rubrique`                                             */
/*==============================================================*/
create table `Rubrique`
(
   `Rubrique_id`              int(11) ,
   `Template_id`              int,
   `site_id`                   int,
   `status_id`                int,
   `Rubrique_icon`         varchar(50),
   `Rubrique_vignette`      bigint,
   `Rubrique_img_id`           bigint,
   `Rubrique_libelle`          varchar(50) not null,
   `Rubrique_titre`            varchar(50) not null,
   `Rubrique_contenu`          text not null,
   `Rubrique_a_la_une`              bool default 0,
   `Rubrique_en_avant`            bool default 0,
   `Rubrique_background`       varchar(50) not null,
   `Rubrique_font_name`        varchar(50) not null,
   `Rubrique_font_se`        smallint not null,
   `Rubrique_font_color`       varchar(50) not null,
   `Rubrique_meta_title`       varchar(50),
   `Rubrique_meta_description` varchar(50),
   `Rubrique_date_publication` timestamp,
   `Rubrique_date_parution`    datetime,
   `Rubrique_date_expiration`  datetime
);
ALTER TABLE `Rubrique`
  ADD PRIMARY KEY (`Rubrique_id`);
ALTER TABLE `Rubrique`
  MODIFY `Rubrique_id` int(11) NOT NULL AUTO_INCREMENT;

-- /*==============================================================*/
-- /* Table : `Site_web`                                                 */
-- /*==============================================================*/
create table `Site_web`
(
   `Site_id`               int(11),
   `Status_id`               int,
   `Site_libelle`          varchar(50) not null,
   `Site_fav_icon`         varchar(50),
   `Site_meta_title`       varchar(50),
   `Site_meta_description` text 
);
ALTER TABLE `Site_web`
  ADD PRIMARY KEY (`Site_id`);
ALTER TABLE `Site_web`
  MODIFY `Site_id` int(11) NOT NULL AUTO_INCREMENT;

/*==============================================================*/
/* Table : `Sous_rubrique`                                        */
/*==============================================================*/
create table `Sous_rubrique`
(
   `Sous_rubrique_id`               int(11),
   `Templete_id`                       int,
   `Rubrique_id`                       int,
   `Status_id`                         int,
   `Sous_rubrique_icone_id`         bigint,
   `Sous_rubrique_vignette_id`      bigint,
   `Sous_rubrique_img_id`           bigint,
   `Sous_rubrique_libelle`          varchar(50) not null,
   `Sous_rubrique_titre`            varchar(50) not null,
   `Sous_rubrique_contenu`          text not null,
   `Sous_rubrique_a_la_une`              bool default 0,
   `Sous_rubrique_en_avant`            bool default 0,
   `Sous_rubrique_background`       varchar(50),
   `Sous_rubrique_font_name`        varchar(50),
   `Sous_rubrique_font_size`        smallint,
   `Sous_rubrique_font_color`       varchar(50),
   `Sous_rubrique_meta_title`       varchar(50),
   `Sous_rubrique_meta_description` varchar(500),
   `Sous_rubrique_date_publication` timestamp not null,
   `Sous_rubrique_data_parutionn`    datetime,
   `Sous_rubrique_date_expiration`  datetime
);

ALTER TABLE `Sous_rubrique`
  ADD PRIMARY KEY (`Sous_rubrique_id`);
ALTER TABLE `Sous_rubrique`
  MODIFY `Sous_rubrique_id` int(11) NOT NULL AUTO_INCREMENT;

 /*==============================================================*/
 /* Table : `Status_element`  
 /* le satus d'un header ou d'un contenue de site
 /*==============================================================*/
 create table `Status_element`
 (
    `Status_id`               int(11),
    `Status_etat`               int,
    `Status_libelle`         varchar(50) not null
 );

ALTER TABLE `Status_element`
  ADD PRIMARY KEY (`Status_id`);
ALTER TABLE `Status_element`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT;
/*==============================================================*/
/* Table : `Templete`                                             */
/*==============================================================*/
create table `Templete`
(
   `Templete_id`               int(11),
   `Templete_libelle`          varchar(50) not null,
   `Templete_ressources`       varchar(50) not null
);
ALTER TABLE `Templete`
  ADD PRIMARY KEY (`Templete_id`);
ALTER TABLE `Templete`
  MODIFY `Templete_id` int(11) NOT NULL AUTO_INCREMENT;

/*==============================================================*/
/* Table : `Type_media`                                           */
/*==============================================================*/
create table `Type_media`
(
   `Type_media_id`               int(11),
   `Type_media_libelle`          char(50) not null
);

ALTER TABLE `Type_media`
  ADD PRIMARY KEY (`Type_media_id`);
ALTER TABLE `Type_media`
  MODIFY `Type_media_id` int(11) NOT NULL AUTO_INCREMENT;


alter table `Journal_rubrique` add constraint FK_RELATION_JournalRubrique_Users foreign key (Users_id)
      references `Users` (Users_id) on delete restrict on update restrict;

alter table `Journal_rubrique` add constraint FK_RELATION_JournalRubrique_Rubrique foreign key (Rubrique_id)
      references `Rubrique` (Rubrique_id) on delete restrict on update restrict;

alter table `Journal_site` add constraint FK_RELATION_JournalSite_SiteWeb foreign key (Site_id)
      references `Site_web` (Site_id) on delete restrict on update restrict;

 alter table `Journal_site` add constraint FK_RELATION_JournalSite_Users foreign key (Users_id)
       references `Users` (Users_id) on delete restrict on update restrict;

-- alter table `Journal_sous_rubrique` add constraint FK_RELATION_JournalSousRubrique_Users foreign key (Users_id)
      -- references `Users` (Users_id) on delete restrict on update restrict;
-- 
-- alter table `Journal_sous_rubrique` add constraint FK_RELATION_JournalSousRubrique_SousRubrique foreign key (Sous_rubrique_id)
      -- references `Sous_rubrique` (Sous_rubrique_id) on delete restrict on update restrict;

--  alter table `Media` add constraint FK_RELATION_Media_TypeMedia foreign key (Type_media_id)
--        references `Type_media` (Type_media_id) on delete restrict on update restrict

-- alter table `Rubrique` add constraint FK_RELATION_14 foreign key (Templete_ID)
--       references `Templete` (Templete_ID) on delete restrict on update restrict;

-- alter table `Rubrique` add constraint FK_RELATION_3 foreign key (SIT_ID)
--       references `Site_web` (SIT_ID) on delete restrict on update restrict;

-- alter table `Rubrique` add constraint FK_RELATION_5 foreign key (Status_ID)
--       references `Status_element` (Status_ID) on delete restrict on update restrict;

-- alter table `Site_web` add constraint FK_RELATION_7 foreign key (Status_ID)
--       references `Status_element` (Status_ID) on delete restrict on update restrict;

-- alter table `Sous_rubrique` add constraint FK_RELATION_15 foreign key (Templete_ID)
--       references `Templete` (Templete_ID) on delete restrict on update restrict;

-- alter table `Sous_rubrique` add constraint FK_RELATION_4 foreign key (Rubrique_ID)
--       references `Rubrique` (Rubrique_ID) on delete restrict on update restrict;

alter table `Sous_rubrique` add constraint FK_RELATION_SousRubrique_StatusElement foreign key (Status_id)
      references `Status_element` (Status_id) on delete restrict on update restrict;

--
-- Déchargement des données de la table `Users`
--
INSERT INTO `Users` 
( `Users_id`,`Users_firs_name`,`Users_login`,`Users_pwd`, `Users_last_session`,`Users_token`) VALUE
( 1,'jaco', 'jaco@gmail.com', '1234', '2023-01-22 16:48:25', 'Users_token_user');


--
-- Déchargement des données de la table `satus_element`
--
INSERT INTO `Status_element` 
( `Status_id`,`Status_etat`,`Status_libelle`) VALUES
( 1,0, 'desactive status'),
( 2,1, 'active status');

--
-- Déchargement des données de la table `site_web`
--
INSERT INTO `Site_web` 
( `Site_id`,`Status_id`,`Site_libelle`,`Site_fav_icon`,`Site_meta_title`,`Site_meta_description`) VALUES
( 1,1, 'site web WCG','media/favicon/fav_icon.png','Word Corp Group','World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)');

--
-- Déchargement des données de la table `Templete`
--
INSERT INTO `Templete` 
( `Templete_id`,`Templete_libelle`,`Templete_ressources`) VALUES
( 1, 'acceuil_wcg','temple/acceuil_wcg/acceuil_wcg.index');

create table `Rubrique`
(
   `Rubrique_id`              int(11) ,
   `Template_id`               int,
   `site_id`               int,
   `status_id`               int,
   `Rubrique_icon`         varchar(50),
   `Rubrique_vignette`      bigint,
   `Rubrique_img_id`           bigint,
   `Rubrique_libelle`          varchar(50) not null,
   `Rubrique_titre`            varchar(50) not null,
   `Rubrique_contenu`          text not null,
   `Rubrique_a_la_une`              bool default 0,
   `Rubrique_en_avant`            bool default 0,
   `Rubrique_background`       varchar(50) not null,
   `Rubrique_font_name`        varchar(50) not null,
   `Rubrique_font_se`        smallint not null,
   `Rubrique_font_color`       varchar(50) not null,
   `Rubrique_meta_title`       varchar(50),
   `Rubrique_meta_description` varchar(50),
   `Rubrique_date_publication` timestamp,
   `Rubrique_date_parution`    datetime,
   `Rubrique_date_expiration`  datetime
);

COMMIT;
