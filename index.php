<?php

require_once("database.php");
require_once("models/articles-functions.php");

//echo "index php";

$link = db_connect();
$articles = articles_all($link);

include("views/articles-views.php");

?>
