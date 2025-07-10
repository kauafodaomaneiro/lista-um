<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar se um número é positivo, negativo ou zero.</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numero_positivo">Verifica se é um número ppositivo:</label>
        <input type="number" id="numero_positivo" name="numero_positivo" required>
        <button type="submit" name="verificar_positivo">Verificar</button>
    </form>
    
<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['numero_positivo'])){
            $numero = $_POST['numero_positivo'];

            if($numero >0){
                echo "O número: $numero é positivo";
            }elseif($numero == 0){
                echo "O número $numero é nulo";
            }else{
                echo "O número: $numero é negativo";
            };

        };
    };

?>

</body>
</html>