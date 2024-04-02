<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Associative Arrays</title>
    </head>
    <body>
        <h1>Recommended Books (shorthand)</h1>
        <ul>
            <?php foreach ($php_filteredBooks as $book): ?>
                <li>
                    <a href="<?= $book["purchaseUrl"] ?>" target="_blank">
                        <?= $book["name"] ?>
                    </a> by <?= $book["author"] ?> (<?= $book["releaseYear"] ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
