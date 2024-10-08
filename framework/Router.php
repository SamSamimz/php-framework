<?php 
namespace App;

class Router {

    protected array $routes = [];
    protected Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }


    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;

        if($callback == false) {
            return $this->renderNotFound();
        }

        if(is_string($callback)) {
            return $this->render($callback);
        }

        call_user_func($callback);
    }

    public function render($view)
    {
      include_once __DIR__."/views/$view.php";
    }

    public function renderNotFound()
    {
        include_once __DIR__."/overneeds/notfound.php";
    }
}

?>