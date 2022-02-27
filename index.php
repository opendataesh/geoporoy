
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>SysFichas Grafico</title>
    <meta http-equiv="content-style-type" content="text/css">
    <link href="styles/globalStyles.css" rel="stylesheet"  type="text/css">
    <link href="styles/otherStyles.css" rel="stylesheet" type="text/css">
    <script src="common/pageLoadFunctions.js" type="text/javascript" language="JavaScript">	
    </script>
	<style type="text/css">
	<!--
	.cabecera{
		border-bottom-width: 1px;
		border-bottom-style: solid;
		border-bottom-color: #a0a0a0;
	}
	-->
	</style>
	
  </head>
<body class="AppFrame">
</table>
    <?php
	if(!session_id()) session_start();
    require_once('common/common.php');
      $args =  ($_SERVER['REQUEST_METHOD'] == "POST") ? $_POST : $_GET;
      $sessionId = $args['SESSION'];
      if (isset($args['MAPNAME']))
        $mapName = $args['MAPNAME'];
      else
        $mapName = 'unknown';
		
		
    ?>
     <div style="border: 1px solid #069; background-color:#dbedff;"><p align="justify">Cada vez que desee , haga clic <img src="../stdicons/icon_home.gif" width="16" height="16" /> 
    en la barra de tareas para retornar a esta lista de herramientas.</p></div>   <br><br>
    <div style="border: 1px solid #069; background-color:#dbedff;">
    <h1>
      Herramientas</h1> <hr>
      <ul>
   	   
        <li id="li_imp"><a href="custom_output/task_pane.php?SESSION=<?= $sessionId ?>&MAPNAME=<?= $mapName ?>">Impresiones</a></li>
        <li id="li_busq"><a href="query/busquedaLotes.php?accion=NONE&SESSION=<?= $sessionId?>&MAPNAME=<?= $mapName?>">Búsqueda por Lote</a></li>
        <li id="li_busq"><a href="query/busquedaTitular.php?accion=NONE&SESSION=<?= $sessionId?>&MAPNAME=<?= $mapName?>">Búsqueda por Titular</a></li>
        <li id="li_busq"><a href="query/busquedaTipoFicha.php?accion=NONE&SESSION=<?= $sessionId?>&MAPNAME=<?= $mapName?>">Búsqueda por Tipo de Ficha</a></li>
        <li id="li_busq"><a href="query/busquedaNroFicha.php?accion=NONE&SESSION=<?= $sessionId?>&MAPNAME=<?= $mapName?>">Búsqueda por Numero de Ficha</a></li>
				
      </ul></div>
      <br>
     <div style="border: 1px solid #069; background-color:#dbedff;">
    <h1>
      Ejemplos de Ayuda
    </h1><hr>
      <ul>
        <li id="li_dwf"><a href="../phpviewersample/dwfviewersample.php?SESSION=<?= $sessionId ?>&MAPNAME=<?= $mapName ?>" target="_blank">Usando DWF Viewer</a></li>
        <li id="li_ajax"><a href="../phpviewersample/ajaxviewersample.php?SESSION=<?= $sessionId ?>&MAPNAME=<?= $mapName ?>" target="_blank">Usando Ajax Viewer</a></li>
        <li id="li_atiled"><a href="../phpviewersample/ajaxtiledviewersample.php?SESSION=<?= $sessionId ?>&MAPNAME=<?= $mapName ?>" target="_blank">Usando Tiled Ajax Viewer</a></li>        
        
       </ul></div>
        <br><br>
       
  </body>
 <script language="javascript">
  	function fn_activar(){if(parent.parent.isOnSelectionChangedEnable == true){parent.parent.isOnSelectionChangedEnable = false;}else{parent.parent.isOnSelectionChangedEnable = true;}}function fn_punto(session,mapname){document.location="punto_interes/punto_interes.php?SESSION=" + session + "&MAPNAME=" + mapname;}function fn_impresion(session,mapname){document.location="custom_output/task_pane.php?SESSION=" + session + "&MAPNAME=" + mapname;}	
  	function fn_about(){
  		
  	var w=310;
	var h=230;
	
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition;
	
	  	mp_v= open("", bn_q_l2s_tg(map_qnp),'toolbar=0, menubar=0,scrollbars=0,width=' + w +',height=' + h + ',top=' + TopPosition + ',left=' + LeftPosition + ',titlebar=no,resizable=0');
	  	mp_v.document.open();
	  	mp_v.document.write(bn_q_l2s_tg(map_qap));
	  	mp_v.document.close();
	}
  	
  	
  	function fn_ver(obj){document.getElementById(obj).innerHTML = bn_q_l2s_tg(map_qat);}function fn_busqueda(session,mapname){document.location = "query/busquedaLotes.php?accion=NONE&SESSION=" + session + "&MAPNAME=" + mapname;}function fn_google(session,mapname){document.location = "digitizing_features/task_pane_digitizing.php?SESSION=" + session + "&MAPNAME=" + mapname;}
  </script>
</html>