<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = require "routes.php";

function router($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    http_response_code(404);
    echo "Sayfa bulunamadi";
    exit();
  }
}

router($uri, $routes);
