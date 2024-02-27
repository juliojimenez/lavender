<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Associative Arrays</title>
    </head>
    <body>
        <?php
            $books = [
                [
                    "name" => "Do Androids Dream of Electric Sheep?", 
                    "author" => "Phillip K. Dick", 
                    "purchaseUrl" => "https://example.com"
                ],
                [
                    "name" => "Project Hail Mary", 
                    "author" => "Andy Weir",
                    "purchaseUrl" => "https://example.com"
                ]
            ];
        ?>
        <h1>Recommended Books (shorthand)</h1>
        <ul>
            <?php foreach ($books as $book) : ?>
                <li>
                    <a href="<?= $book["purchaseUrl"] ?>" target="_blank"><?= $book["name"] ?></a> by <?= $book["author"] ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
