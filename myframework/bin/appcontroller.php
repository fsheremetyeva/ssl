<?php


class AppController{

    public function __construct($urlPathParts,$config)
    {


        //$this->db = new PDO("mysql:dbname=".$config["dbname"].";",$config["dbuser"],$config["dbpass"]);

        $this->urlPathParts = $urlPathParts;


        // if http://127.0.0.1/welcome  if controller present
        if ($urlPathParts[0]) {

          include './controllers/' . $urlPathParts[0] . ".php";

            $appcon = new $urlPathParts[0]($this);
            // if http://127.0.0.1/welcome/contact  // if a method follows a controller
            if (isset($urlPathParts[1])) {

               $appcon->{$urlPathParts[1]}();

            }else{
              // http://127.0.0.1/welcome  if no parameter
              //if there is a default method inside a controller (index)
           		$methodVariable = array($appcon, 'index');

              if(is_callable($methodVariable, false, $callable_name)){

            	       $appcon->index($this);

            	}
            }


        }else{

            include './controllers/' . $config['defaultController'] . ".php";
            $appcon = new $config['defaultController']($this);
            if (isset($urlPathParts[1])) {
                $appcon->config['defaultController'][1]();
            }else{

           		$methodVariable = array($appcon, 'index');
				if(is_callable($methodVariable, false, $callable_name)){
            	$appcon->index($this);

            	}
            }

        }



    }

    public function getView($page,$data=array()){

        require_once './views/'.$page.".php";

    }


    public function getModel($page,$data=array()){


        require_once './models/'.$page.".php";
        $model = new $page($this);
        return $model;

    }

}



?>
