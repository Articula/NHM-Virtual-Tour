<?php
extract($_REQUEST);

if ($image){
	?>
	<a href="javascript:loadInfo('info')"><img src="images/closebutton.gif" class="closeLink" alt="Close"></a><img class="panelImage" src="panels/img<?=$image?>.jpg" alt="">
	
	<?
}elseif ($html){
	include_once("$html.html");
}
?>