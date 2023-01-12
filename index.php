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
        
    
    $passwordLength = $_GET['passlength'] ?? -1;
   function generaPassword($passwordLength)
   {
       $password = '';
       $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
       $charactersLength = strlen($characters);
       for ($i = 0; $i < $passwordLength; $i++) {
           $character = rand(0, $charactersLength - 1);
           $password .= $characters[$character];
       }
       return $password;
   };
    if ($passwordLength > 0) {
        $password = generaPassword($passwordLength);
        $_SESSION['password'] = $password;
        };
    ?> 

    <title>Strong Password Generator</title>
</head>
<body>
    <div class="container">

        <h1>Strong password generator</h1>
        <h3>Genera una password sicura</h3>
        <div class="warning hidden" >
           <h3><?php echo $_SESSION['password']; ?></h3>
        </div>
        <form class="form">
            <div id="form_length">
                <label for="passLength">Lunghezza password:</label>
                <input type="text" name="passlength"
                    <?php
                        if ($passwordLength > 0) {
                            echo "value='" . $passwordLength . "'";
                        };
                    ?>
                >
                <input type="submit" value="Genera">
            </div>
            <div id="form_parameters">
                
            </div>
            <div id="form_send">
                
            </div>
        </form>
        <div class="pass" <? echo $password; ?>>

        </div>
        
    </div>
</body>
</html>