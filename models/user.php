<?php

function user_select()
{
    require(CONNEX_DIR);
    $sql = "SELECT * FROM user ORDER BY name";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function user_insert($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    $sql = "INSERT INTO user (name, email, password, birthday) values ('$name', '$email', '$password', '$birthday')";
    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return false;
    }
}

function user_select_id($id)
{
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT * FROM user WHERE user.id = '$id'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $result;
}

function user_update($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE user SET name='$name', email='$email', password='$password', birthday='$birthday' WHERE id='$id'";
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}


function user_delete($id)
{
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "DELETE FROM user WHERE id='$id'";
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}
