<?php 
/**
* 
*/
class Editcar_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

    // kiválasztja az adott id-vel rendelkező autót és visszaadja az adatait


    function choosecar($cid)
    {
    	$car= $this->db->select('Select cid, brandid, colorid, type, motorsize, colors.id, colors.colorname,bid,brands.brandname FROM cars JOIN colors on colors.id=colorid JOIN brands on bid=brandid where cid='.$cid.'');
    	return $car;
    }

    //kilistázza a színeket

    function listcolors()
    {
        $colors=$this->db->select('SELECT id, colorname FROM colors');
        return $colors;
    }

    //kilistázza a márkákat

    function listbrands()
    {
        $brands=$this->db->select('SELECT bid, brandname FROM brands');
        return $brands;
    }



    // frissíti az adott id-vel rendelkező autó adatait a tömbben kapott alapján


    function updatecar($data, $id)
    {   
       
       $this->db->update('cars', $data, "`cid` = '".$id."'");
    }

    // törli az adott id-vel rendelkező autót az adatbázisból

    function deletecar($id)
    {
        $this->db->delete('cars',"`cid` = '".$id."'");
    }
}

?>