<!DOCTYPE HTML">
<html lang="es">

<head>

   <title>Subida</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">

    <?php
    $vtr=$_GET["tr"];
    
/*	$vbt=$_GET["bt"];	

	$vgr=$_GET["gr"];

	$vcl=$_GET["cl"];

	$vtf=$_GET["tf"];

/*echo "-".$vtr;
echo "-".$vgr;
echo "-".$vcl;
echo "-".$vtf;*/

?>

</head>


<body bgcolor="#edf7de" topmargin="0">

    
    <?php $lines = file('rallye.txt'); ?>

    <TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="0" CELLPADDING="2" bordercolor="#edf7de">

        <tr>

            <td align="left" valign="bottom" width="10%">
                <img src="emaspalomas.gif" alt="" valign="top" border="0"></td>

            <td align="center" valign="middle" width="50%">
                <b>
                    <font color="#050000" face="Arial" size=5>
                        <div style="text-align: center"><?= $lines[0] ?></div>
                        <div style="text-align: center"><?= $lines[1] ?></div>
                    </font>
                </b> </td>

            <td align="right" valign="middle" width="40%">
                <div style="text-align: right;"><img src="crono.bmp" alt="" border="0" height=95></div>
            </td>

        </tr>

    </TABLE>

    <TABLE WIDTH="90%" align="center" BORDER="1" CELLSPACING="0" CELLPADDING="2" bordercolor="#edf7de">
          <td style="background-color: rgb(9, 52, 9)" color="#FFFFFF" align="right">
        <a href="subida.php" target="_top"><font color="#ffffff" face="Arail" size=2><b>Volver a tramos</b> </font> </a> 
        </td> 
    </TABLE> 
    <TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="0" CELLPADDING="2" bordercolor="#edf7de">
        <tr>
        <td align='left' valign='middle' col width="25%">
        <font color="#050000" face="Arial" size=3><b>Tipo Vehículo</b></font><br>
        <SELECT type=text size=1 cols=4 name='Tipo' id='tipos' onchange="parent.php3.location.href='pagina4.php?bt='+document.getElementById('tipos').value+'&tr='+document.getElementById('tramos').value+'&gr='+document.getElementById('grupos').value+'&cl='+document.getElementById('clases').value+'&tf='+document.getElementById('trofeos').value">
        <?php $ltra = file('tipos.txt'); 
                foreach ($ltra as $line_num => $line) { 
                $datos = explode(";", $line);

                if($_GET["bt"] == "$datos[0]") 
                {
                $vtr="$datos[0]";
                echo"<OPTION value=$datos[0] Selected='Selected'>$datos[1]</OPTION>"; 
                }
                else
                {
                echo"<OPTION value=$datos[0]>$datos[1]</OPTION>"; 
                }
                } 
                ?>
            </SELECT>        
        <td align='left' valign='middle' col width="25%">
        <font color="#050000" face="Arial" size=3><b>Tramo Cronometrado</b></font><br>
        <SELECT type=text size=1 cols=4 name='Tramo' id='tramos' onchange="parent.php3.location.href='pagina4.php?bt='+document.getElementById('tipos').value+'&tr='+document.getElementById('tramos').value+'&gr='+document.getElementById('grupos').value+'&cl='+document.getElementById('clases').value+'&tf='+document.getElementById('trofeos').value">
                <?php $ltra = file('tramos.txt'); 

                foreach ($ltra as $line_num => $line) { 
                $datos = explode(";", $line);


                if($_GET["tr"] == "$datos[0]") 
                {
                $vtr="$datos[0]";
                echo"<OPTION value=$datos[0] Selected='Selected'>$datos[0] - $datos[1]</OPTION>"; 
                }
                else
                {
                echo"<OPTION value=$datos[0]>$datos[0] - $datos[1]</OPTION>"; 
                }
                } 
                ?>
            </SELECT>

            <td align='left' valign='middle' col width="15%">
                <font color="#050000" face="Arial" size=3><b>Grupo</b></font><br>
                <SELECT type=text size=1 cols=4 name='Grupo' id='grupos' onchange="parent.php3.location.href='pagina4.php?bt='+document.getElementById('tipos').value+'&tr='+document.getElementById('tramos').value+'&gr='+document.getElementById('grupos').value+'&cl='+document.getElementById('clases').value+'&tf='+document.getElementById('trofeos').value">
                    <OPTION value=Todos>Todos</OPTION>
                    <?php $lgrp = file('grupos.txt'); 
                    foreach ($lgrp as $line_num => $line) { 
                    $datos = explode(";", $line);
                    if($_GET["fp"] == "$datos[0]") 
                    {
                    $vgr="$datos[0]";
                    echo"<OPTION value=$datos[0] Selected='Selected'>$datos[1]</OPTION>"; 
                    }
                    else
                    {
                    echo"<OPTION value=$datos[0]>$datos[1]</OPTION>"; 
                    }

                    } 
                    ?>
                </SELECT>

                <td align='left' valign='middle' col width="15%">
                    <font color="#050000" face="Arial" size=3><b>Clase</b></font><br>
                    <SELECT type=text size=1 cols=4 name='Clase' id='clases' onchange="parent.php3.location.href='pagina4.php?bt='+document.getElementById('tipos').value+'&tr='+document.getElementById('tramos').value+'&gr='+document.getElementById('grupos').value+'&cl='+document.getElementById('clases').value+'&tf='+document.getElementById('trofeos').value">
                        <OPTION value=Todos>Todos</OPTION>
                        <?php $lcla = file('clases.txt'); 
                        foreach ($lcla as $line_num => $line) { 
                        $datos = explode(";", $line);
                        if($_GET["cl"] == "$datos[0]") 
                        {
                        $vcl="$datos[0]";
                        echo"<OPTION value=$datos[0] Selected='Selected'>$datos[1]</OPTION>"; 
                        }
                        else
                        {
                        echo"<OPTION value=$datos[0]>$datos[1]</OPTION>"; 
                        }
                        } 
                        ?>
                    </SELECT>

                <td align='left' valign='middle' col width="15%">
                    <font color="#050000" face="Arial" size=3><b>Trofeo</b></font><br>
                    <SELECT type=text size=1 cols=4 name='Trofeo' id='trofeos' onchange="parent.php3.location.href='pagina4.php?bt='+document.getElementById('tipos').value+'&tr='+document.getElementById('tramos').value+'&gr='+document.getElementById('grupos').value+'&cl='+document.getElementById('clases').value+'&tf='+document.getElementById('trofeos').value">
                        <OPTION value=Todos>Todos</OPTION>
                        <?php $ltro = file('trofeos.txt'); 
                        foreach ($ltro as $line_num => $line) { 
                        $datos = explode(";", $line);
                        if($_GET["tf"] == "$datos[0]") 
                        {
                        $vtf="$datos[0]";
                        echo"<OPTION value=$datos[0] Selected='Selected'>$datos[1]</OPTION>"; 
                        }
                        else
                        {
                        echo"<OPTION value=$datos[0]>$datos[1]</OPTION>"; 
                        }
                        } 
                        ?>
                    </SELECT>
                <td align='left' valign='middle' col width="30%"></td>
            </tr>
    </TABLE>

    <hr>
    <TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="2" bordercolor="#edf7de">
        <tr>
            <td valign='middle' WIDTH="50%" align="center">
                <font color="#050000" face="Arial" size=3><b>CLASIFICACION TRAMOS CRONOMETRADOS</b></font>
            </td>
            <td valign='middle' WIDTH="50%" align="center">
                <font color="#050000" face="Arial" size=3><b>CLASIFICACION GENERAL</b></font>
            </td>
        </tr>
    </TABLE>

</body>

</html>
