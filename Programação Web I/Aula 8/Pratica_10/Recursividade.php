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
        <p>ATIVIDADE 10</p>           
        <div id="containerEnunciado">
            <p></p>
        </div>
        <div id="formMain">                                
        </div>
        <?php
            $pastas = array("bsn" => 
                                array("3a_Fase" =>
                                        array("desenvolWeb","bancodados1","engsoft1"),
                                "4a_Fase" => array("IntroWeb","BancoDados_2","EngSoft2")));        
            
            function percorreArray($pastas, $nivelIndentacao) {            
                foreach ($pastas as $pasta => $subPastas) {
                    echo "<p>".str_repeat('-', $nivelIndentacao) . $pasta ."</p>";
            
                    if (is_array($subPastas)) {
                        percorreArray($subPastas, $nivelIndentacao + 1);
                    }
                }
            }

            percorreArray($pastas,1);
        ?>
    </div>
    <footer>
        <p>By:Marcus Demarchi <br> Date: 01/10/2024</p>
    </footer>
</body>
</html>