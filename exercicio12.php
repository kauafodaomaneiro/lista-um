<html lang=="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber uma string e exibir a quantidade de vogais.</title>
</head>
<body>

    <form method="POST" action="">
            <label for="palavra">informe a palavra:</label>
            <input type="text" id="palavra" name="palavra" required>
            <button type="submit" name="vogais">Verificar vogais</button>
        </form> 


        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['vogais'])){
                $palavra = $_POST['palavra'];
                $letras = str_split($palavra);
                $p = 0;
            };


            for($i = 0; $i <= (strlen($palavra)-1); $i++){
                if($letras[$i] == "a" || $letras[$i] == "e" || $letras[$i] == "i" || $letras[$i] == "o" || $letras[$i] == "u" || $letras[$i] == "A" || $letras[$i] == "E" || $letras[$i] == "I" || $letras[$i] == "O" || $letras[$i] == "U"){
                    $p++;
                };

            };

                echo "a palavra tem $p vogais";

        };
        
        
        ?>
    
</body>
</html>