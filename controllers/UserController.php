<?php

function user_controller_index()
{
    require_once(MODEL_DIR . "/user.php");
    $data = user_select();
    return render("user/index.php", $data);
}

function user_controller_login()
{
    return render("user/login.php");
}

function user_controller_validation()
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:login.php');
    }

    require(CONNEX_DIR);
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($connex, $sql);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $dbPassword = $user['password'];

        if (password_verify($password, $dbPassword)) {
            session_regenerate_id();
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

            //print_r($_SESSION);
            header('location:?controller=article');
        } else {
            echo "error password";
        }
    } else {
        echo "error email";;
    }
}

function user_controller_create()
{
    return render("user/create.php");
}
function user_controller_store($request)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=user');
    }

    // print_r($request);
    // die();
    require_once(MODEL_DIR . "/user.php");
    $data = user_insert($request);
    header('location:?controller=user&function=show&id=' . $data);
}

function user_controller_show($request)
{
    $id = $request['id'];
    require_once(MODEL_DIR . "/user.php");
    $data = user_select_id($id);
    return render("user/show.php", $data);
}

function user_controller_edit($request)
{
    $id = $request['id'];
    require_once(MODEL_DIR . "/user.php");
    $user = user_select_id($id);
    $data =  $user;


    return render("user/edit.php", $data);
}

function user_controller_update($request)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=user');
    }
    require_once(MODEL_DIR . "/user.php");
    $data = user_update($request);
    if ($data) {
        header('location:?controller=user');
    } else {
        echo "error";
    }
}

function user_controller_delete($request)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=user');
    }
    $id = $request['id'];
    require_once(MODEL_DIR . "/user.php");
    $data = user_delete($id);
    if ($data) {
        header('location:?controller=user');
    } else {
        echo "error";
    }
}
