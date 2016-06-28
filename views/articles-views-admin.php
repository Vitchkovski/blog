<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Main Blog page</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Блог</h1>
        <div>
            <a href="../admin/index.php?action=add">New article.</a>
            <table class="admin-table">
                <tr>
                    <th>Date</th>
                    <th>Header</th>
                    <th></th>
                    <th></th>
                </tr>
                
                <?php foreach($articles as $a): ?> 
                <tr>
                    <th><em><?=$a['date']?></em></th>
                    <th><a href="../article.php?id=<?=$a['id']?>">
                <?=$a['title']?> </a> </th>
                    <!--<p> <?=$a['content']?> </p>-->
                    <th><a href="../admin/index.php?action=edit&id=<?=$a['id']?>">Edit</a></th>
                    <th><a href="../admin/index.php?action=delete&id=<?=$a['id']?>">Delete</a></th>
                    <th></th>
                </tr>
        <?php endforeach ?>
            </table>
            
      </div>
        
        <footer>
            <p>Myblog<br>Copyright &copy; 2016<br>
            <a href="../admin">Панель управления</a></p>
        </footer>
    </div>

</body>

</html>
