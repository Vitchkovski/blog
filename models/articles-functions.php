<?php

function articles_all($link){
    
    $query = "SELECT * from articles order by id desc";
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $articles = array();
    
    for ($i = 0; $i < $n; $i++)
    {
        $row = mysqli_fetch_assoc($result);
        $articles[]=$row;
    }
    
    return $articles;
    
       
}

function article_get($link, $id){
    $query = sprintf("select * from articles where id = %d", $id);
    $result = mysqli_query($link,$query);
    
    if (!$result)
        die (mysqli_error($link));
    
    $article = mysqli_fetch_assoc($result);
    
    return $article;
    
}

function article_new($link, $title, $date, $content){
    $title = trim($title);
    $content = trim($content);
        
        $insert = "insert into articles (title, date, content) values ('%s', '%s', '%s')";
    
    $query = sprintf($insert, mysqli_real_escape_string($link, $title),  mysqli_real_escape_string($link, $date),  mysqli_real_escape_string($link, $content));
    
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die (mysqli_error($link));
    return true;
    
}

function article_edit($link, $id, $title, $date, $content){
    
    $title = trim($title);
    $content = trim($content);
        
        $update = "update articles set title='%s', date='%s', content='%s' where id=%d";
    
    $query = sprintf($update, mysqli_real_escape_string($link, $title),  mysqli_real_escape_string($link, $date),  mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $id));
    
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die (mysqli_error($link));
    return true;
    
}

function article_delete($link, $id){
    
    $delete = "delete from articles where id=%d";
    $query = sprintf($delete,mysqli_real_escape_string($link, $id));
    $result = mysqli_query($link, $query);
    
    
    
    if (!$result)
        die (mysqli_error($link));
    return true;
}

?>