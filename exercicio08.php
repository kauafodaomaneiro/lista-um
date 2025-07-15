<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar quantos números pares existem entre 1 e o número informado.</title>
</head>
<body>

    <form method="POST" action="">
            <label for="num">informe o numero:</label>
            <input type="number" id="num" name="num" required>
            <button type="submit" name="verificar_pares">Verificar quantos pares</button>
        </form>    


        <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['num'])){
            $numero = $_POST['num'];
            $soma = 0;
            };

            for($i = ($numero-1); $i >= 1; $i--){
                if($i % 2 == 0){
                    $soma += 1;
                };

            };

            echo "Entre o 1 e o $numero existem $soma numeros pares";


         };
        
        
        ?>
    
</body>
</html>