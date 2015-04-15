<?php 

require('../lib/personal_data_model.php');
$personaldata = new PersonalData();

require('../lib/info_general_model.php');
$infogeneral = new InfoGeneral();

require('../lib/education_model.php');
$education = new Education();

require('../lib/income_model.php');
$income = new Income();

require('../lib/assets_model.php');
$assets = new Assets();

$asp_idempleado = $personaldata->getMaxId() + 1 ;

// VISAS
if ( isset( $_POST['input_visa_paises'] )) {
	$input_visa_paises_array =  $_POST['input_visa_paises'] ; 
	foreach ( $input_visa_paises_array as $value ) {
		$input_visa_paises = $input_visa_paises . $value . ',';
	}
}


	if ( isset($_POST['input_nombre'])  	&&
		 isset($_POST['input_puesto']) 	&&
		 isset($_POST['input_ingreso'])	&&
		 isset($_POST['input_edad']) 
		):
		
		$personal_data = array(
			"asp_nombre"		=>	( $_POST['input_nombre'] ),
			"asp_puesto"		=> 	( $_POST['input_puesto'] ),
			"asp_ingreso"		=>	( $_POST['input_ingreso'] ),
			"asp_edad"			=> 	( $_POST['input_edad'] ),
			"asp_date"			=>	( $_POST['input_date'] ),
			"asp_pasaporte"		=>	( $_POST['input_pasaporte'] ) ,
			"asp_visa"			=>	( $_POST['input_visa'] ) , 
			"asp_visa_paises"	=>	$input_visa_paises 
		);

		

		$info_general_data = array(
			"asp_inmueble"				=>	( $_POST['input_inmueble'] ),
			"asp_edo_civil"				=> 	( $_POST['input_edo_civil'] ),
			"asp_dep_eco"				=>	( $_POST['input_dep_economicos'] ),
			"asp_dep_conyuge_edad"		=> 	( $_POST['input_edad_conyuge'] ),
			"asp_dep_hijos_edad"		=>	( $_POST['input_edad_hijos'] ),
			"asp_dep_padres_edad"		=>	( $_POST['input_edad_padres'] ) ,
			"asp_dep_nietos_edad"		=>	( $_POST['input_edad_nietos'] ) , 
			"asp_trab_conyuge"			=>	( $_POST['input_trabaja_conyuge'] ) ,
			"asp_trab_conyuge_monto"	=>	( $_POST['input_percepcion_conyuge'] ) ,
			"asp_trab_hijos"			=> 	( $_POST['input_trabaja_hijos'] ),
			"asp_trab_hijos_monto"		=> 	( $_POST['input_percepcion_hijos'] ),
			"asp_ing_fam_aspen"			=>	( $_POST['input_ingresos_aspen'] ),
			"asp_ing_fam_otros"			=>	( $_POST['input_ingresos_otros'] ),

			"aspen_empleados_asp_idempleado" => $asp_idempleado
		);

		$education_data = array(
			"asp_bachi"				=>	( $_POST['input_bachillerato'] ),
			"asp_bachi_tiempo"		=> 	( $_POST['input_bachillerato_tiempo'] ),
			"asp_uni"				=>	( $_POST['input_universidad'] ),
			"asp_uni_tiempo"		=> 	( $_POST['input_universidad_tiempo'] ),
			"asp_maestria"			=>	( $_POST['input_maestria'] ),
			"asp_maestria_tiempo"	=>	( $_POST['input_maestria_tiempo'] ) ,
			"asp_esp"				=>	( $_POST['input_especialidad'] ) , 
			"asp_esp_tiempo"		=>	( $_POST['input_especialidad_tiempo'] ) ,
			"asp_diplo"				=>	( $_POST['input_diplomado'] ) ,
			"asp_diplo_tiempo"		=> 	( $_POST['input_diplomado_tiempo'] ),
			"asp_docto"				=> 	( $_POST['input_doctorado'] ),
			"asp_docto_tiempo"		=>	( $_POST['input_doctorado_tiempo'] ),

			"aspen_empleados_asp_idempleado" => $asp_idempleado
		);

		$income_data = array(
			"asp_tel"					=>	( $_POST['input_egresos_telefono'] ),
			"asp_tel_monto"				=> 	( $_POST['input_egresos_telefono_monto'] ),
			"asp_movil"					=>	( $_POST['input_egresos_movil'] ),
			"asp_movil_monto"			=> 	( $_POST['input_egresos_movil_monto'] ),
			"asp_gas"					=>	( $_POST['input_egresos_gas'] ),
			"asp_gas_monto"				=>	( $_POST['input_egresos_gas_monto'] ) ,
			"asp_predial"				=>	( $_POST['input_egresos_predial'] ) , 
			"asp_predial_monto"			=>	( $_POST['input_egresos_predial_monto'] ) ,
			"asp_mant_carro"			=>	( $_POST['input_egresos_mantenimiento_automovil'] ) ,
			"asp_mant_carro_monto"		=> 	( $_POST['input_egresos_mantenimiento_automovil_monto'] ),
			"asp_ade_tarj"				=> 	( $_POST['input_adeudos_tarjetas'] ),
			"asp_ade_tarj_monto"		=>	( $_POST['input_adeudos_tarjetas_monto'] ),
			"asp_ade_prestamo"			=>	( $_POST['input_adeudos_colegiaturas'] ) , 
			"asp_ade_prestamo_monto"	=>	( $_POST['input_adeudos_colegiaturas_monto'] ) ,
			"asp_ade_auto"				=>	( $_POST['input_adeudos_automovil'] ) ,
			"asp_ade_auto_monto"		=> 	( $_POST['input_adeudos_automovil_monto'] ),
			"asp_ade_ahorro"			=> 	( $_POST['input_adeudos_ahorro'] ),
			"asp_gasto_mensual_monto"	=> 	( $_POST['input_adeudos_mesuales'] ),
			"asp_ing_adicionales_monto"	=>	( $_POST['input_ingresos_extra'] ),
			
			"aspen_empleados_asp_idempleado" => $asp_idempleado
		);

		$assets_data = array(
			"asp_compu"		=>	( $_POST['input_computadora'] ),
			"asp_telefono"	=> 	( $_POST['input_movil'] ),
			"asp_auto"		=>	( $_POST['input_auto'] ),
			
			"aspen_empleados_asp_idempleado" => $asp_idempleado
		);

		


		// INSERCION DE DATOS POR ARREGLO	
		$personaldata->setPersonalData( $personal_data );
		
		$infogeneral->setInfoGeneral( $info_general_data );

		$education->setEducation( $education_data );

		$income->setIncome( $income_data );

		$assets->setAssets( $assets_data );

	endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="refresh"  content="5; URL=index.php">
	<title>Fin encuesta</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

	<div class="col-md-12 text-center">
		<div class="jumbotron">
			<?php if ( isset( $_POST['input_nombre'] ) ) { ?>
			<h1><small><?php echo $_POST['input_nombre']; ?></small></h1>
			<?php } ?>
			<h1>Gracias por su participaci&oacute;n</h1><br>
			<p><a href="index.php" class="btn btn-primary btn-lg" role="button">Regresar a la encuesta</a></p>
		</div>
	</div>
	
</body>
</html>