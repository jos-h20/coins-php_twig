<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CoinCombo.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('coins.html.twig'); //
    });

    // User form input
    $app->get("/userInput", function() use ($app) {
        $change = $_GET['number'];
        $results = makeChange($change);

        return $app['twig']->render('coins.html.twig', array('results' => $results)); // [0, 0, 0, 1]
    });

    return $app;

?>
