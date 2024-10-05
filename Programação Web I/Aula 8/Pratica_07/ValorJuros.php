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
        <p>ATIVIDADE 07</p>           
        <div id="containerEnunciado">
            <p>7.  Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como <br>
            ela nao tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que <br>
            ficou em 60 parcelas de R$ 489,65.   <br>
            Escreva  um  programa  que  calcule  o  valor  gasto  so  dos  juros  que  serao  pagos  por <br>
            Mariazinha em comparacao ao valor a vista do carro.</p>
        </div>
        <div id="formMain">            
            <form action="#" method="post">
                <label for="valueCar">Valor do carro a vista</label><br>
                <input type="number" step="any" name="valueCar" id="valueCar"><br>
                <label for="valueParcel">Informe o valor das parcelas </label><br>
                <input type="number" step="any" name="valueParcel" id="valueParcel"><br>
                <label for="amountParcel">Quantidade parcelas</label><br>
                <input type="number" name="amountParcel" id="amountParcel"><br>                
                <button type="submit" id="Calcular">Calcular</button>                                
            </form>        
        </div>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){                
                $valueCar = $_POST['valueCar'] <> 0 ? $_POST['valueCar'] : 0;    
                $valueParcel = $_POST['valueParcel'] <> 0 ? $_POST['valueParcel'] : 0;
                $amountParcel = $_POST['amountParcel'] <> 0 ? $_POST['amountParcel'] : 0;

                function calcJuros($valueCar,$valueParcel,$amountParcel){
                    return ($amountParcel * $valueParcel) - $valueCar;
                }

                function WriteResult($ResultTotal){
                    echo $ResultTotal;
                }                            

                function ValidValues($valueParcel,$valueCar,$amountParcel){
                    if (($valueParcel <= 0) || ($valueCar <= 0) || ($amountParcel <= 0)){
                        WriteResult('<p id="Resultado">Valores informados invalidos!</p>');
                        exit;                                                                                                                                                                                
                    }
                    else
                        return true;
                }                

                if (ValidValues($valueCar,$valueParcel,$amountParcel)){
                    $valorPagoJuros = calcJuros($valueCar,$valueParcel,$amountParcel);

                    WriteResult("<p id='Resultado'>O valor pago em juros foi de $valorPagoJuros</p>");
                }                        
            }                
    ?>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 01/10/2024</p>
    </footer>
</body>
</html>