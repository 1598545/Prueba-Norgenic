<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="styles.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    </head>

    <?php include 'templates/header.php';
    include "authorsDB.php";

    if (isset($_GET['id'])) {
        $author_id = $_GET['id'];

        $sql = "SELECT * FROM authors WHERE id='$author_id'";
        $res = mysqli_query($conn, $sql);
        $author = mysqli_fetch_assoc($res);
    }
    ?>
    <body>
    <main>
        <div class="container">
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    Author edited!
                </div>
            <?php endif; ?>

            <h1>Edit Author</h1>

            <form action="authorEdit.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="hidden" name="id" value="<?php echo isset($author['id']) ? $author['id'] : ''; ?>">
                    <br><input type="text" name="name" class="form-control" value="">
                    <?php if (isset($_GET['error'])): ?>
                        <div class="invalid-feedback">The name field is required.</div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    </body>
</html>
