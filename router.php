<!-- <?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/post' => 'controllers/post/post.controller.php',
    '/project' => 'controllers/project/project.controller.php',
    '/user' => 'controllers/user/user.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
} -->




// _________________________________________

<?php
// Define a variable
$message = "Hello, World!";

// Output the variable value
echo $message;
?>

