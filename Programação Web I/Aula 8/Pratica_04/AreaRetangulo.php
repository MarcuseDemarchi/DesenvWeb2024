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
            <p> Crie  um  programa  que  calcule  a  area  de  um  retangulo.  Voce  deve  configurar  duas <br>
            variaveis que representam os lados a e bdesse quadrado em metros. Apos o calculo <br>
            escrever uma frase com o resultado da operacao, exemplo: 'A area do retangulo de <br>
            lados 3 e 2 metros eh 6 metros quadrados.' Caso a area for maior que 10 escreva a frase <br>
            usando a tag h1, se nao, escrever com h3.</p>
        </div>
        <div id="formMain">            
            <form action="#" method="post">
                <label for="alturaRetangulo">Informe a altura do retangulo</label><br>
                <input type="number" step="any" name="alturaRetangulo" id="alturaRetangulo"><br>
                <label for="comprimentoRetangulo">Informe o comprimento </label><br>
                <input type="number" step="any" name="comprimentoRetangulo" id="comprimentoRetangulo"><br>
                <button type="submit" id="Calcular">Calcular</button>                                
            </form>        
        </div>
        <?php
            if (isset($_POST['alturaRetangulo']) <> ''){                                
                $alturaRetangulo = $_POST['alturaRetangulo'];    
                $comprimentoRetangulo = $_POST['comprimentoRetangulo'];

                function calcMetroQuad($base,$altura){
                    return $base * $altura;
                }

                function WriteResult($ResultTotal){
                    echo $ResultTotal;
                }                            

                function ValidValues($altura,$base){
                    if (($altura <= 0) || ($base <= 0)){
                        WriteResult('<p id="Resultado">Valores informados invalidos!</p>');
                        exit;                                                                                                                                                                                
                    }
                    elseif ($altura == $base){
                        WriteResult('<p id="Resultado">Isto nao eh um retangulo e sim um quadrado!</p>');                        
                        exit;                                                                                                                                                                                
                    }
                    else
                        return true;
                }                

                if (ValidValues($alturaRetangulo,$comprimentoRetangulo)){
                    $areaTotal = calcMetroQuad($comprimentoRetangulo,$alturaRetangulo);

                    if ($areaTotal > 10){
                        WriteResult("<h1 id='Resultado'>A area do retangulo de lados <strong>$comprimentoRetangulo</strong> e <strong>$alturaRetangulo</strong><br>
                        eh <strong>$areaTotal metros quadrados</strong><h1>");
                    }
                    else{
                        WriteResult("<h3 id='Resultado'>A area do retangulo de lados <strong>$comprimentoRetangulo</strong> e <strong>$alturaRetangulo</strong><br>
                        eh <strong>$areaTotal metros quadrados</strong><h3>");
                    }                
                }            
            }
    ?>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 01/10/2024</p>
    </footer>
</body>
</html>