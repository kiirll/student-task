<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $routes_path = ROOT.'/config/routes.php';
        $this->routes = include ($routes_path);
    }

    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();
        //$match = explode('/', trim($uri,'/'));

        if($uri == "") $uri = "students";
       //echo $uri;
        foreach ($this->routes as $uriPattern => $path){

            if(preg_match("~$uriPattern~",$uri)) {

                $internalRoute = preg_replace("~$uriPattern~",$path,$uri);

                $segments = explode('/', $internalRoute);



                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parametrs = $segments;
                $controllerFile = ROOT . '/controller/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                } else {
                    $this->error404();
                }
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject,$actionName),$parametrs);
                if ($result != null) {
                    break;
                }
            }


        }

    }

    private function error404()
    {
        header("Status: 404 Not Found");
        echo '404';
        die();
    }
}