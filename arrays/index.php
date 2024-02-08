<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Arrays</title>
    </head>
    <body>
        <h1>Recommended Books</h1>
        <?php
            $books = [
                "Do Androids Dream of Electric Sheep?",
                "The Langoliers",
                "Hail Mary"
            ];
        ?>
        <ul>
            <?php 
                foreach ($books as $book) {
                    echo "<li>{$book}™</li>";
                }
            ?>
        </ul>
        <h1>Recommended Books (shorthand)</h1>
        <ul>
            <?php foreach ($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
