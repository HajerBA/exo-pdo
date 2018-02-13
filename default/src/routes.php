<?php

use Slim\Http\Request;
use Slim\Http\Response;
use simplon\entities\Person;
use simplon\dao\DaoPerson;



// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    $dao = new DaoPerson();
    var_dump($dao->getAll());
    echo "<br />";
    var_dump($dao->getById(2));
    echo "<br />";
    var_dump($dao->add(new Person("hajer",new DateTime('1988-09-14'),1)));
    echo "<br />";
    var_dump($dao->update(new Person("Jayge",new DateTime(),1,8)));
    echo "<br />";
    var_dump($dao->delete(7));

    
    // Render index view
    return $this->view->render($response, 'index.twig', [
        'variable' => 'Yes It works'
    ]);
})->setName('index');