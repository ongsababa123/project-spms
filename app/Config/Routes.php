<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group("student/", ['filter' => ['AuthGuard']], function ($routes) {
    $routes->match(['get', 'post'], 'timelist', 'PageController::index_timelist_student');

    $routes->match(['get', 'post'], 'projectlist', 'PageController::index_projectlist');
    $routes->match(['get', 'post'], 'projectlist/create/tk01', 'ProjectController::create_project_tk01');

    $routes->match(['get', 'post'], 'testlist', 'PageController::index_testlist');
});

$routes->group("teacher/", ['filter' => ['AuthGuard']], function ($routes) {
    $routes->match(['get', 'post'], 'timelist', 'PageController::index_timelist_teacher');
    $routes->match(['get', 'post'], 'submitpage', 'PageController::index_submitpage');
    $routes->match(['get', 'post'], 'progress', 'PageController::index_progress');
    $routes->match(['get', 'post'], 'scorepage', 'PageController::index_scorepage');
    $routes->match(['get', 'post'], 'testlist', 'PageController::index_testlist_teacher');

});

$routes->group("officer/", ['filter' => ['AuthGuard']], function ($routes) {
    $routes->match(['get', 'post'], 'testtime', 'PageController::index_testtime');
    $routes->match(['get', 'post'], 'historytest', 'PageController::index_history_test');
    $routes->match(['get', 'post'], 'request', 'PageController::index_project_request');

    $routes->match(['get', 'post'], 'news', 'PageController::index_news_table');
    $routes->match(['get', 'post'], 'news/create', 'NewsController::create_news');
    $routes->match(['get', 'post'], 'news/changestatus/(:num)/(:num)', 'NewsController::change_status_new/$1/$2');
    $routes->match(['get', 'post'], 'news/getdata', 'NewsController::get_data_table_news');
});

$routes->group("admin/", ['filter' => ['AuthGuard']], function ($routes) {
    $routes->match(['get', 'post'], 'studentlist', 'PageController::index_student_table');
    $routes->match(['get', 'post'], 'teacherlist', 'PageController::index_teacher_table');
    $routes->match(['get', 'post'], 'officerlist', 'PageController::index_officer_table');
    $routes->match(['get', 'post'], 'adminlist', 'PageController::index_admin_table');

    $routes->match(['get', 'post'], 'user/create/(:num)', 'UserController::create_user/$1');
    $routes->match(['get', 'post'], 'user/update/(:num)', 'UserController::edit_user/$1');
    $routes->match(['get', 'post'], 'user/getdata/(:num)', 'UserController::get_data_table_user/$1');
});

$routes->match(['get', 'post'], '/', 'PageController::index_home');
$routes->match(['get', 'post'], '/login', 'LoginController::index_login');
$routes->match(['get', 'post'], '/login/auth', 'LoginController::loginAuth');
$routes->match(['get', 'post'], '/logout', 'LoginController::logout');

