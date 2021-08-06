<?php

$route = [];

function route($action, $callback)
{
    global $route;
    $action = trim($action, '/');
    $route[$action] = $callback;
}

function view($action)
{
    global $route;
    $action = trim($action, '/');
    $callback = $route[$action];
    echo call_user_func($callback);
}
