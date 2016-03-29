<?php 
/**
* 
*/
class Index_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}
    // kilistázza a 10 kocsit a megadott kezdőérték és limit alapján
	  public function carlist($offset,$limit)
    {	
         $carlist= $this->db->select('Select cid, brandid, colorid, type, motorsize, colors.id, colors.colorname,bid,brands.brandname FROM cars JOIN colors on colors.id=colorid JOIN brands on bid=brandid limit '.$offset.','.$limit.'');
         return $carlist;
    }

    // az összes autót listázza ki

    public function listcars()
    {
        $carlist=$this->db->select('select * FROM cars');
        return $carlist;
    }

    // kiválasztja az megkapott cid alapján az adott kocsi adatait és átadja későbbi feldolgozásra

    function choosecar($cid)
    {   $limit=10;
    	$car= $this->db->select('Select cid, brandid, colorid, type, motorsize, colors.id, colors.colorname,bid,brands.brandname FROM cars JOIN colors on colors.id=colorid JOIN brands on bid=brandid where cid='.$cid.'');
    	return $car;
    }
}

?>