
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="styles.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    </head>
    <body>
    <?php
    include 'templates/header.php';
    include 'authorsDB.php';
    ?>
    <main>
        <div class="container">
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    Book added!
                </div>
            <?php endif; ?>

            <h1>Add new Book</h1>

            <form action="newBook.php" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <br><input type="text" name="title" class="form-control" value="">
                    <?php if (isset($_GET['error1'])): ?>
                        <div class="invalid-feedback">The title field is required.</div>
                    <?php endif; ?>
                    <br><br>
                    <label for="author">Author</label>
                    <br><select name="author" class="form-control">
                        <option value="0">Select author</option>
                        <?php foreach ($authors as $author): ?>
                            <option value="<?php echo $author['id'] ?>"><?php echo htmlentities($author['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></option>
                        <?php endforeach; ?>
                    </select>

                    <?php if (isset($_GET['error2'])): ?>
                        <div class="invalid-feedback">The selected author id is invalid.</div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    </body>
</html>
