<?php 
namespace App;

class Application {

    public Router $router;
    public Request $request;

    public function __construct() {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    // public function get()
    // {
    //     echo "Get method";
    // }

    public function run(): void
    {
        $this->router->resolve();
    }

}

?>