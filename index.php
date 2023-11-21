<?php 

$text = "Conosco la metà di voi solo a metà e nutro per meno della metà di voi la metà dell' affetto che meritate" ; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Badwords</title>
</head>
<body>
    <h1> PhP Badwords </h1>
    <p> <?php echo $text; ?> </p>
    <form action="badword.php" method="POST">
        <input type='text' name='bad_word' placeholder='Inserisci la bad word'>
        <button type='input'>Modifica</button>
    </form>

    <p>Il testo è lungo <?php echo strlen($text); ?> caratteri.</p>
</body>
</html>