<?php

require_once("../database.php");
require_once("../models/articles-functions.php");

$link=db_connect();

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action="";

if (!isset($deleted_flag))
    $deleted_flag = 0;

if ($deleted_flag == 1)
    echo "deleted";

echo "$deleted_flag";

if ($action =="add"){
    if (!empty($_POST)){
        article_new($link,$_POST['title'], $_POST['date'], $_POST['content']);
        header("Location: index.php");
    }
    $article['title']='';
    $article['date']='';
    $article['content']='';
    include("../views/article-views-add.php");
    }else if($action=="edit"){
    if(!isset($_GET['id']))
        header("Location: index.php");
    $id = (int)$_GET['id'];
    if(!empty($_POST) && $id>0){
        article_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
        header("Location: index.php");
    }
    $article = article_get($link, $id);
   include("../views/article-views-add.php");
}else if ($action=="delete"){
    $id = (int)$_GET['id'];
    article_delete($link, $id);
    
    header("Location: index.php");
    $deleted_flag = 1;
    
}

else{

$articles = articles_all($link);

include("../views/articles-views-admin.php");
}
?>
