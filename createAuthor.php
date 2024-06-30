
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
    <?php include 'templates/header.php'; ?>
    <main>
        <div class="container">
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    Author created!
                </div>
            <?php endif; ?>

            <h1>Add new Author</h1>

            <form action="newAuthor.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
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
