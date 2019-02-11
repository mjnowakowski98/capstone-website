DELIMITER //

CREATE PROCEDURE ValidateLogin (
	IN _user_email VARCHAR(50)
)
BEGIN
	SELECT
        Users.user_id AS 'userId',
        user_passhash AS 'passHash',
        user_isdisabled AS 'isDisabled',
        admin_id AS 'adminId'
    FROM Users LEFT JOIN Administrators
        ON Users.user_id = Administrators.user_id
    WHERE user_email = _user_email;
END //

CREATE PROCEDURE CreateNewAccount (
    IN _user_username VARCHAR(50),
    IN _user_email VARCHAR(50),
    IN _user_passhash CHAR(60)
)
BEGIN
    INSERT INTO Users (
        user_username, user_email, user_passhash,
        user_isdisabled, user_ispublic, user_createddate, user_profileimage
    ) VALUES (_user_username, _user_email, _user_passhash, 0, 0, CURDATE(), NULL);
END //

DELIMITER ;