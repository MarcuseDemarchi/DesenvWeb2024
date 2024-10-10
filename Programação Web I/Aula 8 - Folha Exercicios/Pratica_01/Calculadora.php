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
        <p>ATIVIDADE 01</p>           
        <div id="containerEnunciado">
            <p>Criar um programa que execute a soma de tres valores. <br> 
            Se a primeira variavel for maior que 10, escrever o resultado da operacao em azul <br>
            Se a segunda variavel for menor que a terceira, escrever o resultado em verde <br>
            Se  a  terceira  variavel  for  menor  que  a  primeira  e  a  segunda  variavel  escrever  o <br>
            resultado em vermelho</p>
        </div>
        <div id="formMain">            
            <form action="#" method="post">
                <label for="NumberOne">Valor da primeira variavel</label><br>
                <input type="number" step="any" name="NumberOne" id="NumberOne"><br>
                <label for="NumberTwo">Valor da segunda variavel</label><br>
                <input type="number" step="any" name="NumberTwo" id="NumberTwo"><br>
                <label for="NumberThree">Valor da terceira variavel</label><br>
                <input type="number" step="any" name="NumberThree" id="NumberThree"><br>
                <button type="submit" id="Calcular">Calcular</button>                
            </form>        
        </div>
        <?php
            if (isset($_POST['NumberOne']) <> ''){
                function CalcValues($NumberOne,$NumberTwo,$NumberThree){
                    return $NumberOne + $NumberTwo + $NumberThree;
                }            
                function ValidColor($n1,$n2,$n3){
                    if ($n1 > 10){
                        return 'Blue';
                    }
                    elseif ($n2 < $n3){
                        return 'Green';
                    }
                    elseif (($n3 < $n2) && ($n3 < $n1)){
                        return 'Red';
                    }
                }
                
                function WriteResult($ResultTotal){
                    echo $ResultTotal;
                }
            
                $NumberOne = $_POST['NumberOne'];
                $NumberTwo = $_POST['NumberTwo'];
                $NumberThree = $_POST['NumberThree']; 
                $Color = ValidColor($NumberOne,$NumberTwo,$NumberThree);
                $ValueTotal = CalcValues($NumberOne,$NumberTwo,$NumberThree);
    
                WriteResult("<p style= 'color:$Color'; id='Resultado'>Resultado : $ValueTotal<p>");
            }
    ?>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 01/10/2024</p>
    </footer>
</body>
</html>