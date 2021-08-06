<?php
define('ROOT', __DIR__);
require_once ROOT . '/start-up.php';

route('/', function () {
    homePage();
});
route('/register', function () {
    registerPage();
});

header_html();
$action = $_SERVER['REQUEST_URI'];
view($action);
footer_html();
