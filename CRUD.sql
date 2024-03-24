--CRUD
--Create

INSERT INTO roles (name,value) VALUES ('Editor',44)

--Read
SELECT * FROM roles ORDER BY name DESC LIMIT 3

--Update
UPDATE roles SET  name='Super' WHERE id=4

--Delete
DELETE FROM roles WHERE id=2

--left Join tables
--To view the role name as role link two tables by LEFT JOIN
SELECT users.id, users.name , users.role_id , roles.name AS role
FROM users LEFT JOIN roles
ON users.role_id = roles.id