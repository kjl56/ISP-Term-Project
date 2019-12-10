CREATE TABLE Users (
Id int(11) NOT NULL AUTO_INCREMENT,
Username varchar(50),
Password varchar(255) NOT NULL,
Created_At TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (Id)
)

CREATE TABLE videosname (
name varchar(50),
url varchar(50),
des varchar(50),
PRIMARY KEY (name)
);