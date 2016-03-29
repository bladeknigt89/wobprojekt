

<div class=container>
<div class=row>
<div class="col-xs-2"></div>



		

<div class=col-xs-8>
<div class="welcomediv"><h1>Autólista</h1></div>

<?php
$page=null;
$carnumber=null;
$cars=$this->cars;
$allcars=$this->allcars;
$carnumber=ceil(count($allcars))+1;
$limit = 10;

$maxpage = ceil($allcars / $limit);



//lapozó linkek

$linklimit = 10;
$linklimit2 = $linklimit / 2;
$linkoffset = ($page > $linklimit2) ? $page - $linklimit / 10 : 0;
$linkend = $linkoffset+$linklimit;
 
if ($maxpage - $linklimit2 < $page)
{
        $linkoffset = $maxpage - $linklimit;
        if ($linkoffset < 0)
        {
                $linkoffset = 0;
        }
        $linkend = $maxpage;
}
$offset = ($page-1) * $limit;
 
if ($page > 1)
{
        print "<a href='?page=".($page-1)."'>Előző</a>   ";
}
for ($i=1+$linkoffset; $i <= $linkend and $i <= $maxpage; $i++)
{
       
        print "<a href='?page=$i'>[$i. oldal]</a>   ";
}


// A listában megkapott autók adatainak kilistázása
// ha be van jelentkezve az illető, akkor megjelennek a szerkesztés és a törlés linkek is.

 if(isset($_SESSION['mail']))
 {
 	foreach ($cars as $key) {
 	echo '<div class="datadiv"> <h3>'.$key['brandname'].'<br></h3><b>Márkája: </b>'.$key['brandname'].'<br> <b>Színe:</b> '.$key['colorname'].' <br><b>Kialakítás típúsa:</b> '.$key['type'].' <br><b>Motor mérete:</b> '.$key['motorsize'].'cm<sup>3</sup> <br><a href="./editcar/index/'.$key['cid'].'"> Szerkesztés </a>
<br>
 	<a href="./editcar/deletecar/'.$key['cid'].'"> Törlés </a>
 	 </div><div class="fillerdiv"></div>';
 }}
 else 
 {
 	foreach ($cars as $key) {
 	echo '<div class="datadiv"> <h3>'.$key['brandname'].'<br></h3><b>Márkája: </b>'.$key['brandname'].'<br> <b>Színe:</b> '.$key['colorname'].' <br><b>Kialakítás típúsa:</b> '.$key['type'].' <br><b>Motor mérete:</b> '.$key['motorsize'].'cm<sup>3</sup> <br></div><div class="fillerdiv"></div>';
 }
 }

 
 ?>




</div>

		
		
		

<div class=col-xs-2></div>
</div></div>


