<!DOCTYPE html>
<html lang="es">

<head>
    <title>Rallye</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">


<?
	
if(isset($_GET['tr'])) {$vtr=$_GET["tr"];}

	if(isset($_GET['gr'])){$vgr=$_GET["gr"];}

	if(isset($_GET['cl'])){$vcl=$_GET["cl"];}

	if(isset($_GET['tf'])){$vtf=$_GET["tf"];}
/*echo $vtr;
echo $vgr;
echo $vcl;
echo $vtf;*/

?>
</head>

<frameset rows="260,*" FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 >
	<frame name="php1" src="cabecerab.php?tr=<?php echo $_GET['tr'] ?>" bordercolor="#edf7de" border="0" SCROLLING=NO MARGINHEIGHT=0>	
	<frame name="php3" src="pagina2.php?tr=<?php echo $_GET['tr'] ?>" bordercolor="#edf7de" border="0" SCROLLING=AUTO MARGINHEIGHT=0>
<noframes><body margin:0px>

</body  >
</noframes>
</frameset>
</html>
