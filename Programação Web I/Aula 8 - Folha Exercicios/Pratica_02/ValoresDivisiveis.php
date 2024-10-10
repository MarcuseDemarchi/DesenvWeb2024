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
        <p>ATIVIDADE 02</p>           
        <div id="containerEnunciado">
            <p> Crie um programa para testar se um numero eh divisivel por 2.<br>
            Caso for verdade escrever a frase 'Valor divisivel por 2' <br>
            Caso for falso escrever a frase 'O valor nao eh divisivel por 2'</p>
        </div>
        <div id="formMain">            
            <form action="#" method="post">
                <label for="NumberOne">Informe o valor para saber se eh divisivel</label><br>
                <input type="number" step="any" name="NumberOne" id="NumberOne"><br>
                <button type="submit" id="Calcular">Calcular</button>                
            </form>        
        </div>
        <?php
            if (isset($_POST['NumberOne']) <> ''){                
                define("Divisor",2);
                function WriteResult($ResultTotal){
                    echo $ResultTotal;
                }                            

                $NumberOne = $_POST['NumberOne'];    
                $Resto = $NumberOne % Divisor;

                if ($Resto == 0){
                    WriteResult("<p id='Resultado'>Valor divisivel por 2<p>");
                }
                else{
                    WriteResult("<p id='Resultado'>Valor nao eh divisivel por 2<p>");
                }                
            }
    ?>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 01/10/2024</p>
    </footer>
</body>
</html>