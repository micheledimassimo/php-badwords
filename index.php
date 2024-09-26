<?php
    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis harum culpa dicta cumque reprehenderit dolores similique. Laborum quibusdam dolorem praesentium esse eos fugiat! Distinctio commodi laudantium dolores saepe? Tempora, excepturi.";
    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP BAdwords</title>
        <link rel="stylesheet" href="./css/12bool.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header> <!--header-->
            <h1>
                PHP Badwords
            </h1>
        </header>

        <main> <!--main-->

            <form action="./results.php" method="GET">

                <textarea name="parag" value="lorem">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, perspiciatis officiis! Optio nam veritatis exercitationem, natus ut obcaecati praesentium officiis hic accusamus blanditiis voluptates non aut! Fugit iure delectus excepturi!
                </textarea>
                <br>
                <input type="text" name="bad-word" value="">
                    
                <button type="submit">
                    invia
                </button>
            </form>

        </main>
    </body>
</html>