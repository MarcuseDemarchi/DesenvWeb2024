<?php
    $Materias = Array("Engenharia de Software","Banco de dados II","Administração de Sistemas","Programação Web I","Estrutura de Dados II");
    $Professores = Array("Julian","Marco","Sandro","Cleber Nardeli","Fernando Bastos");

    for ($Index = 0; $Index < 5; $Index++) {
        Echo ("Materia " . $Materias[$Index] . " Professor" . $Professores[$Index] ."<br>");
    }
?>