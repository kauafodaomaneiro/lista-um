<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se uma palavra é um palíndromo (ex: “arara”).</title>
</head>
<body>


        <form method="POST" action="">
            <label for="palavra">informe a palavra:</label>
            <input type="text" id="palavra" name="palavra" required>
            <button type="submit" name="palindromo">Verificar palindromo</button>
        </form>  


    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['palindromo'])){
            $palavra = $_POST['palavra'];
            $palavrainvertida = strrev($palavra);
            };

            if($palavra == $palavrainvertida){
                echo "A palavra $palavra é um palindromo";
            }else{
                echo "A palavra $palavra não é um palindromo";
            };

        };
    
    ?>
    
</body>
</html>