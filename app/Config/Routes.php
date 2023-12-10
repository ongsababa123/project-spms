<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group("student/", function ($routes) {
    $routes->match(['get', 'post'], 'timelist', 'PageController::index_timelist_student');
    $routes->match(['get', 'post'], 'projectlist', 'PageController::index_projectlist');
    $routes->match(['get', 'post'], 'testlist', 'PageController::index_testlist');
});

$routes->group("teacher/", function ($routes) {
    $routes->match(['get', 'post'], 'timelist', 'PageController::index_timelist_teacher');
    $routes->match(['get', 'post'], 'submitpage', 'PageController::index_submitpage');
    $routes->match(['get', 'post'], 'progress', 'PageController::index_progress');
    $routes->match(['get', 'post'], 'scorepage', 'PageController::index_scorepage');
    $routes->match(['get', 'post'], 'testlist', 'PageController::index_testlist_teacher');

});

$routes->group("officer/", function ($routes) {
    $routes->match(['get', 'post'], 'testtime', 'PageController::index_testtime');
    $routes->match(['get', 'post'], 'historytest', 'PageController::index_history_test');
    $routes->match(['get', 'post'], 'request', 'PageController::index_project_request');
});

$routes->match(['get', 'post'], '/', 'PageController::index_home');
$routes->match(['get', 'post'], '/login', 'LoginController::index_login');
