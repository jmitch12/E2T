CREATE TABLE IF NOT EXISTS `recipe` (
	`recipe_id`     MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `title` 			VARCHAR(200) NOT NULL,
   `subtitle` 		VARCHAR(200) NOT NULL,
   `city`			VARCHAR(50) NOT NULL,
   `story`			TEXT(4000) NOT NULL,
   `ingredients` 	TEXT(4000) NOT NULL,
   `time`    		VARCHAR(20) NOT NULL,
   `servings` 		VARCHAR(20) NOT NULL,
   `preparation` 	TEXT(4000) NOT NULL,
   `song_link`		VARCHAR(80) NOT NULL,
   `video_link`		VARCHAR(80) NOT NULL,
   `article_link`	VARCHAR(80) NOT NULL,
   `image_link`		VARCHAR(80) NOT NULL,
   'insta_link'		VARCHAR(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;