<!DOCTYPE html>
<html lang="es">

<head>
    <title>Rallye</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">

</head>


<body bgcolor="#edf7de" topmargin="0" >

<?php $lines = file('rallye.txt'); ?>

<TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="0" CELLPADDING="2" bordercolor="#edf7de"> 

      <tr>

      <td align="left" valign="bottom" width="10%">
	<img src="emaspalomas.gif" alt="" valign="top" border="0"></td>

      <td align="center" valign="middle" width="50%">
	<b><font color="#050000" face="Arial" size=5> 
      <div style="text-align: center"><?= $lines[0] ?></div> 
      <div style="text-align: center"><?= $lines[1] ?></div>
      </font></b> </td>

      <td align="right" valign="middle" width="40%">
	<div style="text-align: right;"><img src="crono.bmp" alt="" border="0" height=95></div></td>

    </tr>

</TABLE>

<TABLE WIDTH="90%" align="center" BORDER="1" CELLSPACING="0" CELLPADDING="2" bordercolor="#edf7de"> 
	<td  style="background-color: rgb(9, 52, 9);color:'#FFFFFF'; text-align:'right';">""</td>
</TABLE>

<TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="2" bordercolor="#edf7de"> 
  <tr>
<td colspan="6" rowspan="1" valign='middle' align="left"><font face="Arial" size=3><b>TRAMOS CRONOMETRADOS</b></font></td>
  <tr>
<td align='left' valign='middle' col width="7%"><font face="Arial" size=2><b>Estado</b></font></td>
<td align='left' valign='middle' col width="7%"><font face="Arial" size=2><b>Orden</b></font></td>
<td align='left' valign='middle' col width="19%"><font face="Arial" size=2><b>Tramo cronometrado</b></font></td>
<td align='center' valign='middle' col width="10%"><font face="Arial" size=2><b>Kilómetros</b></font></td>
<td align='center' valign='middle' col width="10%"><font face="Arial" size=2><b>Récord</b></font></td>
<td align='center' valign='middle' col width="7%"><font face="Arial" size=2><b>En tramo</b></font></td> 
<td align='center' valign='middle' col width="7%"><font face="Arial" size=2><b>En meta</b></font></td> 
<td align='center' valign='middle' col width="7%"><font face="Arial" size=2><b>En carrera</b></font></td> 
<td align='center' valign='middle' col width="20%"><font face="Arial" size=2><b> </b></font></td> 
</TABLE>


</body>
</html>