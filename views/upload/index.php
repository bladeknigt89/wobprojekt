<div class="container-fluid">
<div container>
<div class="row">
	<div class="col-xs-4"></div>
	<div class="col-xs-4">
		<div class="fillerdiv"></div>
		<div class="logindiv">
			<h2>Szín felvitele<br></h2>
			<form class="form-inline" role="form" action="upload/colorupload" method="POST">
  				<div class="form-group">
    				<label for="color">A szín neve:</label>
    				<input type="text" class="form-control" id="color" name="colorname">
  				</div>
  				<button type="submit" class="btn btn-default">Felvitel</button>
  				</form>
		</div>
	</div>
	<div class="col-xs-4"></div>

</div>
<div class="row">
	<div class="col-xs-4"></div>
	<div class="col-xs-4">
		<div class="fillerdiv"></div>
		<div class="logindiv">
			<h2>Márka felvitele<br></h2>
			<form class="form-inline" role="form" action="upload/brandupload" method="POST">
  				<div class="form-group">
    				<label for="brand">A Márka neve:</label>
    				<input type="text" class="form-control" id="brand" name="brandname">
  				</div>
  				<button type="submit" class="btn btn-default">Felvitel</button>
  				</form>
		</div>
	</div>
	<div class="col-xs-4"></div>

</div>

<div class="row">
	<div class="col-xs-4"></div>
	<div class="col-xs-4">
		<div class="fillerdiv"></div>
		<div class="logindiv">
			<h2>Autó felvitele <br></h2>
			<form class="form-inline" role="form" action="upload/carupload" method="POST">
  				<div class="form-group">
    				<label for="color">Az autó Színe:</label>
    				<?php 

    				$colorlist=$this->colorlist;
    				echo '<select name="color">';
    				foreach ($colorlist as $key ) {
    					echo '<option value="'.$key['id'].'">'.$key['colorname'].'</option>';
    				}
    				echo'</select>';

    				 ?>
  				</div>
  				<div class="form-group">
    				<label for="brand">Az autó márkásja:  </label>
    				<?php 

    				$brandlist=$this->brandlist;
    				echo '<select name="brand">';
    				foreach ($brandlist as $key ) {
    					echo '<option value="'.$key['bid'].'">'.$key['brandname'].'</option>';
    				}
    				echo'</select>';

    				 ?>
  				</div>
  				<div class="form-group">
    				<label for="brand">A kialakítás típúsa:</label>
    				<input type="text" class="form-control" id="type" name="type">
  				</div>
  				<div class="form-group">
    				<label for="brand">A Motor mérete köbcentiben:</label>
    				<input type="number" class="form-control" id="motorsize" name="motorsize">
  				</div>
  				<button type="submit" class="btn btn-default">Felvitel</button>
  				</form>
		</div>
	</div>
	<div class="col-xs-4"></div>

</div>



</div>
</div>