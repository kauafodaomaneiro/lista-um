<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber um número e exibir a sequência de Fibonacci até esse número.</title>
</head>
<body>


     <form method="POST" action="">
            <label for="num">informe numero:</label>
            <input type="number" id="num" name="num" required>
            <button type="submit" name="fibonacci">Fibonacci até o numero</button>
        </form>    

    
        
        <?php

    $numero = 0;

    function fibonaccionado($numero)
    {
        if ($numero == 0 || $numero == 1) {
            return $numero;
        } else {
            return (fibonaccionado($numero - 1) + fibonaccionado($numero - 2));
        }
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['fibonacci'])) {
            $numero = (int)$_POST['num'];
            echo "o número $numero na sequencia de fibonacci é: " . fibonaccionado($numero);
        }
    }

    ?>

    
</body>
</html>