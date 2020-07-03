<?php

if(isset($_GET["informacion"])){

	$miarray = $_GET['informacion'];

	$array_para_recibir_via_url = stripslashes($miarray);
	$array_para_recibir_via_url = urldecode($array_para_recibir_via_url );
	$matriz_completa = unserialize($array_para_recibir_via_url);
	//var_dump($matriz_completa);

	echo '<div class="cbp-l-member-img">
				<img src="'.$matriz_completa["ruta"].'img/'.$matriz_completa["folder"].'/'.$matriz_completa["imagen"].'" alt="">
			</div>
			<div class="cbp-l-member-info">
				<div class="cbp-l-member-name">'.$matriz_completa["titulo"].'</div>
				<div class="cbp-l-member-position">'.$matriz_completa["nombre"].'</div>
				<div class="cbp-l-member-desc">
					'.$matriz_completa["descripcion"].'
				</div>

		  </div><br>';

}

?>

<!--<button type="button" onclick="ventanaModal() " class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalMessageventana">-->
<!--	Reserve su cita-->
<!--</button>-->



