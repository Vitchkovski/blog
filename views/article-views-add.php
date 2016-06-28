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
            <form method="post" action="../admin/index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                Title
                <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
            </label><br>
                <label>
                Date
                <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
            </label><br>
                <label>
                Article
                  <textarea class="form-item" name="content"  required><?=$article['content']?></textarea>
            </label><br>
                <input type="submit" value="Save" class="btn">
            </form>
        </div>

        <footer>
            <p>Myblog<br>Copyright &copy; 2016<br>
                <a href="../admin">Панель управления</a></p>
        </footer>
    </div>

</body>

</html>
