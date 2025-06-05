<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <img src="/images/logo.png" alt="Логотип">
        <nav>
            <a href="/">Главная</a>
            <a href="/about">О нас</a>
            <a href="/contact">Контакты</a>
            <a href="/dream">Мечты</a>
            <a href="/offer">Предложения</a>
        </nav>
    </header>
    <main>
        <?php echo $content ?>
    </main>
    <footer>
        © 2025 Мой сайт
    </footer>
</body>
</html>
