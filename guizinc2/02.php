<?php 
$nome = $_GET["name"];
$estado = $_GET["estadocivil"];

echo "Olá $nome seu estado cívil é  ";

switch($estado){
    case '1':
        echo "Solteiro";
    break;

    case '2':
        echo "Casado";
    break;

    case '3':
        echo "Divorciado";
    break;

    case '4':
        echo "Viúvo";
    break;

    case '5':
        echo "União Estável";
    break; 
}


?>