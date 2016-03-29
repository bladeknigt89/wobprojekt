<?php 
class Editcar extends Controller {

    function __construct() {
        parent::__construct(); 
    }
   
    
    function index($cid) {
    	$car=null;
    	$car=$this->model->choosecar($cid);
    	$this->view->car=$car;
    	$colorlist=$this->listcolors();
		$brandlist=$this->listbrands();
		$this->view->colorlist=$colorlist;
		$this->view->brandlist=$brandlist; 
        $this->view->title = 'wob-project';
        $this->view->render('editcar/index');
       
    }

    //kilistázza és visszaadja a színeket az adatbázisból

     function listcolors()
    
    {
    	$array=$this->model->listcolors();
    	return $array;
    }

    //kilistázza és visszaadja az autómárkákat az adatbázisból
    
    function listbrands()
    {
    	$array=$this->model->listbrands();
    	return $array;
    }

    //elküldi a frissíteni kívánt autó $_POST-ban kapott adatait az adatbázisnak
    
    function updatecar()
    {
    	$brand=htmlspecialchars($_POST['brand']);
    	$color=htmlspecialchars($_POST['color']);
    	$type=htmlspecialchars($_POST['type']);
    	$motorsize=htmlspecialchars($_POST['motorsize']);
    	$id=$_POST['id'];
    	$data=array(
                
                'brandid' => $brand,
                'colorid' => $color,
                'type' => $type,
                'motorsize' => $motorsize,
                
                );

    	
    	$this->model->updatecar($data,$id);
		header('Location:'.URL.'index');
    }

    // Törli az adott id-vel rendelkező autót az adatbázisból

    function deletecar($id)
    {
    	$this->model->deletecar($id);
    	header('Location:'.URL.'index');
    }
 }   
?>