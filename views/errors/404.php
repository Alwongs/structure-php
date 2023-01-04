<?php
    use App\Services\Page;
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
        <h1>404 - page not found</h1>
        </main>
    </div>
</body>
</html>