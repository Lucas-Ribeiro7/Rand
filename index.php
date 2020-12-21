<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Aleatório</title>
</head>
<body>
    <div class="processo">
        <h2>Número Aleatorio</h2>
        <p>Coloque qualquer de X á Y e vamos gerar um numero entre X e Y</p>
        <form action="" method="GET">
            <label>Numero X: </label>
            <input type="number" name="number_x" required>
            <br>
            <label>Numero Y:</label>
            <input type="number" name="number_y" required>
            <br>
            <input type="submit" value="Gerar">
        </form>
    </div>
    <div class="resultado">
        <?php
            if(isset($_GET['number_x']) && isset($_GET['number_y'])){
                $numeroX = $_GET['number_x'];
                $numeroY = $_GET['number_y'];
                echo "<p>Numero digitado é $numeroX e $numeroY</p>";
                numAleatorio($numeroX, $numeroY);
            }
            function numAleatorio($num1, $num2){
                //echo "<p>Entrou</p>";
                $numero = rand($num1, $num2);
                echo "<p>Um número aleatório entre $num1 e $num2 gerado foi: <n>$numero</n></p>";
            } 
        ?>
    </div>
</body>
</html>