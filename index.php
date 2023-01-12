<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php include 'style.css'; ?>
    </style>    
    <?php
        session_start();
        include 'logic.php';
    ?>

    <title>Strong Password Generator</title>
</head>
<body>
    <div class="container">

        <h1>Strong password generator</h1>
        <h3>Genera una password sicura</h3>
        <div class="warning hidden">
            Nessun parametro valido inserito
        </div>
        <form class="form" method="POST">
            <div id="form_length">
                <label for="passLength">Lunghezza password:</label>
                <input type="text" name="passlength">
                <input type="submit" value="Genera">
            </div>
            <div id="form_parameters">
                
            </div>
            <div id="form_send">
                
            </div>
        </form>
        <div class="pass"
        <?
        if ($passwordLength != false){
            function generaPassword($lunghezza) {
            for ( $i = 0; $i < $lunghezza; $i++ ){
                $pass = '';
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
                $character = rand(0, $lunghezza);
                $pass += $characters[$character];
            }
            return $pass;
            };
        }
        ?>
        >

        </div>
        
    </div>
</body>
</html>