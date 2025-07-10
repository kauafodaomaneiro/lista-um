<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calcular o fatorial de um número.</title>
</head>
<body>
    
<form method="POST" action="">
        <label for="fatorial">Calcula o fatorial do número:</label>
        <input type="number" id="fatorial" name="fatorial" required>
        <button type="submit" name="calcularfatorial">fatorial</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['fatorial'])){
            $numero = $_POST['fatorial'];
            $resultado = 1;
            
            for($i = $numero; $i >= 1; $i--){
                $resultado *= $i;
                
                 }
            echo $resultado;
            echo '<br>';

        };
    };
    
    ?>

</body>
</html>