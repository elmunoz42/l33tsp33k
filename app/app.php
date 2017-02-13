<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Translator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_translation", function() use($app) {
        $leet_translation = new Translator;
        $final_phrase = $leet_translation->translate($_GET['phrase']);
        return $app['twig']->render('result.html.twig', array('result' => $final_phrase));
    });

    return $app;
?>
