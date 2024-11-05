<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    //creem array en les rutes
    protected $routes = [];

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    public function redirect($uri)
    {
        // Partim la url
        $parts = explode('/', trim($uri, '/'));

        // Inici del Landing
        if ($uri === '/' || $uri === '/home' || $uri === ' ') {
            $content = $this->getViewContent('../resources/views/home/home.blade.php');
            echo $content;
            return;
        }

        // Films
        if ($uri === '/films') {
            $controller = 'App\Controllers\FilmController';
            $controllerInstance = new $controller();
            $navbar = $this->getViewContent('../resources/views/layout/navbar.blade.php');
            $content = $controllerInstance->index();
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }

        // Cars
        if ($uri === '/cars') {
            $controller = 'App\Controllers\CarController';
            $controllerInstance = new $controller();
            $navbar = $this->getViewContent('../resources/views/layout/navbar.blade.php');
            $content = $controllerInstance->index();
            $footer = $this->getViewContent('../resources/views/layout/footer.blade.php');
            echo $footer;
            return;
        }

        // Handle create, store, edit, update, delete, destroy for both Films and Cars
        $controllerMap = [
            'films' => 'App\Controllers\FilmController',
            'cars' => 'App\Controllers\CarController'
        ];

        $entity = $parts[0];
        if (isset($controllerMap[$entity])) {
            $controller = $controllerMap[$entity];
            $controllerInstance = new $controller();

            // create
            if (isset($parts[1]) && $parts[1] === 'create') {
                echo $controllerInstance->create();
                return;
            }

            // store
            if (isset($parts[1]) && $parts[1] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = $_POST;
                $controllerInstance->store($data);
                return;
            }

            // edit
            if (isset($parts[1]) && $parts[1] === 'edit' && isset($parts[2])) {
                echo $controllerInstance->edit($parts[2]);
                return;
            }

            // update
            if (isset($parts[1]) && $parts[1] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($parts[2])) {
                $data = $_POST;
                $controllerInstance->update($parts[2], $data);
                header('Location: /films');
                exit;
            }

            // delete
            if (isset($parts[1]) && $parts[1] === 'delete' && isset($parts[2])) {
                echo $controllerInstance->delete($parts[2]);
                return;
            }

            // destroy
            if (isset($parts[1]) && $parts[1] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!isset($_POST['id'])) {
                    throw new RuntimeException('No id provided');
                }
                $controllerInstance->destroy($_POST['id']);
                return;
            }

            error_log("Unknown action: " . $parts[1]);
        } else {
            error_log("Unknown entity: " . $entity);
        }

        // Si no es cap dels anteriors retornem la vista 404
        error_log("404 Not Found: " . $uri);
        return require '../resources/views/errors/404.blade.php';
    }

    //funcio per obtenir el contingut de la vista
    protected function getViewContent($viewPath)
    {
        ob_start();
        include $viewPath;
        return ob_get_clean();
    }
}