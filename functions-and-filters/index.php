<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Associative Arrays</title>
    </head>
    <body>
        <?php $books = [
                [
                    "name" => "Do Androids Dream of Electric Sheep?",
                    "author" => "Phillip K. Dick",
                    "releaseYear" => 1968,
                    "purchaseUrl" => "https://example.com",
                ],
                [
                    "name" => "Project Hail Mary",
                    "author" => "Andy Weir",
                    "releaseYear" => 2021,
                    "purchaseUrl" => "https://example.com",
                ],
                [
                    "name" => "The Martian",
                    "author" => "Andy Weir",
                    "releaseYear" => 2011,
                    "purchaseUrl" => "https://example.com",
                ],
            ];
            
            function filterByAuthor($books, $author) {
                $filteredBooks = [];
                foreach ($books as $book) {
                    if ($book["author"] === $author) {
                        $filteredBooks[] = $book;
                    }
                }
                return $filteredBooks;
            }
        ?>
        <h1>Recommended Books (shorthand)</h1>
        <ul>
            <?php foreach (filterByAuthor($books, "Andy Weir") as $book): ?>
                <li>
                    <a href="<?= $book["purchaseUrl"] ?>" target="_blank">
                        <?= $book["name"] ?>
                    </a> by <?= $book["author"] ?> (<?= $book["releaseYear"] ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
