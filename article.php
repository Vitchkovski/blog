<?php

require_once("database.php");
require_once("models/articles-functions.php");
//echo "Nothing";

$link = db_connect();
$article = article_get($link, $_GET['id']);

include("views/article-views.php")

?>