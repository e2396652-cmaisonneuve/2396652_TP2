<?php

function article_select()
{
    require(CONNEX_DIR);
    $sql = "SELECT * FROM forum ORDER BY title";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function article_insert($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "INSERT INTO forum (title, article, date) values ('$title', '$article', '$date')";
    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return false;
    }
}

function article_select_id($id)
{
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT * FROM forum WHERE forum.id = '$id'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $result;
}

function article_update($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE forum SET title='$title', article='$article', date='$date' WHERE id='$id'";
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}


function article_delete($id)
{
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "DELETE FROM forum WHERE id='$id'";
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}
