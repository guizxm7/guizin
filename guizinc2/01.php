<?php 

 $dia = $_GET['dia'];
 $name = $_GET['name'];

 echo "Olá $name o número que você escolheu   ";
switch($dia){
    case 1:
        echo "é Domingo.";
    break;

    case 2:
        echo "é Segunda-feira.";
    break;

    case 3:
        echo "é Terça-feira.";
    break;

    case 4:
        echo "é Quarta-feira.";
    break;

    case 5:
        echo "é Quinta-feira.";
    break;
    case 6:

        echo "é Sexta-feira.";
    break;
    case 7:

        echo "é Sábado.";
    break;
    default:

            echo "não é dia da semana.";
}

?>