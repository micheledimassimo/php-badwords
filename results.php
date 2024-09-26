<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results Badword</title>
</head>
<body>
    <header>
        <h1>
            Results
        </h1>
    </header>
    <main>
        <div>
            <p>
                il testo è: <?php echo $_GET['parag']; ?>
                <br>
                la badWord è: <?php echo $_GET['bad-word']; ?>
                <br>
                <br>
                <?php
                $badWord = $_GET['bad-word'];
                $parag = $_GET['parag'];
                //conteggio stringa
                echo '<span> Il conteggio è:<span/>'.' '.strlen($parag);
                echo '<br>';
                echo '<br>';
                //cambio parola
                $newParag = str_replace($badWord, '***', $parag);
                echo $newParag;
                echo '<br>';
                
                
                echo '<br>';
                //nuovo coneggio
                echo '<strong> Il nuovo conteggio è:<strong/>'.' '.strlen($newParag);
                ?>
            </p>
        </div>
    </main>
</body>
</html>