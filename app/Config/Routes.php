<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group("/home/student/", function ($routes) {
    $routes->match(['get', 'post'], 'index', 'HomeController::index_student');
});

$routes->group("/home/teacher/", function ($routes) {
    $routes->match(['get', 'post'], 'index', 'HomeController::index_teacher');
    $routes->match(['get', 'post'], 'confirmation', 'ConfirmationController::index_confirmation');
    $routes->match(['get', 'post'], 'progress', 'ProgressController::index_progress');
    $routes->match(['get', 'post'], 'scoresubmit', 'ScoresubmitController::index_scoresubmit');
});

$routes->group("/home/officer/", function ($routes) {
    $routes->match(['get', 'post'], 'index', 'HomeController::index_officer');
});


$routes->match(['get', 'post'], '/timelist', 'TimelistController::index_time');
$routes->match(['get', 'post'], '/', 'TimelistController::index_time');
