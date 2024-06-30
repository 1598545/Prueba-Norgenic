<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="styles.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    </head>
    <body>
    <?php include 'templates/header.php'; ?>

    <?php include "booksDB.php";?>
        <main>
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    Book deleted!
                </div>
            <?php endif; ?>
            <h1>Books</h1>
            <button class="btn btn-create"><a href="createBook.php">Create</a></button>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?php echo htmlentities($book['id'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></td>
                        <td><?php echo htmlentities($book['title'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></td>
                        <td><?php echo htmlentities($book['author'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></td>
                        <td>
                            <button class="btn btn-edit"><a href="editBook.php?id=<?php echo $book['id']; ?>">Edit</a></button>
                            <button class="btn btn-remove"><a href="removeBook.php?id=<?php echo $book['id']; ?>">Remove</a></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </body>
</html>