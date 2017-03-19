<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $this->logger->addInfo("Something interesting happened");


    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
