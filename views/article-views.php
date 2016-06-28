<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>First Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Блог</h1>
        <div>
            <div class="articles">
                <h3><?=$article['title']?></h3>
                <em>Опубликованно: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
    
            </div>
        </div>
        <footer>
            <p>Myblog<br>Copyright &copy; 2016</p>
        </footer>
    </div>

</body>
</html>
