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



$router->add('/nbpt-admin/send-box/{id}', function ($params) {

    $id = $params['id'];

    $controller = new \App\Controllers\AdminController();
    $controller->SingleSendBox($id);
});

$router->add('/nbpt-admin/send-box', function () {

    $controller = new \App\Controllers\AdminController();
    $controller->sendbox();
});

$router->add('/nbpt-admin/send-new-message', function () {

    $controller = new \App\Controllers\AdminController();
    $controller->sendEmailAdmin();
});


$router->add('/nbpt-admin/new-message', function () {

    $controller = new \App\Controllers\AdminController();
    $controller->newMessage();
});

$router->add('/nbpt-admin/sendbox/transfer/{id}', function ($params) {
    $id = $params['id'];
    $controller = new \App\Controllers\AdminController();
    $controller->actionTransferSendbox($id);
});

$router->add('/nbpt-admin/inbox/transfer/{id}', function ($params) {
    $id = $params['id'];
    $controller = new \App\Controllers\AdminController();
    $controller->actionTransfer($id);
});

$router->add('/nbpt-admin/inbox/response/{id}', function ($params) {
    $id = $params['id'];
    $controller = new \App\Controllers\AdminController();
    $controller->actionReponse($id);
});

$router->add('/nbpt-admin/user/set-new-password/{id}', function ($params) {
    $id = $params['id'];
    $controller = new \App\Controllers\AdminController();
    $controller->editPassword($id);
});


$router->add('/nbpt-admin/user/set-password/{id}', function ($params) {
    $id = $params['id'];

    $controller = new \App\Controllers\AdminController();
    $controller->setPassword($id);
});


$router->add('/nbpt-admin/add-account', function () {
    $controller = new \App\Controllers\AdminController();
    $controller->actionCreateUser();
});

$router->add('/nbpt-admin/add-user', function () {
    $controller = new \App\Controllers\AdminController();
    $controller->createAccount();
});

$router->add('/nbpt-admin/user/{id}', function ($params) {
    $id = $params['id'];
    $controller = new \App\Controllers\AdminController();
    $controller->getSingleAccount($id);
});

$router->add('/nbpt-admin/profile', function () {
    $controller = new \App\Controllers\AdminController();
    $controller->getProfile();
});


$router->add('/nbpt-admin/compte/edit/{id}', function ($params) {

    $id = $params['id'];

    $controller = new \App\Controllers\AdminController();
    $controller->updateAccount($id);
});

$router->add('/nbpt-admin/analytique', function () {

    $controller = new \App\Controllers\AdminController();
    $controller->analytique();
});

$router->add('/nbpt-admin/comptes', function () {

    $controller = new \App\Controllers\AdminController();
    $controller->getAllAccount();
});

$router->add('/nbpt-admin/send-box/delete/{id}', function ($params) {
    $id = $params['id'];

    $controller = new \App\Controllers\AdminController();
    $controller->deleteSendBoxAction($id);
});

$router->add('/nbpt-admin/inbox/delete/{id}', function ($params) {
    $id = $params['id'];

    $controller = new \App\Controllers\AdminController();
    $controller->deleteContactAction($id);
});

$router->add('/nbpt-admin/inbox/view/{id}', function ($params) {
    error_log("Route callback invoked with params: " . print_r($params, true));

    $id = $params['id'];
    $controller = new \App\Controllers\AdminController();
    $controller->updateViewInbox($id);
});



$router->add('/nbpt-admin/inbox/{id}', function ($params) {
    error_log("Route callback invoked with params: " . print_r($params, true));

    $id = $params['id'];
    $controller = new \App\Controllers\AdminController();
    $controller->getContact($id);
});




$router->add('/nbpt-admin/inbox', function () {
    
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

$router->add('/{lang}/decouverte', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->decouverte($lang);
});

$router->add('/{lang}/tourisme-vert', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->vert($lang);
});


$router->add('/{lang}/nature-pack', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->nature($lang);
});

$router->add('/{lang}/circuit/tour-tsarabe', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->tsarabe($lang);
});


$router->add('/{lang}/circuit/parc-isalo', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->isalo($lang);
});

$router->add('/{lang}/circuit/parc-ambre', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->ambre($lang);
});


$router->add('/{lang}/circuit/parc-mantadia', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->mantadia($lang);
});


$router->add('/{lang}/circuit/parc-marojejy', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->marojejy($lang);
});

$router->add('/{lang}/circuit/parc-zombitse', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->zombitse($lang);
});


$router->add('/{lang}/circuit/parc-ankarafantsika', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->ankarafantsika($lang);
});


$router->add('/{lang}/circuit/parc-bemaraha', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->bemaraha($lang);
});


$router->add('/{lang}/circuit/parc-ankarana', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->ankarana($lang);
});

$router->add('/{lang}/circuit/parc-andringitra', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->andringitra($lang);
});

$router->add('/{lang}/circuit/parc-andohahela', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->andohahela($lang);
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

$router->add('/{lang}/excursion/mitsiho-en-bivouac', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->bivouac($lang);
});

$router->add('/{lang}/excursion/mitsiho-et-radama', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->radamaMitsiho($lang);
});

$router->add('/{lang}/excursion/catamaran-radama', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->radama($lang);
});

$router->add('/{lang}/excursion/mitsiho-en-catamaran', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->mitsiho($lang);
});

$router->add('/{lang}/green', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->green($lang);
});

$router->add('/{lang}/blue-tour', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->blue($lang);
});

$router->add('/{lang}/circuit/tour-tsangatsanga', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->tsangatsanga($lang);
});

$router->add('/{lang}/circuit/tour-veloma', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->veloma($lang);
});


$router->add('/{lang}/circuit/tour-soa', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\CircuitController();
    $controller->soa($lang);
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

$router->add('/{lang}/kite-surf-a-diego-suarez', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->kite($lang);
});

$router->add('/{lang}/not-found', function ($params) {

    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        header("Location:/fr/not-found");
        return;
    }
   
    $controller = new \App\Controllers\HomeController();
    $controller->notfound($lang);
});

$router->add('/{lang}/tour-de-l-ile-en-helicot', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->helicot($lang);
});


$router->add('/{lang}/kite-surf-a-diego-suarez', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->kite($lang);
});



$router->add('/{lang}/sejour-plage-vierge', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->sejour($lang);
});

$router->add('/{lang}/excursions/croisiere-en-catamaran', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ExcurtionController();
    $controller->catamaran($lang);
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

$router->add('/{lang}/voyage-incentive', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ServiceController();
    $controller->incentive($lang);
});

$router->add('/{lang}/transfert-premium', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ServiceController();
    $controller->transfert($lang);
});

$router->add('/{lang}/services', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    
    $controller = new \App\Controllers\ServiceController();
    $controller->index($lang);
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

$router->add('/{lang}/subscribe', function ($params) {
    $validLanguages = ['en', 'fr', 'it','de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }
    
    $controller = new \App\Controllers\NewsletterController();
    $controller->subscribe($lang);
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



$router->add('/{lang}/week-end-a-nosy-iranja', function ($params) {
    $validLanguages = ['en', 'fr', 'it' , 'de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        header("Location:/fr/week-end-a-nosy-iranja");
        return;
    }

    $controller = new \App\Controllers\HomeController();
    $controller->w_iranja($lang);
});


$router->add('/{lang}/home', function ($params) {
    $validLanguages = ['en', 'fr', 'it' , 'de']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        header("Location:/fr/home");
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
    header("Location: /fr/home");
    exit;
}


// Continuer avec le routeur ou le contrôleur
$router->dispatch();

