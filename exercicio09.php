<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber dois números e exibir a soma de todos os números entre eles.</title>
</head>
<body>

    <form method="POST" action="">
            <label for="num1">informe o primeiro numero:</label>
            <input type="number" id="num1" name="num1" required>
            <label for="num2">informe o segundo numero:</label>
            <input type="number" id="num2" name="num2" required>
            <button type="submit" name="verificar_soma">Soma entre os numeros</button>
        </form>    


        <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_soma'])){
            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];
            $soma = 0;
            };

            for($i = ($numero1+1); $i <= ($numero2-1); $i++){
                $soma += $i;

            };

            echo "A soma dos numeros entre o $numero1 e o $numero2 é: $soma";


         };
        
        
        ?>
    
</body>
</html>