<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>-=| PHP TRY |=-</title>
    </head>
    <body>
    <h1>FILTER SANITIZE AND VALIDATE:</h1><hr>
        <?php
            
            $email = "aneek.rahman8@gmail.com";
            echo "Raw: " . $email . "<br>";
            $sanitize = filter_var($email, FILTER_SANITIZE_EMAIL);
            echo "Sanitized: " .$sanitize;
        ?>
    </body>
</html>