<div class=container>
<div class="row">
	<div class="col-xs-4"></div>
	<div class="col-xs-4">
		<div class="fillerdiv"></div>
<div class="logindiv">
<h2>Az Autó Adatai</h2>
<?php

$car=$this->car;
$colorlist=$this->colorlist;
$brandlist=$this->brandlist;
$id=null;
$brand=null;
$color=null;
$type=null;
$motorsize=null;

 foreach ($car as $key) 
 {
 	$id=$key['cid'];
 	$brand=$key['brandname'];
 	$color=$key['colorname'];
 	$type=$key['type'];
 	$motorsize=$key['motorsize'];
 };
 
 

echo '<form class="form-inline" role="form" action="../updatecar" method="POST">
  				<div class="form-group">
    				<label for="brand">Az Autó Márkája:</label>
    				<select name="brand">';
    				foreach ($brandlist as $key ) 
    				{
    					if($key['brandname']==$brand)
    					{
    						echo '<option selected value="'.$key['bid'].'">'.$key['brandname'].'</option>';
    					}
    					else
    					{
    						echo '<option value="'.$key['bid'].'">'.$key['brandname'].'</option>';
    					}
    				}
    				echo'</select></div>
    				<div class="form-group">
    				<label for="color">Az Autó Színe:</label>
    				<select name="color">';
    				foreach ($colorlist as $key ) 
    				{
    					if($key['colorname']==$color)
    					{
    						echo '<option selected value="'.$key['id'].'">'.$key['colorname'].'</option>';
    					}
    					else
    					{
    						echo '<option value="'.$key['id'].'">'.$key['colorname'].'</option>';
    					}
    				}
    				echo '</select></div>';

    				echo '<div class="form-group">
    				<label for="type">A kialakítás típúsa:</label>
    				<input type="text" class="form-control" id="type" name="type" value="'.$type.'">
  				</div>
  				<div class="form-group">
    				<label for="brand">A Motor mérete köbcentiben:</label>
    				<input type="number" class="form-control" id="motorsize" name="motorsize" value="'.$motorsize.'">
    			<input type="hidden" value="'.$id.'" name="id">
  				</div>
  				
  				<button type="submit" class="btn btn-default">Felvitel</button>
  				</form>
		</div>


</div>';


 ?>


  	

		
		
		

<div class=col-xs-2></div>
</div></div>

