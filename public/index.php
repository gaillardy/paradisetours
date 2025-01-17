<?php


require __DIR__ . '/../autoload.php';

use App\Controllers\Router;
session_start();

$router = new Router();

$router->add('/', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    // Appeler le HomeController avec la langue
    $controller = new \App\Controllers\HomeController();
    $controller->index($lang);
});

$router->add('/nbpt-admin/?id={id}', function ($params) {
    
    $id = $params['id'];

    // if (!$id) {
    //     http_response_code(404);
    //     return;
    // }

    $controller = new \App\Controllers\AdminController();
    $controller->getContact($id);
});


$router->add('/nbpt-admin/contact', function () {
    
    $controller = new \App\Controllers\AdminController();
    $controller->contact();
});

$router->add('/nbpt-admin/logout', function () {
    
    $controller = new \App\Controllers\AdminController();
    $controller->logout();
});

$router->add('/nbpt-admin/dashboard', function () {
    
    $controller = new \App\Controllers\AdminController();
    $controller->index();
});

$router->add('/auth/authenticate', function () {
    
    $controller = new \App\Controllers\AuthController();
    $controller->login();
});

$router->add('/auth/login', function () {
    
    $controller = new \App\Controllers\AuthController;
    $controller->login();
});

$router->add('/nbpt-admin', function () {
    
    $controller = new \App\Controllers\AdminController;
    $controller->index();
});

$router->add('/{lang}/circuit/tour-meva', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->meva($lang);
});


$router->add('/{lang}/circuit/tour-salama', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->salama($lang);
});

$router->add('/{lang}/circuit/tour-fosa', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->fosa($lang);
});

$router->add('/{lang}/excursions/peche-au-gros', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->peche($lang);
});


$router->add('/{lang}/excursions/observation-des-baleines', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->baleine($lang);
});

$router->add('/{lang}/excursions/nosy-sakatia', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->sakatia($lang);
});

$router->add('/{lang}/excursions/perfume-tour', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->parfumTour($lang);
});

$router->add('/{lang}/excursions/reserve-de-lokobe', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->lokobe($lang);
});

$router->add('/{lang}/excursions/nosy-iranja', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->iranja($lang);
});


$router->add('/{lang}/excursions/nosy-komba-et-nosy-tanikely', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->komba($lang);
});


$router->add('/{lang}/a-propos', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\HomeController();
    $controller->about($lang);
});



$router->add('/{lang}/excursions/baie-des-russes', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->russe($lang);
});



$router->add('/{lang}/tours', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ToursController();
    $controller->index($lang);
});

$router->add('/{lang}/services', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\HomeController();
    $controller->service($lang);
});

$router->add('/{lang}/circuits', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->index($lang);
});


$router->add('/{lang}/guide', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\HomeController();
    $controller->guide($lang);
});


$router->add('/{lang}/contact/success', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ContactController();
    $controller->success($lang);
});



$router->add('/{lang}/excursions', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->index($lang);
});

$router->add('/nbpt-admin/sendnews', function () {
    
    $controller = new \App\Controllers\NewsletterController();
    $controller->sendnews();
});

$router->add('/nbpt-admin/newsletter', function () {
    
    $controller = new \App\Controllers\NewsletterController();
    $controller->newsForm();
});

$router->add('/subscribe', function () {
    
    $controller = new \App\Controllers\NewsletterController();
    $controller->subscribe();
});

$router->add('/{lang}/newsletter', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\NewsletterController();
    $controller->showForm($lang);
});


$router->add('/{lang}/home', function ($params) {
    $validLanguages = ['en', 'fr', 'it' , 'de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\HomeController();
    $controller->index($lang);
});




$router->add('/{lang}/contact', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ContactController();
    $controller->showForm($lang);
});

$router->add('/{lang}/sub', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ContactController();
    $controller->sendEmail($lang);
});




$requestUri = $_SERVER['REQUEST_URI'];

// Si l'URL est vide ou correspond au point d'entrée principale
if ($requestUri === '/' || $requestUri === '/index.php') {
    header("Location: /en/home");
    exit;
}

// Si l'URL ne correspond pas au format "/xx/" (où "xx" est une langue)
// if (!preg_match('#^/[a-z]{2}/#', $requestUri)) {
//     header("Location: /en/home");
//     exit;
// }



// Continuer avec le routeur ou le contrôleur
$router->dispatch();

// $router->handle($_SERVER['REQUEST_URI']);
