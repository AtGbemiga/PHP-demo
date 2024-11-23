<?php
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = array(
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/about.php'
);

function abort($code = 404): void
{
    // check if the file exsist
    if (!file_exists(filename: "views/$code.view.php")) {
        echo "File with name $code.view.php doesn't exsist";
        exit;
    }

    http_response_code(response_code: $code);

    require "views/$code.view.php";
    exit;
}

if (array_key_exists(key: $url, array: $routes)) {
    require $routes[$url]; // this syntax retrieves the value of the key
} else {
    abort(code: 404);
}