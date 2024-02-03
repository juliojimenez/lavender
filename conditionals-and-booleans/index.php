<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Conditionals and Booleans</title>
    <style>
        body {
            font-family: sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read = true;

    if ($read) {
        $message = "You have read \"$name\"";
    } else {
        $message = "You haven't read \"$name\"";
    }
    ?>

    <h1>
        <?= $message ?>
    </h1>
</body>

</html>