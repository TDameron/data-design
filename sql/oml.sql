
INSERT INTO user(userId, userDescription, userGigs, userHash, userLevel, userRating)
	VALUES(UNHEX('42cbc899d47c4ad5bfa6ecba31f451c5'), 'My first mySQL insert statement.','1234567812345678', '1234567812345678', '10', '86');

/* Remember to input values into statements that are NOT NULL */

UPDATE user SET userDescription = 'Pls work :,(' WHERE userId = '42cbc899d47c4ad5bfa6ecba31f451c5';

INSERT INTO message(messageId, messageUserId, messageContent, messageDate)
	VALUES(UNHEX('7c367c7f755a4ef487bcec227892a0e0'),UNHEX('42cbc899d47c4ad5bfa6ecba31f451c5'), 'Cats is amazing, I dont care what anyone says', NOW());

DELETE FROM message WHERE messageId = UNHEX('7c367c7f755a4ef487bcec227892a0e0');

/* FOREIGN KEYS MUST EXIST IN THE PARENT TABLE OR MY SQL WILL THROW A VIOLATION