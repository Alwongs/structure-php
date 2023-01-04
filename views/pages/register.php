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
            <h2>Sign Up</h2>
            <form action="/auth/register" class="form" method="post" enctype="multipart/form-data">
                <div class="form__element">
                    <input type="email" name="email" placeholder="email adress">
                </div>
                <div class="form__element">
                    <input type="text" name="username" placeholder="username">
                </div>
                <div class="form__element">
                    <input type="text" name="full_name" placeholder="full name">
                </div>
                <div class="form__element">
                    <input type="file" name="avatar">
                </div>
                <div class="form__element">
                    <input type="text" name="password" placeholder="password">
                </div>
                <div class="form__element">
                    <input type="text" name="password_confirm" placeholder="password confirmation">
                </div>
                <button class="form__submit">Submit</button>
            </form>
        </main>

    </div>
</body>
</html>