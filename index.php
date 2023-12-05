<?php

if (isset($_POST['about'])) {
    header("Location: about.php");
}

if (isset($_POST['admin'])) {
    header("Location: admin.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
<body style="background-color:cyan;">
    <title>index</title>
    </head>

    <body>
        <div class="container">

            <div class="welcome">
                <h1>Welcome to my library managment system</h1>
            </div>

            <div class="search-bar">
                <label for="booklist" class="form-label">Search for books...</label>
                <input class="form-control" list="datalistOptions" id="booklist" placeholder="Type to search...">
                <datalist id="datalistOptions">

                </datalist>

            </div>

        </div>

        <footer class="bg-info text-center text-lg-start fixed-bottom">

            <div class="row justify-content-between">
                <div class="col-auto">
                    <form action="about.php" method="post">
                        <button type="submit" class="btn btn-link" name="about">About</button>
                    </form>
                </div>
                <div class="col-auto">
                    <form action="admin.php" method="post">
                        <button type="submit" class="btn btn-link" name="admin">Admin</button>
                    </form>
                </div>
            </div>

        </footer>
    </body>

</html>