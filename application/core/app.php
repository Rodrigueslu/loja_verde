<?php
    class app{
        protected $controller = 'HomeController';
        protected $method = 'index';
        protected $page404 = 'false';
        protected $params = [];

        public function __construct()
        {
            $URL_ARRAY = $this->parseurl();
            $this->getControllerFromUrl($URL_ARRAY);
            $this->getMethodFromUrl($URL_ARRAY);
            $this->getParamsFromUrl($URL_ARRAY);
            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        public function parseurl(){
            $REQUEST_URL = explode ('/', substr(filter_input(INPUT_SERVER, 'REQUEST_URL'),1));
            return $REQUEST_URL;
        }
        
        public function getControllerFromUrl($url){
            if(!empty($url[0]) && isset($url[0])){
                if(file_exists('../Application/controllers/' . ucfirst($url[0]) . 'controller.php')){
                    $this->controller = ucfirst($url[0]) . 'controller';
                }else {
                    $this->page404 = true;
                }
            }
            require_once '../Application/controllers' . $this->controller . '.php';
            $this->controller = new $this->controller();
        }

        public function getMethodFromUrl($url){
            if (!empty($url[1]) && isset ($url[1])){
                if (method_exists($this->controller,$url[1]) && !$this->page404){
                    $this->method = $url[1];
                }else {
                    $this->method = 'pageNotFound';
                }
            }
        }

        public function getParamsFromUrl($url){
            if (count($url) > 2) {
                $this->params = array_slice($url,2);
            }
        }

    }


?>