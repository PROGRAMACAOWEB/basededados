<?php
include 'connect.php';
?>
<html>

    <head>
    </head>
    <body>
        <?php

        // a query SQL
        $sql = "SELECT * from users";

        // é executada, o resultado fica em $result
        $result = $myconn->query($sql);

        // teste de erros na query
        if ($myconn->errno) {
            die ($myconn->error);
            } else {
                echo ("ok");
            }

echo ("<h1> listagem </h1>");
        // iteração dos resultados : como objetos
        while($registo = $result->fetch_object()) {
            echo "<ul>";
            echo "<li>".$registo->username."</li>";
            echo "<li>".$registo->nome."</li>";
            echo "<li>".$registo->apelido."</li>";
            echo "</ul>";
        }


echo ("<h1> listagem </h1>");
        // necessario 'rebobinar' o resultado
        $result->data_seek(0);
        // iteração dos resultados  : como arrays associativos
        while($registo = $result->fetch_assoc()) {
            echo "<ul>";
            echo "<li>".$registo['username']."</li>";
            echo "<li>".$registo['nome']."</li>";
            echo "<li>".$registo['apelido']."</li>";
            echo "</ul>";
        }



echo ("<h1> listagem </h1>");
        // necessario 'rebobinar' o resultado
        $result->data_seek(0);

        // iteração dos resultados :  como associativo ou numérico
        while($registo = $result->fetch_array()) {
            echo "<ul>";
            echo "<li>".$registo[0]."</li>";
            echo "<li>".$registo['nome']."</li>";
            echo "<li>".$registo[2]."</li>";
            echo "</ul>";
        }

        ?>

    </body>

</html>
