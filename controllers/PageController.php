<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/':  // TODO: put routes here
            $mainView = '../views/home.php';
            break;
        case '/login':  // TODO: put routes here
            $mainView = '../views/users/login.php';
            break;
        case '/account':  // TODO: put routes here
            $mainView = '../views/users/account.php';
            break;
        case '/signup':  // TODO: put routes here
            $mainView = '../views/users/signup.php';
            break;
        case '/edit':  // TODO: put routes here
            $mainView = '../views/users/edit.php';
            break;
        case '/items':  // TODO: put routes here
            $mainView = '../views/ads/index.php';
            break;
        default:   // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;

    }

    $data['mainView'] = $mainView;

    return $data;
}

extract(pageController());