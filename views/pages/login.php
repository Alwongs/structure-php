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
            <h2>Sign In</h2>
            <form action="" class="form">
                <div class="form__element">
                    <input type="email" name="email" placeholder="email adress">
                </div>
                <div class="form__element">
                    <input type="text" name="password" placeholder="password">
                </div>
                <button class="form__submit">Submit</button>
            </form>
        </main>

    </div>
</body>
</html>