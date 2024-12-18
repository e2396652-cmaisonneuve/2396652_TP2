<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 - 2396652 - FORUM</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>

<body>
    <nav>
        <div><a href="index.php"><img src="resources/img/logo_college_maisonneuve.png" width="200px" alt=""></a></div>
        <div class="menu">

            <a href="?controller=user&function=login">Login</a>
            <a href="?controller=user&function=create">Create an account</a>
            <a href="?controller=article&function=create">Post an article</a>
        </div>
    </nav>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        © copyright mariana neri 2024
    </footer>
</body>

</html>