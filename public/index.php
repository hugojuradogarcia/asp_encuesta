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
                        <a href="#">Egresos</a>
                    </li>
                    <li>
                        <a href="#">Inversiones</a>
                    </li>
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

                    </fieldset>
                    
                    <!--INFORMACION GENERAL-->
                    <fieldset class="step">
                        <legend>Informaci&oacute;n general</legend>

                        <div class="form-input">
                            <label for="input_inmueble">Inmueble:</label>
                            <select class="select" id="input_inmueble" name="input_inmueble">
                                <option>PROPIO</option>
                                <option>RENTADO</option>
                                <option>PRESTADO</option>
                                <option>COMPARTIDO</option>
                            </select>
                        </div>
                        
                        <div class="form-input">
                            <label for="input_edo_civil">Estado civil:</label>
                            <select class="select" id="input_edo_civil" name="input_edo_civil">
                                <option>SOLTERO(A)</option>
                                <option>CASADO(A)</option>
                                <option>VIUDO(A)</option>
                                <option>UNI&Oacute;N LIBRE</option>
                                <option>DIVORCIADO(A)</option>
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
                        
                            <label for="input_edad_otros">Otros:</label>
                            <input id="input_edad_otros" name="input_edad_otros" type="number" />
                        </div> 

                        <div class="form-input">
                            <h4>Trabaja:</h4>

                            <label for="input_trabaja_conyuge">Conyuge:</label>
                            <select class="select" id="input_trabaja_conyuge" name="input_trabaja_conyuge">
                                <option>SI</option>
                                <option>NO</option>
                            </select>

                            <label for="input_percepcion_conyuge">Percepci&oacute;n:</label>
                            <input id="input_percepcion_conyuge" name="input_percepcion_conyuge" type="number" />

                            <label for="input_trabaja_conyuge">Hijos:</label>
                            <select class="select" id="input_trabaja_conyuge" name="input_trabaja_conyuge">
                                <option>SI</option>
                                <option>NO</option>
                            </select>

                            <label for="input_percepcion_hijos">Percepci&oacute;n:</label>
                            <input id="input_percepcion_hijos" name="input_percepcion_hijos" type="number" />

                        </div>   
                        
                    </fieldset>
                    
                    <!--EDUCACION-->
                    <fieldset class="step">
                        <legend>Educación</legend>

                            <div class="form-input">

                                <label for="input_bachillerato">Bachillerato:</label>
                                <select class="select" id="input_bachillerato" name="input_bachillerato">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_bachillerato_concluido">Concluido:</label>
                                <select class="select" id="input_bachillerato_concluido" name="input_bachillerato_concluido">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>
                                
                                <label for="input_bachillerato_tiempo">Tiempo:</label>
                                <input class="select" id="input_bachillerato_tiempo" name="input_bachillerato_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_universidad">Universidad:</label>
                                <select class="select" id="input_universidad" name="input_universidad">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_universidad_concluido">Concluido:</label>
                                <select class="select" id="input_universidad_concluido" name="input_universidad_concluido">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_universidad_tiempo">Tiempo:</label>
                                <input class="select" id="input_universidad_tiempo" name="input_universidad_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_maestria">Maestría:</label>
                                <select class="select" id="input_maestria" name="input_maestria">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_maestria_concluido">Concluido:</label>
                                <select class="select" id="input_maestria_concluido" name="input_maestria_concluido">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_maestria_tiempo">Tiempo:</label>
                                <input class="select" id="input_maestria_tiempo" name="input_maestria_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_especialidad">Especialidad:</label>
                                <select class="select" id="input_especialidad" name="input_especialidad">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_especialidad_concluido">Concluido:</label>
                                <select class="select" id="input_especialidad_concluido" name="input_especialidad_concluido">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_especialidad_tiempo">Tiempo:</label>
                                <input class="select" id="input_especialidad_tiempo" name="input_especialidad_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_diplomado_tiempo">Diplomado:</label>
                                <select class="select" id="input_diplomado" name="input_diplomado">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_diplomado_concluido">Concluido:</label>
                                <select class="select" id="input_diplomado_concluido" name="input_diplomado_concluido">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_diplomado_tiempo">Tiempo:</label>
                                <input class="select" id="input_diplomado_tiempo" name="input_diplomado_tiempo"/>

                            </div>
                            
                            <div class="form-input">

                                <label for="input_trabaja_conyuge">Doctorado:</label>
                                <select class="select" id="input_doctorado" name="input_doctorado">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label for="input_doctorado_concluido">Concluido:</label>
                                <select class="select" id="input_doctorado_concluido" name="input_doctorado_concluido">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>
                                
                                <label for="input_doctorado_tiempo">Tiempo:</label>
                                <input class="select" id="input_doctorado_tiempo" name="input_doctorado_tiempo"/>

                            </div>

                    </fieldset>
                    
                    <!--EGRESOS-->
                    <fieldset class="step">
                        <legend>Egresos</legend>
                        
                        
                        <div class="form-input">

                            <h4>Servicios domesticos:</h4>

                            <label for="input_egresos_luz">Luz:</label>
                            <select class="select" id="input_egresos_luz" name="input_egresos_luz">
                                <option>SI</option>
                                <option>NO</option>
                            </select>

                            <label for="input_egresos_telefono">Tel&eacute;fono:</label>
                            <select class="select" id="input_egresos_telefono" name="input_egresos_telefono">
                                <option>SI</option>
                                <option>NO</option>
                            </select>

                            <label for="input_egresos_movil">Tel&eacute;fono m&oacute;vil:</label>
                            <select class="select" id="input_egresos_movil" name="input_egresos_movil">
                                <option>SI</option>
                                <option>NO</option>
                            </select>

                            <label for="input_egresos_gas">Gas:</label>
                            <select class="select" id="input_egresos_gas" name="input_egresos_gas">
                                <option>SI</option>
                                <option>NO</option>
                            </select>

                            <label for="input_egresos_predial">Predial y agua:</label>
                            <select class="select" id="input_egresos_predial" name="input_egresos_predial">
                                <option>SI</option>
                                <option>NO</option>
                            </select>

                            <label for="input_egresos_mantenimiento_carro">Mantenimiento de carro:</label>
                            <select class="select" id="input_egresos_mantenimiento_carro" name="input_egresos_mantenimiento_carro">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>
                        
                        


                        <div class="form-input">

                            <h4>Adeudos:</h4> 
                            
                            <label for="input_adeudos_tarjetas">Tarjetas de cr&eacute;dito:</label>
                            <select class="select" id="input_adeudos_tarjetas" name="input_adeudos_tarjetas">
                                <option>SI</option>
                                <option>NO</option>
                            </select>

                            <label for="input_adeudos_prestamos">Pr&eacute;stamos personales:</label>
                            <select class="select" id="input_adeudos_prestamos" name="input_adeudos_prestamos">
                                <option>SI</option>
                                <option>NO</option>
                            </select>

                            <label for="input_adeudos_automovil">Autom&oacute;vil propio:</label>
                            <select class="select" id="input_adeudos_automovil" name="input_adeudos_automovil">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>  

                    </fieldset>

                    <fieldset class="step">
                        <legend>Inversiones</legend>
                                         
                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Gastos de Educación:</label>
                            <select class="select" id="input_gastos" name="input_gastos">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Vestuario:</label>
                            <select class="select" id="input_vestuario" name="input_vestuario">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Alimentos:</label>
                            <select class="select" id="input_alimentos" name="input_alimentos">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Inversiones:</label>
                            <select class="select" id="input_inversiones" name="input_inversiones">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Actividades:</label>
                            <select class="select" id="input_actividades" name="input_actividades">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Seguros de Vida:</label>
                            <select class="select" id="input_seguros" name="input_seguros">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>

                    </fieldset>

                    <fieldset class="step">
                        <legend>Activos</legend>

                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Computadora:</label>
                            <select class="select" id="input_computadora" name="input_computadora">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Teléfono móvil:</label>
                            <select class="select" id="input_movil" name="input_movil">
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <label for="input_trabaja_conyuge">Automóviles:</label>
                            <select class="select" id="input_auto" name="input_auto">
                                <option>SI</option>
                                <option>NO</option>
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