<?php
// Crie um script PHP que deverá conter o seguinte:
// Declaração de duas constantes, uma com o seu nome e outra
// com o seu sobrenome;
// Declaração de uma variável chamada NOME que deverá
// receber o conteúdo da constante que possui seu nome
// concatenando com a constante do sobrenome.
// Produzir saída com o conteúdo.
// DICA: Para concatenar duas variáveis pode-se utilizar o “.”,
// ex: $var1 . “ “ . $var2

define("Nome","Marcus");
define("Sobrenome","Demarchi");

function writeFullName()
{
    echo Nome ." ".Sobrenome;
}

writeFullName();