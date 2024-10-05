<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>Pratica 01 - Atividades Avaliativas</title>
</head>
<body>
    <div id="containerMain">     
        <p>ATIVIDADE 03</p>           
        <div id="containerEnunciado">
            <p> Crie  um  programa  que  calcule  a  area  de  um  quadrado.  Voce  deve  configurar  uma <br>
            variavel que representa o comprimento dos lados de um quadrado em metros. Apos o <br>
            calculo escrever uma frase com o resultado da operacao, exemplo: 'A area do <br>
            quadrado de lado 3 metros eh 9 metros quadrados'</p>
        </div>
        <div id="formMain">            
            <form action="#" method="post">
                <label for="base">Informe o tamanho de um dos lados do quadrado</label><br>
                <input type="number" step="any"  name="base" id="base"><br>
                <button type="submit" id="Calcular">Calcular</button>                                
            </form>        
        </div>
        <?php
            if (isset($_POST['base']) <> ''){                                
                $base = $_POST['base'];                    

                function calcMetroQuad($base){
                    return $base * $base;
                }

                function WriteResult($ResultTotal){
                    echo $ResultTotal;
                }                            

                function ValidValues($base){
                    if ($base <= 0){
                        WriteResult('<p id="Resultado">Valores informados invalidos!</p>');
                        exit;                                                                                                                                                                                
                    }                
                    else
                        return true;
                }                

                if (ValidValues($base)){
                    $areaTotal = calcMetroQuad($base);

                    WriteResult("<p id='Resultado'>A area do quadrado de lado <strong>$base</strong> eh <strong>$areaTotal metros quadrados</strong><p>");

                }            
            }
    ?>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 01/10/2024</p>
    </footer>
</body>
</html>