<?php
require_once 'vendor/autoload.php';
use Hcode\DB\Sql;
$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function(){

    $sql = new Hcode\DB\Sql();
    $resuts = $sql->select("SELECT * FROM tb_users");
    echo json_encode($resuts);
});

$app->run();