<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php include 'templates/header.php'; ?>

        <?php include "authorsDB.php";?>
        <main>
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    Author deleted!
                </div>
            <?php endif; ?>
            <h1>Authors</h1>
            <button class="btn btn-create"><a href="createAuthor.php">Create</a></button>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($authors as $author): ?>
                        <tr>
                            <td><?php echo htmlentities($author['id'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></td>
                            <td><?php echo htmlentities($author['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></td>
                            <td>
                                <button class="btn btn-edit"><a href="editAuthor.php?id=<?php echo $author['id']; ?>">Edit</a></button>
                                <button class="btn btn-remove"><a href="removeAuthor.php?id=<?php echo $author['id']; ?>">Remove</a></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </body>
</html>