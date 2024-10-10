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
        <p>ATIVIDADE 08</p>           
        <div id="containerEnunciado">
            <p>Paulinho  foi  comprar  uma  moto  nova.  A  empresa  vende  motos  muito  baratas  pois <br>
            utiliza Juros Simples para o calculo das parcelas.  <br>
            Sabendo entao que o valor a vista do moto e R$ 8.654,00.<br>                 
            Crie um programa que calcule o valor das parcelas para as opcoes abaixo, sabendo que <br>
            a taxa de juros aumenta 0,5% em cada nivel e inicia em 1,5% para 24 vezes: <br>
            24 vezes <br>
            36 vezes <br>
            48 vezes <br>
            60 vezes</p>
        </div>
        <div id="formMain">            
            <form action="#" method="post">
                <label for="valueProduct">Valor do produto</label><br>
                <input type="number" step="any" name="valueProduct" id="valueProduct"><br>
                <label for="amountParcel">Quantidade de parcelas</label> <br>
                <select name="amountParcel" id="amountParcel">
                    <option value="24">24x</option>
                    <option value="36">36x</option>
                    <option value="48">48x</option>
                    <option value="60">60x</option>
                </select><br>
                <button type="submit" id="Calcular">Calcular</button>                                
            </form>        
        </div>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){                
                $valueProduct = $_POST['valueProduct'] <> 0 ? $_POST['valueProduct'] : 0;    
                $amountParcel = $_POST['amountParcel'] <> 0 ? $_POST['amountParcel'] : 0;

                function valueJuros($aParcel){
                    switch ($aParcel){
                        case 36:
                            return 0.02;
                        case 48:
                            return 0.025;
                        case 60:
                            return 0.03;            
                        default:
                            return 0.015;
                    }
                }

                function calcJuros($valueProduct,$amountParcel){
                    $valueJuros = valueJuros($amountParcel);
                    return ((($valueProduct * $valueJuros) + $valueProduct)/$amountParcel)*100;
                }

                function WriteResult($ResultTotal){
                    echo $ResultTotal;
                }                            

                function ValidValues($valueProduct,$amountParcel){
                    if (($valueProduct <= 0) || ($amountParcel <= 0)){
                        WriteResult('<p id="Resultado">Valores informados invalidos!</p>');
                        exit;                                                                                                                                                                                
                    }
                    else                    
                        return true;
                }                

                if (ValidValues($valueProduct,$amountParcel)){
                   $valorPagoJuros = calcJuros($valueProduct,$amountParcel);
                   $valorPagoJuros = round($valorPagoJuros,2);

                    WriteResult("<p id='Resultado'>O valor pago em juros foi de $valorPagoJuros</p>");
                }                        
            }                
    ?>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 03/10/2024</p>
    </footer>
</body>
</html>