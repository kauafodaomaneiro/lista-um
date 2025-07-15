<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se o número é perfeito </title>
</head>
<body>
    
<form method="POST" action="">
        <label for="num">informe o numero:</label>
        <input type="number" id="num" name="num" required>
        <button type="submit" name="verificar_perfeito">Verificar perfeito</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['num'])){
            $numero = $_POST['num'];
            $soma = 0;

            for($i = ($numero-1); $i >= 1; $i-- ){
                if($numero % $i ==0){
                    $divisores = $i;

                    $soma += $divisores;

                };

        
            };
            if($soma == $numero){
                        echo "O numero $numero é perfeito";
                    }else{
                        echo "O numero $numero não é perfeito";
                    };
        };

    };

    ?>



</body>
</html>