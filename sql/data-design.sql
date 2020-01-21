 ALTER DATABASE tdameron1 CHARACTER SET utf8 COLLATE utf8_cunicdoe_ci;

 DROP TABLE IF EXISTS gigs;
 DROP TABLE IF EXISTS message;
 DROP TABLE IF EXISTS user;



 CREATE TABLE user (
 	userId BINARY(16) NOT NULL,
 	userDescription VARCHAR (256) NOT NULL,
 	userGigs BINARY(16) NOT NULL,
 	userHash CHAR(97) NOT NULL,
 	userLevel VARCHAR(2) NOT NULL,
 	userRating VARCHAR(3) NOT NULL,
 	PRIMARY KEY(userId)
 );

 CREATE TABLE message (
 	messageId BINARY(16) NOT NUll,
 	messageUserId BINARY(16) NOT NULL,
 	messageContent VARCHAR(512) NOT NULL,
 	messageDate DATETIME(6) NOT NULL,
 	INDEX(messageUserId),
 	FOREIGN KEY(messageUserId) REFERENCES user(userId),
 	PRIMARY KEY(messageId)

 );

 CREATE TABLE gigs (
 	gigId BINARY (16) NOT NULL,
 	gigUserId BINARY(16) NOT NULL,
 	gigDescription VARCHAR (256),
 	gigDate DATETIME(6),
 	INDEX (gigUserID),
 	FOREIGN KEY (gigUserId) REFERENCES user(userId),
 	PRIMARY KEY (gigId)

 );