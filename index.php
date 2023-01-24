
<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/register' :
        require __DIR__ . '/views/register.php';
        break;
        case '/Login' :
          require __DIR__ . '/views/login.php';
          break;
          case '/about' :
            require __DIR__ . '/views/about.php';
            break;
            case '/logout' :
                require __DIR__ . '/views/logout.php';
                break;
                case '/profile':
                    require __DIR__ . '/views/profile.php';
                    break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}