
-- ALTER TABLE sous_rubrique ADD COLUMN SIT_ID INT UNSIGNED DEFAULT 1;
-- ALTER TABLE rubrique ADD COLUMN url_page VARCHAR(30);
-- CREATE OR REPLACE VIEW V_Menu_Princepal AS
-- SELECT 
-- 	 r.RUB_ID,r.a_sous_rubrique,r.url_page, r.RUB_ICONE_ID, r.RUB_LIBELLE,r.RUB_BACKGROUND,r.RUB_FONT_NAME,r.RUB_FONT_SIZE,r.RUB_FONT_COLOR, m.med_ressource 
-- 	 FROM rubrique r, media m, site s  
-- WHERE 
-- 	m.med_id = r.rub_icone_id and r.SIT_ID = s.SIT_ID and s.SIT_ID = 1 
-- order by r.RUB_ORDRE

-- use wcg_site_web_databases;

-- SELECT SRU_ORDRE, SRU_TITRE  
--   FROM sous_rubrique
--   INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID 
-- WHERE sous_rubrique.RUB_ID = 2 AND sous_rubrique.STA_ID =   1
--   ORDER BY SRU_ORDRE;
-- desc sous_rubrique;
-- SELECT sous_rubrique.SRU_ID as id, SRU_TITRE  as title 
--             FROM sous_rubrique 
--             INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID 
--             WHERE sous_rubrique.RUB_ID = 1 AND sous_rubrique.STA_ID =1
--             ORDER BY SRU_ORDRE;


-- Carousel Home rubrique

-- SELECT media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE
-- FROM  media
-- Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID
-- Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID
-- WHERE  sous_rubrique.SRU_UNE = 1;

-- Home Text Premier section

--  SELECT media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE
--  FROM  media
--  Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID
--  Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID
--  WHERE  sous_rubrique.SRU_UNE = 1 AND site.SIT_ID=1;

-- Home Text Premier section

--  SELECT sous_rubrique.SRU_TITRE , sous_rubrique.SRU_CONTENU
--  FROM  sous_rubrique
--  WHERE sous_rubrique.SRU_LIBELLE = "home";

-- CREATE OR REPLACE VIEW V_home_section_Une AS
--  SELECT sous_rubrique.SRU_TITRE , sous_rubrique.SRU_CONTENU 
--  FROM  sous_rubrique WHERE sous_rubrique.SRU_LIBELLE = 'home' AND STA_ID=1;

-- SELECT media.MED_RESSOURCE, sous_rubrique.SRU_LIBELLE, sous_rubrique.SRU_TITRE , sous_rubrique.SRU_CONTENU 
-- FROM sous_rubrique INNER JOIN media ON media.MED_ID = sous_rubrique.SRU_VIGNETTE_ID WHERE SRU_AVANT = 1 AND STA_ID = 1 ORDER BY SRU_ORDRE;

-- Rubrique
--  SELECT r.a_sous_rubrique,r.url_page,r.RUB_ID, r.RUB_ICONE_ID, r.RUB_LIBELLE,r.RUB_BACKGROUND,r.RUB_FONT_NAME,r.RUB_FONT_SIZE,r.RUB_FONT_COLOR, m.med_ressource FROM rubrique r, media m, site s  WHERE m.med_id = r.rub_icone_id and r.SIT_ID = s.SIT_ID and s.SIT_ID = 1 order by r.RUB_ORDRE

-- Sous rubrique
-- SELECT sous_rubrique.SRU_ID as id, SRU_TITRE  as title , template.TPL_LIBELLE as url_sub_menu, template.TPL_RESSOURCES as ressource_sub_menu FROM sous_rubrique INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID INNER JOIN template   ON template.TPL_ID = sous_rubrique.TPL_ID WHERE sous_rubrique.RUB_ID = 2 AND sous_rubrique.STA_ID = 1 ORDER BY SRU_ORDRE

-- SELECT media.MED_ID, media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE FROM  media Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID WHERE  sous_rubrique.SRU_UNE = 1 AND site.SIT_ID=1
