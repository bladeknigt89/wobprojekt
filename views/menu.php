<div class="container-fluid">
<div class="menu row">
<div class="container">
	<div class="visible-sm visible-md visible-lg">
	<div class="logo col-xs-4">
	
	</div>
	<div class="rightmenu col-xs-4">
		<a href="<?php echo URL; ?>index"><div class="menupont">Index</div></a>
		
		<?php 

		

		if(isset($_SESSION['mail']))
			{	
				
				// ezek a linkek csak akkor jelennke meg, ha bejelentkezik az illető

				echo '<a href="'.URL.'upload"><div class="menupont">Feltöltés</div></a>';
				
				echo '<a href="'.URL.'login/logout"><div class="menupont">Kijelentkezés</div></a>';
			}
		else
		{
			echo '<a href="'.URL.'login"><div class="menupont">Bejelentkezés</div></a>';

		}
		?>
	</div>
	<div class="logo col-xs-4">
	
	</div>	
	</div>
	
</div>
</div>
</div>