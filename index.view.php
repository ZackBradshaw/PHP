<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: block;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: serif;
        }
    </style>
</head>
<body>

    <h1>Recommended Books</h1>
        <?php foreach ($filteredBooks as $book): ?>
    <ul>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?=$book['releaseDate'] ?>) -By <?= $book['author'] ?>
            </a>
        </li>
    </ul>
        <?php endforeach; ?>
    
</body>

</html>
