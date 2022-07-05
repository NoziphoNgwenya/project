CREATE PROCEDURE checkuserdata
@email varchar(255),
@password varchar(255)

AS 
SELECT *FROM mytable WHERE passwords= @password AND email= @email
RETURN 0