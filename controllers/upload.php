<?php

class Upload extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

    function index() {
        $this->view->title = 'wob-project';
        $colorlist=$this->listcolors();
		$brandlist=$this->listbrands();
		$this->view->colorlist=$colorlist;
		$this->view->brandlist=$brandlist;        
        $this->view->render('upload/index');
       
    }

    //kilistázza a színeket

    function listcolors()
    {
    	$array=$this->model->listcolors();
    	return $array;
    }

    //kilistázza a márkákat

    function listbrands()
    {
    	$array=$this->model->listbrands();
    	return $array;
    }

    // feltölti az adatbázisba a $_POST-ban kapott színt

    public function colorupload()
    {	$colorname=htmlspecialchars($_POST['colorname']);
    	$this->model->uploadcolor($colorname);
    	header("location:../upload");
    }

    // feltölti az adatbázisba a $_POST-ban kapott márkát

   public function brandupload()
    {	$brandname=htmlspecialchars($_POST['brandname']);
    	$this->model->uploadbrand($brandname);
    	header("location:../upload");
    }

    // feltölti az adatbázisba a $_POST-ban kapott autó adatait

    function carupload()
    {
    	$brand=htmlspecialchars($_POST['brand']);
    	$color=htmlspecialchars($_POST['color']);
    	$type=htmlspecialchars($_POST['type']);
    	$motorsize=htmlspecialchars($_POST['motorsize']);
    	$this->model->uploadcar($brand,$color,$type,$motorsize);
    	header("location:../upload");
    }
}
 ?>