<?php

function article_controller_index()
{
    require_once(MODEL_DIR . "/article.php");
    $data = article_select();
    return render("article/index.php", $data);
}
function article_controller_create()
{
    return render("article/create.php");
}

function article_controller_store($request)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=article');
    }
    require_once(MODEL_DIR . "/article.php");
    $data = article_insert($request);
    header('location:?controller=article&function=show&id=' . $data);
}

function article_controller_show($request)
{
    $id = $request['id'];
    require_once(MODEL_DIR . "/article.php");
    $data = article_select_id($id);
    return render("article/show.php", $data);
}

function article_controller_edit($request)
{
    $id = $request['id'];
    require_once(MODEL_DIR . "/article.php");
    $article = article_select_id($id);
    $data =  $article;


    return render("article/edit.php", $data);
}

function article_controller_update($request)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=article');
    }
    require_once(MODEL_DIR . "/article.php");
    $data = article_update($request);
    if ($data) {
        header('location:?controller=article');
    } else {
        echo "error";
    }
}

function article_controller_delete($request)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=article');
    }
    $id = $request['id'];
    require_once(MODEL_DIR . "/article.php");
    $data = article_delete($id);
    if ($data) {
        header('location:?controller=article');
    } else {
        echo "error";
    }
}
