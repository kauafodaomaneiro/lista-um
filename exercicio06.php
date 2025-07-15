<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir todos os divisores de um número.</title>
</head>
<body>

<form method="POST" action="">
        <label for="num">informe o numero:</label>
        <input type="number" id="num" name="num" required>
        <button type="submit" name="verificar_divisores">Verificar divisores</button>
    </form>
    

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

         if(isset($_POST['num'])){
            $numero = $_POST['num'];

            for($i = $numero; $i >= 1; $i-- ){
                if($numero % $i ==0){
                    $divisores = $i;

                    echo "|" . $divisores . "|";

                };
            };
            
            

        };
    };
    
    ?>

</body>
</html>