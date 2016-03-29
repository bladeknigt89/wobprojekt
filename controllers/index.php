<?php

class Index extends Controller {

    function __construct() {
        parent::__construct(); 
    }
   
    
    function index() {
        $this->view->title = 'wob-project';
        $cars=null;
        $allcars=null;
        $allcars=$this->counter();
        $this->view->allcars=$allcars;
        $cars=$this->listing();
        $this->view->cars=$cars;
        $this->view->render('index/index');
       
    }
    function run()
    {
        $this->model->run();
    }

    //kilistázza a megfelelő mennyiségű kocsit

    private function listing() 
    {   $limit=10;
        $page=null;
        if(!isset($_GET["page"]))
            {
                $page=1;
            }
        else
        {
            $page=$_GET["page"];
        }

        $offset = ($page-1) * $limit;
    	$carlist=$this->model->carlist($offset,$limit);
    	return $carlist;
    }

    //visszaadja az összes autó számát    

    private function counter()
    {   
        $allcars=$this->model->listcars();
        $number=count($allcars);
        return $number;
    }

    

     
}