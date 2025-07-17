<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se um ano é bissexto</title>
</head>
<body>

     <form method="POST" action="">
            <label for="num">Informe o ano:</label>
            <input type="number" id="num" name="num" required>
            <button type="submit" name="bisexto">bisexto</button>
        </form> 


        <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
             if(isset($_POST['bisexto'])){
                $ano = $_POST['num'];
             };

             if($ano % 4 == 0){
                echo "O ano $ano é bissexto";
             }else{
                echo "o ano $ano não é bissexto";
             }
             

         };
        
        
        ?>
    
</body>
</html>