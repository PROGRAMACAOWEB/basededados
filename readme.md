# Acesso e Consulta a BD MySQL via PHP

Este exemplo ilustra uma conexão simples a uma BD MySQL e a interrgação
em SQL.

## Base de dados

O exemplo pressupõe a existência uma base de dados MySQL
chamada **pwtpsi** com uma tabela **users** com os seguintes campos:
* username (varchar 20)
* password (varchar 10)
* nome (varchar 20)
* apelido (varchar 20)

com chave primária no campo **username**

Pode utilizar o ficheiro SQL fornecido **pwtpsi.sql** para importar a base de dados usando o **phpmyadmin** ou outro cliente para MySQL.

Esta base de dados pressupõe a existência de um utilzador MySQL **phpweb** com password **phpppp** que tem acesso à BD **pwtpsi**, nomeadamente para SELECT, INSERT, UPDATE e DELETE. Deve configurar um utilizador com estes privilégios para a BD **pwtpsi**. Alternativamente, pode executar o seguinte código SQL para criar o utilizador.

``` SQL
GRANT USAGE ON *.* TO 'phpweb'@'localhost' IDENTIFIED BY PASSWORD '*70AC1DFAEC03D79D9E4A62C54434E5090460AFCC';

GRANT SELECT, INSERT, UPDATE, DELETE ON `pwtpsi`.* TO 'phpweb'@'localhost';
```

Estas configurações estão refletidas no início do ficheiro **connect.php** que é utilizado para conetar ao MySQL, que deverá ser atualizado caso sejam alterados os nomes à base de dados , utilizador ou password.

## Ficheiros
* connect.php (ligação à BD)
* simpleaccess.php (ligação e interrogação)
* pwtpsi.sql (sql para importar a base de dados - opcional)
