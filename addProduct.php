<?php
    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Junior Test - Mihalyczo jorge</title>
</head>
<body>
    <header>
        <h1>Product Add</h1>
        <nav>
            <a href="addProduct.php" class="btn">Save</a>
            <a class="btn">Cancel</a>
        </nav>
    </header>
    <main>
        <div class="formContainer">
            <?php include "form.html"; ?>
        </div>
    </main>
    <footer>
        <h3>Scandiweb Test assignment</h3>
    </footer>
</body>
</html>
</html>