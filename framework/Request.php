<?php 
namespace App;

class Request{

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        $position = strpos($path, '?');
        echo '<pre>';
        var_dump($position);
        echo "</pre>";
    }

    public function getMethod()
    {
        
    }

}


?>