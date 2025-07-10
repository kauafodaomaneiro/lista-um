<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a tabuada de um número informado</title>
</head>
<body>

<form method="POST" action="">
        <label for="tabuada">Verifica a tabuada de um numero:</label>
        <input type="number" id="tabuada" name="tabuada" required>
        <button type="submit" name="verificartabuada">Tabuada</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['tabuada'])){
            $numero = $_POST['tabuada'];

            for($i = 1; $i <= 10; $i++){
                echo $numero*$i;
                
            }

        };

    };
    
    ?>
    
</body>
</html>