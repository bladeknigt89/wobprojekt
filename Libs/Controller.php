<?php

class Controller {

    function __construct() {
        $this->view = new View();

        //kirajzolja a header.php-t

         $this->view->render('header');

        //Kirajzolja a menu.php-t

        $this->view->render('menu');

    }
    
    /**
     * 
     * @param string $name a model neve
     * @param string $path a modelleket tartalmazó mappa
        A kapott adatok alapján betölti a modelt 
     */
    public function loadModel($name, $modelPath = 'models/') {
        
        $path = $modelPath . $name.'_model.php';
        
        if (file_exists($path)) {
            require $modelPath .$name.'_model.php';
            
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }        
    }

}