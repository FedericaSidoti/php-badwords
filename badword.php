<?php
$bad_word = $_POST['bad_word']; 
$text = "Conosco la metà di voi solo a metà e nutro per meno della metà di voi la metà dell' affetto che meritate" ; 
$censored_text = str_replace($bad_word, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Badwords Result</title>
</head>
<body>
    <h1>Results</h1>
    <p> <?php echo $text; ?> </p>
    <p>Il testo originale è lungo <?php echo strlen($text); ?> caratteri.</p>
    <p> <?php echo $censored_text ?> </p>
    <p>Il testo modificato è lungo <?php echo strlen($censored_text) ?> caratteri </p>
</body>
</html>