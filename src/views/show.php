<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $recipe['title'] ?></title>
    </head>
    <body>
        <a href="/">Home</a>
        <h1><?= $recipe['title'] ?></h1>

        <div>
            <?= $recipe['description'] ?>
        </div>

        <a href="/edit?id=<?= $recipe['id'] ?>">Edit</a>
        <form action="/delete?id=<?= $recipe['id'] ?>" method="POST">
            <button>Delete</button>
        </form>
    </body>
</html>
