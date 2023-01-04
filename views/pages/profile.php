<?php
    use App\Services\Page;

    session_start();
    if (!$_SESSION["user"]) {
        \App\Services\Router::redirect('/login');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php Page::part('head'); ?>
</head>
<body>
    <div class="wrapper">
        <?php Page::part('nav'); ?>

        <main class="main">
            <h2>Hi, <?= $_SESSION["user"]["full_name"] ?></h2>

        </main>

    </div>
</body>
</html>