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
        <p>ATIVIDADE 06</p>           
        <div id="containerEnunciado">
            <p> Joaozinho recebeu R$ 50,00 reais de seu pai para ir a feira comprar frutas e verduras. <br>
                Ele comprou maca, melancia, laranja, repolho, cenoura, batatinha.   <br>
                Crie  um  programa  que  calcule  o  valor  gasto  com  cada  produto  comprado,  sendo  o <br>
                resultado do valor individual do produto em Kg multiplicado pela quantidade em Kg <br>
                comprada por Joaozinho.   <br>
                Ao final escrever uma frase com o valor da compra, e uma previsao se o dinheiro sera <br>
                o suficiente para pagar a conta, caso falte dinheiro escrever uma frase em vermelho <br>
                com o valor que ficou acima do disponivel por Joaozinho, e nao, escrever uma fase em <br>
                azul e o valor que Joaozinho ainda poderia gastar.<br>
                Caso  o  valor  da  compra  seja  exatamente  igual  ao  R$  50,00  disponivel,  escreva  uma <br>
                frase em verde afirmando que o saldo para compras foi esgotado.
            </p>
        </div>
        <div id="formMain">            
            <form action="#" method="post">
                <div id="tablesForm">
                    <table>     
                        <thead>
                            <tr>
                                <th>Fruta</th>
                                <th>Preco KG</th>
                                <th>Quantidade KG</th>                                
                            </tr>
                        </thead>   
                        <tbody>
                            <tr>
                                <td>Maca</td>
                                <td>5</td>
                                <td><input type="number" step="any" name="amountMaca" id="amountMaca"></td>
                            </tr>
                            <tr>
                                <td>Melancia</td>
                                <td>3.50</td>
                                <td><input type="number" step="any" name="amountMelancia" id="amountMelancia"></td>
                            </tr>
                            <tr>
                                <td>Laranja</td>
                                <td>3.75</td>
                                <td><input type="number" step="any" name="amountLaranja" id="amountLaranja"></td>
                            </tr>
                            <tr>
                                <td>Repolho</td>
                                <td>2</td>
                                <td><input type="number" step="any" name="amountRepolho" id="amountRepolho"></td>
                            </tr>
                            <tr>
                                <td>Cenoura</td>
                                <td>4.25</td>
                                <td><input type="number" step="any" name="amountCenoura" id="amountCenoura"></td>
                            </tr>
                            <tr>
                                <td>Batatinha</td>
                                <td>2.80</td>
                                <td><input type="number" step="any" name="amountBatatinha" id="amountBatatinha"></td>
                            </tr>                    
                        </tbody>                                                            
                    </table>               
                    <table>
                        <thead>
                            <th>Preco Unit</th>                            
                        </thead>
                        <tbody>
                        <?php  
                            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                                $arrayFruts = Array(
                                    "Maca" => 5,
                                    "Melancia" => 3.50,
                                    "Laranja" => 3.75,
                                    "Repolho" => 2,
                                    "Cenoura" => 4.25,
                                    "Batatinha" => 2.80
                                );   
        
                                $arrayAmountFruts = Array(
                                    "Maca" => $amountMaca = is_numeric($_POST['amountMaca']) ? $_POST['amountMaca'] : 0,
                                    "Melancia" => $amountMelancia = is_numeric($_POST['amountMelancia']) ? $_POST['amountMelancia'] : 0,
                                    "Laranja" => $amountLaranja = is_numeric($_POST['amountLaranja']) ? $_POST['amountLaranja'] : 0,
                                    "Repolho" => $amountRepolho = is_numeric($_POST['amountRepolho']) ? $_POST['amountRepolho'] : 0,
                                    "Cenoura" => $amountCenoura = is_numeric($_POST['amountCenoura']) ? $_POST['amountCenoura'] : 0,
                                    "Batatinha" => $amountBatatinha = is_numeric($_POST['amountBatatinha']) ? $_POST['amountBatatinha'] : 0
                                );                        
    
                                function calcValueUnitario($value,$amount){
                                    return $value * $amount;
                                }
        
                                function writeMessage($message){
                                    echo $message;
                                }
        
                                function calcTotal($fruts,$amountFruts){
                                    $valueSoma = 0;
                                    foreach($fruts as $fruta => $valor){
                                        $amount = $amountFruts[$fruta];
                                        $valueUnit = calcValueUnitario($valor,$amount);
                                        $valueSoma += $valueUnit;
                                        writeMessage(" <tr>                                                        
                                                                    <td>$valueUnit</td>                                                
                                                                </tr>");
                                    }
                                    return $valueSoma;
                                }
    
                                $valorTotal = calcTotal($arrayFruts,$arrayAmountFruts);                    
                                $sobra = 50 - $valorTotal;
                                $completeHTML ="</tbody></table></div>";                            

                                if($valorTotal > 50){                                
                                    writeMessage($completeHTML." <p style='color:red' id='Result'>Saldo : $sobra</p>");
                                }
                                else{
                                    writeMessage($completeHTML."<p style='color:green' id='Result'>Saldo : $sobra</p>");
                                }                                    
                            }                            
                        ?>                                           
                <button type="submit" id="Calcular">Calcular</button>                                        
            </form>        
        </div>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 02/10/2024</p>
    </footer>
</body>
</html>