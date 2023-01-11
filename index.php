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
                <input type="text" name="passlength">
            </div>
            <div id="form_parameters">
                
            </div>
            <div id="form_send">
                
            </div>
        </form>
    </div>
</body>
</html>