<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Main Blog page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Блог</h1>
        <div>
           <?php foreach($articles as $a): ?> 
                <div class="articles">
                    <h3> <a href="article.php?id=<?=$a['id']?>">
                <?=$a['title']?> </a> </h3>
                    <em> Опубликованно: <?=$a['date']?></em>
                    <!--<p> <?=$a['content']?> </p>-->
                </div>
        <?php endforeach ?>

        </div>
        
        <footer>
            <p>Myblog<br>Copyright &copy; 2016<br>
            <a href="admin">Панель управления</a></p>
        </footer>
    </div>

</body>

</html>
