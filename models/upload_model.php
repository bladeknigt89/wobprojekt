<?php 
/**
* 
*/
class Upload_Model extends Model
{
	
	function __construct()
	{	
		parent::__construct();
		


	}

	// kilistázza a színeket

	function listcolors()
	{
		$colors=$this->db->select('SELECT id, colorname FROM colors');
		return $colors;
	}

	// kilistázza a márkákat

	function listbrands()
	{
		$brands=$this->db->select('SELECT bid, brandname FROM brands');
		return $brands;
	}

	// feltölti a színt az adatbázisba

	function uploadcolor($colorname)
	{
		$this->db->insert('colors', array('colorname'=>$colorname));
	}

	//feltölti a márkát az adatbázisba

	function uploadbrand($brandname)
	{
		$this->db->insert('brands', array('brandname'=>$brandname));
	}

	//feltölti az autó adatait az adatbázisba

	function uploadcar($brand,$color,$type,$motorsize)
	{
		$tomb = array('brandid' => $brand,'colorid' =>$color ,'type' =>$type ,'motorsize' =>$motorsize , );
		$this->db->insert('cars', $tomb);
	}

	
	 
}

?>