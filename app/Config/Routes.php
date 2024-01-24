<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group("student/", ['filter' => ['AuthGuard', 'Check_student']], function ($routes) {
    $routes->match(['get', 'post'], 'timelist', 'PageController::index_timelist_student');
    $routes->match(['get', 'post'], 'timelist/create/(:num)', 'TimelistContoller::create_timelist/$1');
    $routes->match(['get', 'post'], 'timelist/getdata/(:num)', 'TimelistContoller::get_data_time/$1');

    $routes->match(['get', 'post'], 'projectlist', 'PageController::index_projectlist');
    $routes->match(['get', 'post'], 'projectlist/cancelproject/(:num)', 'ProjectController::cancel_project/$1');
    $routes->match(['get', 'post'], 'projectlist/create/tk01', 'ProjectController::create_project_tk01');
    $routes->match(['get', 'post'], 'projectlist/edit/tk01/(:num)/(:num)/(:num)', 'ProjectController::edit_project_tk01/$1/$2/$3');

    $routes->match(['get', 'post'], 'projectlist/create/tk02/(:num)', 'ProjectController::create_project_tk02/$1');
    $routes->match(['get', 'post'], 'projectlist/edit/tk02/(:num)/(:num)/(:any)', 'ProjectController::edit_project_tk02/$1/$2/$3');

    $routes->match(['get', 'post'], 'projectlist/create/tk03/(:num)', 'ProjectController::create_project_tk03/$1');
    $routes->match(['get', 'post'], 'projectlist/edit/tk03/(:num)/(:num)/(:any)', 'ProjectController::edit_project_tk03/$1/$2/$3');

    $routes->match(['get', 'post'], 'projectlist/create/tk04/(:num)', 'ProjectController::create_project_tk04/$1');
    $routes->match(['get', 'post'], 'projectlist/edit/tk04/(:num)', 'ProjectController::edit_project_tk04/$1');

    $routes->match(['get', 'post'], 'projectlist/create/tk05/(:num)', 'ProjectController::create_project_tk05/$1');
    $routes->match(['get', 'post'], 'projectlist/edit/tk05/(:num)/(:num)/(:any)', 'ProjectController::edit_project_tk05/$1/$2/$3');

    $routes->match(['get', 'post'], 'projectlist/getdata', 'ProjectController::get_data_table_project');
    $routes->match(['get', 'post'], 'projectlist/getdata/tk/(:num)', 'ProjectController::get_data_default/$1');

    $routes->match(['get', 'post'], 'exdocument', 'PageController::index_ex_document');

    $routes->match(['get', 'post'], 'testlist', 'PageController::index_testlist');
    $routes->match(['get', 'post'], 'testlist/getdata/(:num)', 'TESTController::get_data_test_type_student/$1');

    $routes->match(['get', 'post'], 'scorepage/(:num)/(:num)', 'ScoreController::index_scorepage/$1/$2');
});

$routes->group("teacher/", ['filter' => ['AuthGuard', 'Check_teacher']], function ($routes) {
    $routes->match(['get', 'post'], 'timelist', 'PageController::index_timelist_teacher');
    $routes->match(['get', 'post'], 'timelist/create', 'TimelistContoller::create_timelist_teacher');
    $routes->match(['get', 'post'], 'timelist/getdata', 'TimelistContoller::get_data_time_teacher');

    $routes->match(['get', 'post'], 'submitpage', 'PageController::index_submitpage');
    $routes->match(['get', 'post'], 'submitpage/changestatus/tk/(:num)/(:num)/(:num)', 'ProjectController::changestatus_request/$1/$2/$3');

    $routes->match(['get', 'post'], 'progress', 'PageController::index_progress');
    $routes->match(['get', 'post'], 'progress/getdata/(:num)', 'ProjectController::get_data_table_project_teacher/$1');
    $routes->match(['get', 'post'], 'progress/changestatus/tk/(:num)/(:num)/(:num)', 'ProjectController::changestatus_request/$1/$2/$3');
    $routes->match(['get', 'post'], 'progress/changestatus/file/(:num)/(:num)/(:num)', 'FileController::change_status/$1/$2/$3');

    $routes->match(['get', 'post'], 'scorepage', 'PageController::index_scorepage');
    $routes->match(['get', 'post'], 'scorepage/(:num)/(:num)/(:num)', 'ScoreController::index_scorepage/$1/$2/$3');
    $routes->match(['get', 'post'], 'scorepage/create/(:num)/(:num)/(:num)', 'ScoreController::create_scorepage/$1/$2/$3');
    $routes->match(['get', 'post'], 'scorepage/update/(:num)/(:num)/(:num)/(:num)', 'ScoreController::update_scorepage/$1/$2/$3/$4');


    $routes->match(['get', 'post'], 'testlist', 'PageController::index_testlist_teacher');
    $routes->match(['get', 'post'], 'testlist/getdata/(:num)', 'TESTController::get_data_test_type_teacher/$1');
    $routes->match(['get', 'post'], 'testlist/changestatus/(:num)/(:num)/(:num)', 'TESTController::change_status/$1/$2/$3');

});

$routes->group("officer/", ['filter' => ['AuthGuard', 'Check_officer']], function ($routes) {
    $routes->match(['get', 'post'], 'testtime', 'PageController::index_testtime');
    $routes->match(['get', 'post'], 'testtime/create', 'TESTController::create_test');

    $routes->match(['get', 'post'], 'historytest', 'PageController::index_history_test');
    $routes->match(['get', 'post'], 'historytest/delete/(:num)', 'TESTController::delete_test/$1');
    $routes->match(['get', 'post'], 'historytest/getdata/type/(:any)/(:num)/(:num)', 'TESTController::get_data_test_type1/$1/$2/$3');

    $routes->match(['get', 'post'], 'request', 'PageController::index_project_request');
    $routes->match(['get', 'post'], 'request/changestatus/tk/(:num)/(:num)/(:num)', 'ProjectController::changestatus_request/$1/$2/$3');


    $routes->match(['get', 'post'], 'news', 'PageController::index_news_table');
    $routes->match(['get', 'post'], 'news/create', 'NewsController::create_news');
    $routes->match(['get', 'post'], 'news/changestatus/(:num)/(:num)', 'NewsController::change_status_new/$1/$2');
    $routes->match(['get', 'post'], 'news/getdata', 'NewsController::get_data_table_news');

    $routes->match(['get', 'post'], 'docex', 'PageController::index_docex_table');
    $routes->match(['get', 'post'], 'docex/create', 'File_EXController::create_file_ex');
    $routes->match(['get', 'post'], 'docex/openfile/(:num)', 'File_EXController::openfile_EX/$1');

    $routes->match(['get', 'post'], 'scorepage/(:num)/(:num)', 'ScoreController::index_scorepage/$1/$2');
});

$routes->group("admin/", ['filter' => ['AuthGuard', 'Check_admin']], function ($routes) {
    $routes->match(['get', 'post'], 'studentlist', 'PageController::index_student_table');
    $routes->match(['get', 'post'], 'teacherlist', 'PageController::index_teacher_table');
    $routes->match(['get', 'post'], 'officerlist', 'PageController::index_officer_table');
    $routes->match(['get', 'post'], 'adminlist', 'PageController::index_admin_table');

    $routes->match(['get', 'post'], 'user/create/(:num)', 'UserController::create_user/$1');
    $routes->match(['get', 'post'], 'user/update/(:num)', 'UserController::edit_user/$1');
    $routes->match(['get', 'post'], 'user/getdata/(:num)', 'UserController::get_data_table_user/$1');
});

$routes->match(['get', 'post'], '/', 'PageController::index_home', ['filter' => ['AuthGuard']]);
$routes->match(['get', 'post'], '/login', 'LoginController::index_login');

$routes->match(['get', 'post'], '/login/first/(:num)', 'LoginController::index_login_first/$1');
$routes->match(['get', 'post'], '/login/first/auth/(:num)', 'LoginController::first_login/$1');

$routes->match(['get', 'post'], '/login/forgotpassword', 'LoginController::index_login_forgotpassword');
$routes->match(['get', 'post'], '/login/forgotpassword/auth', 'LoginController::forgot_password');

$routes->match(['get', 'post'], '/login/auth', 'LoginController::loginAuth');
$routes->match(['get', 'post'], '/logout', 'LoginController::logout');
$routes->match(['get', 'post'], '/openfile/(:num)', 'FileController::openfile/$1');

