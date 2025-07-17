<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter graus Celsius para Fahrenheit.</title>
</head>
<body>

        <form method="POST" action="">
            <label for="num">informe a temperatura pra conversão:</label>
            <input type="number" id="num" name="num" required>
            <button type="submit" name="converter">Converter</button>
        </form> 


        <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['converter'])){
                $temperatura = $_POST['num'];
                $fahrenheit = 0;
            };

            
                $fahrenheit = ((($temperatura*9)/5) + 32);

            echo $fahrenheit;

         };


        ?>
    
</body>
</html>