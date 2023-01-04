<nav class="nav">
    <a href="/" class="nav__logo">Logo</a>
    <ul class="nav__list">
        <li class="nav__item"><a href="/">home</a></li>

        <?php
            if (!$_SESSION["user"]) {
        ?>
            <li class="nav__item"><a href="login">login</a></li>
            <li class="nav__item"><a href="register">register</a></li>
        <?php
            } else {
        ?>
            <li class="nav__item"><a href="login">profile</a></li>
            <li class="nav__item"><a href="logout">logout</a></li>
        <?php } ?>
    </ul>
</nav>