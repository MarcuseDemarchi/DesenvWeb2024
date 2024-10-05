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
            <p>Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas <br>
            pena que ele nao sabia da mesma chance que Paulinho.  <br>
            A  empresa  que  Juquinha  foi  comprar  a moto  utiliza  juros  compostos para calcular o valor das parcelas.  <br>
            As opcoes de compras estudadas por ele sao as mesmas de Paulinho, ou seja 24, 36, <br>
            48 e 60 vezes o juro nesta empresa inicia em 2% para 24 vezes e aumenta 0,3% para as opcoes de parcelamento seguintes.  <br>                
            Utilizando  entao  a  formula  de  juros  composto  que  segue  abaixo,  calcule  o  valor  da <br>
            parcela para cada uma das opcoes a ser estudada por Juquinha. <br>
                    M = C * (1 + i)t   , onde: <br>            
                    M = Montante <br>
                    C = Capital Inicial <br>
                    i = Taxa de juros <br>
                    t = Tempo</p>            
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
                            return 0.023;
                        case 48:
                            return 0.026;
                        case 60:
                            return 0.029;            
                        default:
                            return 0.02;
                    }
                }

                function calcJuros($valueProduct,$amountParcel){
                    $valueJuros = valueJuros($amountParcel);                    
                    $valueParcel = $valueProduct * pow(($valueJuros + 1),$amountParcel);                    
                    $valueParcel /= $amountParcel;
                    return number_format($valueParcel,2,',','.');
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

                    WriteResult("<p id='Resultado'>O valor a ser pago nas parcelas eh de : $valorPagoJuros</p>");
                }                        
            }                
    ?>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 03/10/2024</p>
    </footer>
</body>
</html>