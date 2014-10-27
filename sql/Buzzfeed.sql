
-- this is an attempt to use SQL to create a basic query re: cats ~ Buzzfeed.com


-- used article attributes for below.
CREATE TABLE article (
   articleId INT UNSIGNED NOT NULL AUTO_INCREMENT,
   articleTitle VARCHAR(256),
   article   TEXT         NOT NULL,
   subject   VARCHAR(128) NOT NULL,
   date      DATETIME     NOT NULL,
   author    VARCHAR(64)  NOT NULL,
   PRIMARY KEY (articleId)
);

-- Make an edit or two

CREATE TABLE image (
   imageId INT UNSIGNED NOT NULL AUTO_INCREMENT,
   articleId INT UNSIGNED NOT NULL,
   imageData BLOB         NOT NULL,
   subject VARCHAR(128) NOT NULL,
   caption VARCHAR (128)  NOT NULL,
   imageType VARCHAR (8)  NOT NULL,
   PRIMARY KEY (imageId),
   FOREIGN KEY (articleId) REFERENCES article (articleId)
);

-- lets try to get this to github
-- comments added 0746 am 10/27 :: trying to push/commit to github