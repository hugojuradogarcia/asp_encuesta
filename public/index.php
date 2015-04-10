<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Encuesta ASPEN</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/classic.css">
    <link rel="stylesheet" href="css/classic.date.css">
	

	<style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>
</head>
<body>
	<div id="content">
		<header class="text-center">
			<img class="img-responsive" id="logo" src="img/aspen.gif">
            <h1>Encuesta</h1>
            <h5>Estudio socio-econ&oacute;mico</h5>
		</header>
		
		<!--FORM-->
		<section id="wrapper">
            <nav id="navigation">
                <ul>
                    <li class="selected">
                        <a href="#">Datos Personales</a>
                    </li>
                    <li>
                        <a href="#">Informaci&oacute;n Gral.</a>
                    </li>
                    <li>
                        <a href="#">Educaci&oacute;n</a>
                    </li>
                    <li>
                        <a href="#">Egresos/Ingresos</a>
                    </li>
                    <!--<li>
                        <a href="#">Inversiones</a>
                    </li>-->
                    <li>
                        <a href="#">Activos</a>
                    </li>
                    <li>
                        <a href="#">Terminar</a>
                    </li>

                </ul>   
            </nav>

			<div id="steps">
				<form action="sendData.php" method="post" name="form_survey" id="form_survey">
					
                    <!--DATOS PERSONALES-->
                    <fieldset class="step">
                        <legend>Datos personales</legend>
                        
                         <div class="form-input">
                            <label for="input_nombre">Nombre:</label>
                            <input id="input_nombre" name="input_nombre" placeholder="Nombre Apellidos" type="text"/>
                        </div>

                        <div class="form-input">
                            <label for="input_puesto">Puesto:</label>
                            <input id="input_puesto" name="input_puesto" placeholder="Ej. Ing. en sistemas" type="text"/>
                        </div>
                        
                        <div class="form-input">
                            <label for="input_ingreso">Fecha ingreso:</label>
                            <input class="datepicker" data-value="yyyy-mm-dd" id="input_ingreso" name="input_ingreso" type="date"/>
                        </div>

                        <div class="form-input">
                            <label for="input_edad">Edad:</label>
                            <input id="input_edad" name="input_edad" type="number"/>
                        </div>
                            
                        <div class="form-input">
                            <label for="input_date">Registro:</label>
                            <input id="input_date" name="input_date" type="date" value="<?php echo date('Y-m-d') ?>" readonly="readonly"/>
                        </div>
                        
                        <div class="form-input">
                            <label for="input_pasaporte">Pasaporte:</label>
                            <select class="select" id="input_pasaporte" name="input_pasaporte">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                            </select>
                        </div>

                        <div class="form-input">
                            <label for="input_visa">Visa:</label>
                            <select class="select" id="input_visa" name="input_visa">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                            </select>

                            <label class="input_visa_opciones" for="input_visa_opciones">Seleccione cuales:</label>
                            <select class="input_visa_opciones" multiple class="select" id="input_visa_opciones" name="input_visa_opciones">
                                    <option value="AUSTRALIA">AUSTRALIA</option>
                                    <option value="CANADA">CANADÁ</option>
                                    <option value="CHINA">CHINA</option>
                                    <option value="SI">ESTADOS UNIDOS DE AMERICA</option>
                            </select>
                        </div>  

                    </fieldset>
                    
                    <!--INFORMACION GENERAL-->
                    <fieldset class="step">
                        <legend>Informaci&oacute;n general</legend>

                        <div class="form-input">
                            <label for="input_inmueble">Inmueble:</label>
                            <select class="select" id="input_inmueble" name="input_inmueble">
                                <option value="PROPIO">PROPIO</option>
                                <option value="RENTADO">RENTADO</option>
                                <option value="PRESTADO">PRESTADO</option>
                                <option value="COMPARTIDO">COMPARTIDO</option>
                            </select>
                        </div>
                        
                        <div class="form-input">
                            <label for="input_edo_civil">Estado civil:</label>
                            <select class="select" id="input_edo_civil" name="input_edo_civil">
                                <option value="SOLTERO(A)">SOLTERO(A)</option>
                                <option value="CASADO(A)">CASADO(A)</option>
                                <option value="VIUDO(A)">VIUDO(A)</option>
                                <option value="UNION LIBRE">UNI&Oacute;N LIBRE</option>
                                <option value="DIVORCIADO(A)">DIVORCIADO(A)</option>
                            </select>
                        </div>  

                        <div class="form-input">
                            <label for="input_dep_economicos">Dependientes económicos:</label>
                            <input id="input_dep_economicos" name="input_dep_economicos" type="number" />
                        </div>

                        <div class="form-input">
                            
                            <h4>Edades:</h4>

                            <label for="input_edad_conyuge">Conyuge:</label>
                            <input id="input_edad_conyuge" name="input_edad_conyuge" type="number" />
                        
                            <label for="input_edad_hijos">Hijos:</label>
                            <input id="input_edad_hijos" name="input_edad_hijos" type="number" />
                        
                            <label for="input_edad_padres">Padres:</label>
                            <input id="input_edad_padres" name="input_edad_padres" type="number" />
                        
                            <label for="input_edad_nietos">Nietos:</label>
                            <input id="input_edad_nietos" name="input_edad_nietos" type="number" />
                        </div> 

                        <div class="form-input">
                            <h4>Trabaja:</h4>

                            <label for="input_trabaja_conyuge">Conyuge:</label>
                            <select class="select" id="input_trabaja_conyuge" name="input_trabaja_conyuge">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>
                            
                            <label class="input_percepcion_conyuge" for="input_percepcion_conyuge">Percepci&oacute;n:</label>
                            <input class="input_percepcion_conyuge" id="input_percepcion_conyuge" name="input_percepcion_conyuge" type="number" />

                            <label for="input_trabaja_hijos">Hijos:</label>
                            <select class="select" id="input_trabaja_hijos" name="input_trabaja_hijos">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_percepcion_hijos" for="input_percepcion_hijos">Percepci&oacute;n:</label>
                            <input class="input_percepcion_hijos" id="input_percepcion_hijos" name="input_percepcion_hijos" type="number" />

                        </div>   
                        
                        <div class="form-input">
                            <h4>Ingresos familiares:</h4>
                        

                            <label class="input_ingresos_aspen" for="input_ingresos_aspen">Aspen:</label>
                            <input class="input_ingresos_aspen" id="input_ingresos_aspen" name="input_ingresos_aspen" type="number" />

                            <label class="input_ingresos_otros" for="input_ingresos_otros">Otros:</label>
                            <input class="input_ingresos_otros" id="input_ingresos_otros" name="input_ingresos_otros" type="number" />
                        </div>
                    </fieldset>
                    
                    <!--EDUCACION-->
                    <fieldset class="step">
                        <legend>Educación</legend>

                            <div class="form-input">

                                <label for="input_bachillerato">Bachillerato:</label>
                                <select class="select" id="input_bachillerato" name="input_bachillerato">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                    <option value="TRUNCO">TRUNCO</option>
                                </select>
                                
                                <label class="input_bachillerato_tiempo" for="input_bachillerato_tiempo">Tiempo:</label>
                                <input class="input_bachillerato_tiempo" id="input_bachillerato_tiempo" name="input_bachillerato_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_universidad">Universidad:</label>
                                <select class="select" id="input_universidad" name="input_universidad">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                    <option value="TRUNCO">TRUNCO</option>
                                </select>

                                <label class="input_universidad_tiempo" for="input_universidad_tiempo">Tiempo:</label>
                                <input class="input_universidad_tiempo" id="input_universidad_tiempo" name="input_universidad_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_maestria">Maestría:</label>
                                <select class="select" id="input_maestria" name="input_maestria">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                    <option value="TRUNCO">TRUNCO</option>
                                </select>

                                <label class="input_maestria_tiempo" for="input_maestria_tiempo">Tiempo:</label>
                                <input class="input_maestria_tiempo" id="input_maestria_tiempo" name="input_maestria_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_especialidad">Especialidad:</label>
                                <select class="select" id="input_especialidad" name="input_especialidad">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                    <option value="TRUNCO">TRUNCO</option>
                                </select>

                                <label class="input_especialidad_tiempo" for="input_especialidad_tiempo">Tiempo:</label>
                                <input class="input_especialidad_tiempo" id="input_especialidad_tiempo" name="input_especialidad_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_diplomado">Diplomado:</label>
                                <select class="select" id="input_diplomado" name="input_diplomado">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                    <option value="TRUNCO">TRUNCO</option>
                                </select>

                                <label class="input_diplomado_tiempo" for="input_diplomado_tiempo">Tiempo:</label>
                                <input class="input_diplomado_tiempo" id="input_diplomado_tiempo" name="input_diplomado_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_doctorado">Doctorado:</label>
                                <select class="select" id="input_doctorado" name="input_doctorado">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                    <option value="TRUNCO">TRUNCO</option>
                                </select>
                                
                                <label class="input_doctorado_tiempo" for="input_doctorado_tiempo">Tiempo:</label>
                                <input class="input_doctorado_tiempo" id="input_doctorado_tiempo" name="input_doctorado_tiempo"/>

                            </div>

                    </fieldset>
                    
                    <!--EGRESOS/INGRESOS-->
                    <fieldset class="step">
                        <legend>Egresos/Ingresos</legend>
                        
                        
                        <div class="form-input">

                            <h4>Servicios domesticos:</h4>

                            <label for="input_egresos_telefono">Tel&eacute;fono:</label>
                            <select class="select" id="input_egresos_telefono" name="input_egresos_telefono">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_egresos_telefono_monto" for="input_egresos_telefono_monto">Monto:</label>
                            <input class="input_egresos_telefono_monto" id="input_egresos_telefono_monto" name="input_egresos_telefono_monto"/>


                            <label for="input_egresos_movil">Tel&eacute;fono m&oacute;vil:</label>
                            <select class="select" id="input_egresos_movil" name="input_egresos_movil">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_egresos_movil" for="input_egresos_movil_monto">Monto:</label>
                            <input class="input_egresos_movil" id="input_egresos_movil_monto" name="input_egresos_movil_monto"/>


                            <label for="input_egresos_gas">Gas:</label>
                            <select class="select" id="input_egresos_gas" name="input_egresos_gas">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_egresos_gas_monto" for="input_egresos_gas_monto">Monto:</label>
                            <input class="input_egresos_gas_monto" id="input_egresos_gas_monto" name="input_egresos_gas_monto"/>


                            <label for="input_egresos_predial">Predial y agua:</label>
                            <select class="select" id="input_egresos_predial" name="input_egresos_predial">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_egresos_predial_monto" for="input_egresos_predial_monto">Monto:</label>
                            <input class="input_egresos_predial_monto" id="input_egresos_predial_monto" name="input_egresos_predial_monto"/>


                            <label for="input_egresos_mantenimiento_automovil">Mantenimiento de carro:</label>
                            <select class="select" id="input_egresos_mantenimiento_automovil" name="input_egresos_mantenimiento_automovil">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_egresos_automovil_monto" for="input_egresos_automovil_monto">Monto:</label>
                            <input class="input_egresos_automovil_monto" id="input_egresos_automovil_monto" name="input_egresos_automovil_monto"/>

                        </div>
                        
                        


                        <div class="form-input">

                            <h4>Adeudos:</h4> 
                            
                            <label for="input_adeudos_tarjetas">Tarjetas de cr&eacute;dito:</label>
                            <select class="select" id="input_adeudos_tarjetas" name="input_adeudos_tarjetas">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_adeudos_tarjetas_monto" for="input_adeudos_tarjetas_monto">Monto:</label>
                            <input class="input_adeudos_tarjetas_monto" id="input_adeudos_tarjetas_monto" name="input_adeudos_tarjetas_monto"/>


                            <label for="input_adeudos_colegiaturas">Pago de colegiaturas:</label>
                            <select class="select" id="input_adeudos_colegiaturas" name="input_adeudos_colegiaturas">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_adeudos_colegiaturas_monto" for="input_adeudos_colegiaturas_monto">Monto:</label>
                            <input class="input_adeudos_colegiaturas_monto" id="input_adeudos_colegiaturas_monto" name="input_adeudos_prestamos_monto"/>


                            <label for="input_adeudos_automovil">Autom&oacute;vil propio:</label>
                            <select class="select" id="input_adeudos_automovil" name="input_adeudos_automovil">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_adeudos_automovil_monto" for="input_adeudos_automovil_monto">Monto:</label>
                            <input class="input_adeudos_automovil_monto" id="input_adeudos_automovil_monto" name="input_adeudos_automovil_monto"/>
                            
                            <label for="input_adeudos_ahorro">¿Cuentas con ahorro?</label>
                            <select class="select" id="input_adeudos_ahorro" name="input_adeudos_ahorro">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>


                        </div>  
                        
                        <div class="form-input">
                            <label class="input_adeudos_mesuales" for="input_adeudos_mesuales">Gasto mensual total:</label>
                            <input type="number" class="input_adeudos_mesuales" id="input_adeudos_mesuales" name="input_adeudos_mesuales"/>
                        </div>

                        <div class="form-input">

                            <label for="input_ingresos_extra">Tienes otros ingresos adicionales a Aspen:</label>
                            <select class="select" id="input_ingresos_extra" name="input_ingresos_extra">
                                <option value="NO">NO</option>
                                <option value="SI">DE $1000 A $5000</option>
                                <option value="SI">DE $5000 A $10000</option>
                                <option value="SI">M&Aacute;S DE $10000</option>
                            </select>
                            
                        </div>

                    </fieldset>

                    <!--<fieldset class="step">
                        <legend>Inversiones</legend>
                                         
                        <div class="form-input">

                            <label for="input_inversion_educacion">Gastos de Educación:</label>
                            <select class="select" id="input_inversion_educacion" name="input_inversion_educacion">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_inversion_educacion_monto" for="input_inversion_educacion_monto">Monto:</label>
                            <input class="input_inversion_educacion_monto" id="input_inversion_educacion_monto" name="input_inversion_educacion_monto"/>

                        </div>

                        <div class="form-input">

                            <label for="input_inversion_vestuario">Vestuario:</label>
                            <select class="select" id="input_inversion_vestuario" name="input_inversion_vestuario">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_inversion_vestuario_monto" for="input_inversion_vestuario_monto">Monto:</label>
                            <inpuT class="input_inversion_vestuario_monto" id="input_inversion_vestuario_monto" name="input_inversion_vestuario_monto"/>

                        </div>

                        <div class="form-input">

                            <label for="input_inversion_alimentos">Alimentos:</label>
                            <select class="select" id="input_inversion_alimentos" name="input_inversion_alimentos">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_inversion_alimentos_monto" for="input_inversion_alimentos_monto">Monto:</label>
                            <input class="input_inversion_alimentos_monto" id="input_inversion_alimentos_monto" name="input_inversion_alimentos_monto"/>

                        </div>

                        <div class="form-input">

                            <label for="input_inversion_inversiones">Inversiones:</label>
                            <select class="select" id="input_inversion_inversiones" name="input_inversion_inversiones">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_inversion_inversiones_monto" for="input_inversion_inversiones_monto">Monto:</label>
                            <input class="input_inversion_inversiones_monto" id="input_inversion_inversiones_monto" name="input_inversion_inversiones_monto"/>

                        </div>

                        <div class="form-input">

                            <label for="input_inversion_actividades">Actividades recreativas:</label>
                            <select class="select" id="input_inversion_actividades" name="input_inversion_actividades">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_inversion_actividades_monto" for="input_inversion_actividades_monto">Monto:</label>
                            <input class="input_inversion_actividades_monto" id="input_inversion_actividades_monto" name="input_inversion_actividades_monto"/>

                        </div>

                        <div class="form-input">

                            <label for="input_inversion_seguros">Seguros de Vida:</label>
                            <select class="select" id="input_inversion_seguros" name="input_inversion_seguros">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>

                            <label class="input_inversion_seguros_monto" for="input_inversion_seguros_monto">Monto:</label>
                            <input class="input_inversion_seguros_monto" id="input_inversion_seguros_monto" name="input_inversion_seguros_monto"/>

                        </div>

                    </fieldset>-->

                    <fieldset class="step">
                        <legend>Activos</legend>

                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Computadora:</label>
                            <select class="select" id="input_computadora" name="input_computadora">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Teléfono móvil:</label>
                            <select class="select" id="input_movil" name="input_movil">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Automóviles:</label>
                            <select class="select" id="input_auto" name="input_auto">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>
                        </div>

                    </fieldset>
                        


					<fieldset class="step">
                        <legend>Confirmar</legend>
						<div class="form-input" class="text-center" > 
							<p>Estoy seguro que la información ingresada es  verdadera y de car&aacute;cter privado.</p>
						</div>
                        <div class="submit form-input">
                            <button id="registerButton" type="submit">Enviar informaci&oacute;n</button>
                        </div>
                    </fieldset>
				
				</form>

			</div>	

			

		</section>

	</div>
	
	<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
    <script src="js/bootstrap.js"></script>
    <script src="js/picker.js"></script>
    <script src="js/picker.date.js"></script>
    <script src="js/legacy.js"></script>
    <script src="js/es_ES.js"></script>

    <script type="text/javascript">
        var $input = $( '.datepicker' ).pickadate({
            selectMonths: true,
            selectYears: true,
            format: 'yyyy-mm-dd',
            formatSubmit: 'yyyy-mm-dd',
            max: true

        })
        // picker.set('select', '14 October, 2014')
        // picker.open()
        // $('button').on('click', function() {
        // picker.set('disable', true);
        // });
    </script>
	<script src="js/main.js"></script>
</body>
</html>