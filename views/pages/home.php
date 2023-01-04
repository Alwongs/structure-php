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
            <h2>Home</h2>

        </main>

    </div>
</body>
</html>