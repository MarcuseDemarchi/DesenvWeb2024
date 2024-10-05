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
        <p>ATIVIDADE 05</p>           
        <div id="containerEnunciado">
            <p> Crie um programa que calcule a area de um triangulo retangulo, cuja formula segue <br>
            abaixo. Crie as variaveis apropriadas para o calculo em PHP e por fim exiba uma frase <br>
            com o valor da operacao. <br>
            Formula -> Resultado = (Base * Altura) / 2</p>
        </div>
        <div id="formMain">            
            <form action="#" method="post">
                <label for="alturaTriangulo">Informe a altura do Triangulo</label><br>
                <input type="number" step="any" name="alturaTriangulo" id="alturaTriangulo"><br>
                <label for="comprimentoTriangulo">Informe o comprimento </label><br>
                <input type="number" step="any" name="comprimentoTriangulo" id="comprimentoTriangulo"><br>
                <button type="submit" id="Calcular">Calcular</button>                                
            </form>        
        </div>
        <?php
            if (isset($_POST['alturaTriangulo']) <> ''){                                
                Define("Divisor",2);
                $alturaTriangulo = $_POST['alturaTriangulo'];    
                $comprimentoTriangulo = $_POST['comprimentoTriangulo'];

                function calcMetroQuad($base,$altura){
                    return ($base * $altura)/Divisor;
                }

                function WriteResult($ResultTotal){
                    echo $ResultTotal;
                }                            

                function ValidValues($altura,$base){
                    if (($altura <= 0) || ($base <= 0)){
                        WriteResult('<p id="Resultado">Valores informados invalidos!</p>');
                        exit;                                                                                                                                                                                
                    }
                    else
                        return true;
                }                

                if (ValidValues($alturaTriangulo,$comprimentoTriangulo)){
                    $areaTotal = calcMetroQuad($comprimentoTriangulo,$alturaTriangulo);

                    WriteResult("<p id='Resultado'>A area do Triangulo de lados <strong>$comprimentoTriangulo</strong> e <strong>$alturaTriangulo</strong><br>
                    eh <strong>$areaTotal metros quadrados</strong></p>");
                }            
            }
    ?>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 01/10/2024</p>
    </footer>
</body>
</html>