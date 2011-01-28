<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
	<div id="opciones"><img src="img/foldermini.gif" /> <img src="img/newFilemini.gif" /> <img src="img/up.gif"  /></div>
    <div id="contenedor">
    <?php foreach($archivos as $item):?>
    <div class="archivos">
    	<a href="index.php/manejador/abrir/<?php echo $item['tipo'];?>/<?php echo $item['nombre'];?>" class="archivosa">
        <img src="img/<?php echo $item['tipo'];?>.gif" border="0" />
    	<strong><?php echo $item['nombre'];?></strong></a>
     </div>
    <?php endforeach;?>
    </div>
</div>
</body>
</html>