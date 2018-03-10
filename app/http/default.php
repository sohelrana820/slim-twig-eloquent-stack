<?php

use App\Controller\AuthController;
use App\Controller\HomeController;

$app->get('/', HomeController::class . ':home');
$app->get('/signup', AuthController::class . ':signupPage');
$app->post('/signup', AuthController::class . ':signup');
$app->get('/login', AuthController::class . ':loginPage');
$app->post('/login', AuthController::class . ':login');
