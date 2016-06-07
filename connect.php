<?php
// parametros de ligação
$userdb = "phpweb";       // username no MySQL
$passdb = "phpppp";       // password no MySQL
$hostdb = "localhost";    // onde está o Mysql (na mesma máquina que servidor web)
$namedb = "pwtpsi";       // nome da BD


// estabelece ligação
$myconn = new mysqli($hostdb,$userdb,$passdb,$namedb);

// se houver erros
if ($myconn->connect_errno) {
    // aborta
    die ($myconn->connect_error);
} else {
    // caso contrário continua
    // esta mensagem "ok" deverá ser comentada
    // está aqui apenas para assinalar o sucesso da ligação
    echo ("ok");
}
?>
