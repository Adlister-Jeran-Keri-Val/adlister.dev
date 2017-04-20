<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once __DIR__ . '/../utils/Auth.php';
require_once __DIR__ . '/../utils/Input.php';
require_once __DIR__ . '/../utils/Log.php';

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
         // set default classname and placeholders for login inputs
        $data['inputClass'] = "form-group";
        $data['usernamePlaceholder'] = "Your user name";
        $data['background'] = "";
        // if(Auth::check()) {
        //     // header("Location: http://adlister.dev/login");
        //     die();
        // }
        // check if user submitted login form
        if(!empty($_POST)) {
            $username = Input::get("email_user");
            $password = Input::get("password");
            $log = new Log();
            if(Auth::attempt($username, $password)) {
                $log->info("$username logged in successfully. ");
                header("Location: http://adlister.dev/account");
                die();          
            } else {

                $log->info("$username failed to log in.");
                // send a message to the user that their username or password
                $data['inputClass'] = "form-group has-error";
                $data['usernamePlaceholder'] = "Username/email or password is incorrect";
                $data['background'] = "error";
                $data['username'] = $username;
            }
        } 
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
        case '/editshoe':  // TODO: put routes here
            $mainView = '../views/ads/edit.php';
            break;
        case '/browse':  // TODO: put routes here
            $mainView = '../views/ads/index.php';
            break;
        case '/show':  // TODO: put routes here
            $mainView = '../views/ads/show.php';
            break;
        case '/create':  // TODO: put routes here
            $mainView = '../views/ads/create.php';
            break;     
        default:   // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;

    }

    $data['mainView'] = $mainView;

    return $data;
}

extract(pageController());