<?php 


namespace core;

class Router{
    // echo "Okay";
    private $controller = 'Sistema';
    private $method = 'teste';
    private $param = [];


    public function __construct()
    {
        $router = $this->url();
        if(file_exists('app/Controller/'.ucfirst($router[0]).'.php' )){
            // echo'Existe';
            $this->controller = $router[0];
            unset($router[0]);
            $class= 'App\\controller\\'. ucfirst($this->controller);
            $objeto = new $class();
            if(isset($router[1]) and method_exists($class, $router[1])){
                $this->method = $router[1];
                unset($router[1]);
            }
            $this->param = $router ? array_values($router): [];
            call_user_func_array([$objeto, $this->method], $this->param);
        }
        else{
                      
            $class= 'App\\controller\\'. ucfirst($this->controller);
            $objeto = new $class();
            $this->param = $router ? array_values($router): [];
            call_user_func_array([$objeto, $this->method], $this->param);
              
        }
    }
   


    private function url(){
        $parse_url = explode('/', filter_input(INPUT_GET, 'route', FILTER_SANITIZE_URL));
        return $parse_url;
    }
    
}