$(document).ready(function() {
	/*
	number of fieldsets
	*/
	var fieldsetCount = $('#form_survey').children().length;

	/*
	current position of fieldset / navigation link
	*/
	var current 	= 1;

	/*
	sum and save the widths of each one of the fieldsets
	set the final sum as the total width of the steps element
	*/
	var stepsWidth	= 0;
    var widths 		= new Array();
	$('#steps .step').each(function(i){
        var $step 		= $(this);
		widths[i]  		= stepsWidth;
        stepsWidth	 	+= $step.width();
    });
	$('#steps').width(stepsWidth);
	//$('#steps').css("maxWidth:"stepsWidth);

	/*
	to avoid problems in IE, focus the first input of the form
	*/
	$('#form_survey').children(':first').find(':input:first').focus();	

	/*
	show the navigation bar
	*/
	$('#navigation').show();

	/*
	when clicking on a navigation link
	the form slides to the corresponding fieldset
	*/
    $('#navigation a').bind('click',function(e){
		var $this	= $(this);
		var prev	= current;
		$this.closest('ul').find('li').removeClass('selected');
        $this.parent().addClass('selected');
		/*
		we store the position of the link
		in the current variable
		*/
		current = $this.parent().index() + 1;
		/*
		animate / slide to the next or to the corresponding
		fieldset. The order of the links in the navigation
		is the order of the fieldsets.
		Also, after sliding, we trigger the focus on the first
		input element of the new fieldset
		If we clicked on the last link (confirmation), then we validate
		all the fieldsets, otherwise we validate the previous one
		before the form slided
		*/
        $('#steps').stop().animate({
            marginLeft: '-' + widths[current-1] + 'px'
        },500,function(){
			if(current == fieldsetCount)
				validateSteps();
			else
				validateStep(prev);
			$('#form_survey').children(':nth-child('+ parseInt(current) +')').find(':input:first').focus();
		});
        e.preventDefault();
    });

	/*
	clicking on the tab (on the last input of each fieldset), makes the form
	slide to the next step
	*/
	$('#form_survey > fieldset').each(function(){
		var $fieldset = $(this);
		$fieldset.children(':last').find(':input').keydown(function(e){
			if (e.which == 9){
				$('#navigation li:nth-child(' + (parseInt(current)+1) + ') a').click();
				/* force the blur for validation */
				$(this).blur();
				e.preventDefault();
			}
		});
	});

	/*
	validates errors on all the fieldsets
	records if the form has errors in $('#form_survey').data()
	*/
	function validateSteps(){
		var FormErrors = false;
		for(var i = 1; i < fieldsetCount; ++i){
			var error = validateStep(i);
			if(error == -1)
				FormErrors = true;
		}
		$('#form_survey').data('errors',FormErrors);
	}

	/*
	validates one fieldset
	and returns -1 if errors found, or 1 if not
	*/
	function validateStep(step){
		if(step == fieldsetCount) return;

		var error = 1;
		var hasError = false;
		$('#form_survey').children(':nth-child('+ parseInt(step) +')').find(':input:not(:button, :hidden)').each(function(){
			var $this 		= $(this);
			var valueLength = jQuery.trim($this.val()).length;

			if(valueLength == ''){
				hasError = true;
				$this.css('background-color','#FFEDEF');
			}
			else
				$this.css('background-color','#FFFFFF');
		});
		var $link = $('#navigation li:nth-child(' + parseInt(step) + ') a');
		$link.parent().find('.error,.checked').remove();

		var valclass = 'checked';
		if(hasError){
			error = -1;
			valclass = 'error';
		}
		$('<span class="'+valclass+'"></span>').insertAfter($link);

		return error;
	}

	/*
	if there are errors don't allow the user to submit
	*/
	$('#registerButton').bind('click',function(){
		if($('#form_survey').data('errors')){
			alert('Por favor, corrija los errores en el formulario');
			return false;
		}
	});
});

/*-------------------------------------------------------------------*/
// DATOS PERSONALES
$(document).ready(function(){
	$('#input_visa').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_visa_opciones').slideDown('slow');
					}
		else $('.input_visa_opciones').slideUp('slow');

	});

});


// INFORMACION GENERAL
$(document).ready(function(){
	$('#input_trabaja_conyuge').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_percepcion_conyuge').slideDown('slow');
					}
		else $('.input_percepcion_conyuge').slideUp('slow');

	});
	
	$('#input_trabaja_hijos').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_percepcion_hijos').slideDown('slow');
					}
		else $('.input_percepcion_hijos').slideUp('slow');

	});

});

//EDUCACION
$(document).ready(function(){
	//BACHILLERATO
	$('#input_bachillerato').change(function(){
		
		if ( $(this).val() != 'NO' ){
			$('.input_bachillerato_tiempo').slideDown('slow');
					}
		else $('.input_bachillerato_tiempo').slideUp('slow');

	});
	//UNIVERSIDAD
	$('#input_universidad').change(function(){
		
		if ( $(this).val() != 'NO' ){
			$('.input_universidad_tiempo').slideDown('slow');
					}
		else $('.input_universidad_tiempo').slideUp('slow');

	});
	//MAESTRIA
	$('#input_maestria').change(function(){
		
		if ( $(this).val() != 'NO' ){
			$('.input_maestria_tiempo').slideDown('slow');
					}
		else $('.input_maestria_tiempo').slideUp('slow');

	});
	//ESPECIALIDAD
	$('#input_especialidad').change(function(){
		
		if ( $(this).val() != 'NO' ){
			$('.input_especialidad_tiempo').slideDown('slow');
					}
		else $('.input_especialidad_tiempo').slideUp('slow');

	});
	//DIPLOMADO
	$('#input_diplomado').change(function(){
		
		if ( $(this).val() != 'NO' ){
			$('.input_diplomado_tiempo').slideDown('slow');
					}
		else $('.input_diplomado_tiempo').slideUp('slow');

	});
	//DOCTORADO
	$('#input_doctorado').change(function(){
		
		if ( $(this).val() != 'NO' ){
			$('.input_doctorado_tiempo').slideDown('slow');
					}
		else $('.input_doctorado_tiempo').slideUp('slow');

	});

});
// EGRESOS/INGRESOS
$(document).ready(function(){
	//TELEFONO
	$('#input_egresos_telefono').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_egresos_telefono_monto').slideDown('slow');
					}
		else $('.input_egresos_telefono_monto').slideUp('slow');

	});
	//TELEFONO MOVIL
	$('#input_egresos_movil').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_egresos_movil').slideDown('slow');
					}
		else $('.input_egresos_movil').slideUp('slow');

	});
	//GAS
	$('#input_egresos_gas').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_egresos_gas_monto').slideDown('slow');
					}
		else $('.input_egresos_gas_monto').slideUp('slow');

	});
	//PREDIAL Y AGUA
	$('#input_egresos_predial').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_egresos_predial_monto').slideDown('slow');
					}
		else $('.input_egresos_predial_monto').slideUp('slow');

	});
	//MANTENIMIENTO AUTOMOVIL
	$('#input_egresos_mantenimiento_automovil').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_egresos_mantenimiento_automovil_monto').slideDown('slow');
					}
		else $('.input_egresos_mantenimiento_automovil_monto').slideUp('slow');

	});
	/*---------------------------ADEUDOS--------------------------*/
	//ADEUDO TARJETAS
	$('#input_adeudos_tarjetas').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_adeudos_tarjetas_monto').slideDown('slow');
					}
		else $('.input_adeudos_tarjetas_monto').slideUp('slow');

	});
	//ADEUDO PRESTAMOS
	$('#input_adeudos_colegiaturas').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_adeudos_colegiaturas_monto').slideDown('slow');
					}
		else $('.input_adeudos_colegiaturas_monto').slideUp('slow');

	});
	//ADEUDO AUTOMOVIL PROPIO
	$('#input_adeudos_automovil').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_adeudos_automovil_monto').slideDown('slow');
					}
		else $('.input_adeudos_automovil_monto').slideUp('slow');

	});
});

// INVERSIONES
$(document).ready(function(){
	//INVERSION EDUCACION
	$('#input_inversion_educacion').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_inversion_educacion_monto').slideDown('slow');
					}
		else $('.input_inversion_educacion_monto').slideUp('slow');

	});
	//INVERSION VESTUARIO
	$('#input_inversion_vestuario').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_inversion_vestuario_monto').slideDown('slow');
					}
		else $('.input_inversion_vestuario_monto').slideUp('slow');

	});
	//INVERSION ALIMENTOS
	$('#input_inversion_alimentos').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_inversion_alimentos_monto').slideDown('slow');
					}
		else $('.input_inversion_alimentos_monto').slideUp('slow');

	});
	//INVERSION INVERSIONES
	$('#input_inversion_inversiones').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_inversion_inversiones_monto').slideDown('slow');
					}
		else $('.input_inversion_inversiones_monto').slideUp('slow');

	});
	//INVERSION ACTIVIDADES RECREATIVAS
	$('#input_inversion_actividades').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_inversion_actividades_monto').slideDown('slow');
					}
		else $('.input_inversion_actividades_monto').slideUp('slow');

	});
	//INVERSION DEGUSROS DE VIDA
	$('#input_inversion_seguros').change(function(){
		
		if ( $(this).val() == 'SI' ){
			$('.input_inversion_seguros_monto').slideDown('slow');
					}
		else $('.input_inversion_seguros_monto').slideUp('slow');

	});

});


//INPUT TYPE NUMBER 
$(document).ready(function(){
	$('#form_survey').submit(function(){
		if( $("input[type='number']").length == 0 ){
			$("input[type='number']").val('0');
		};
	});
});


jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z, " "]+$/i.test(value);
}, "Unicamente letras"); 


// JQUERY validation
$(document).ready(function(){
	$('#form_survey').validate({
		
		rules: {
			input_nombre: { required: true, minlength: 5, maxlength: 60, lettersonly: true},
			input_puesto: { required: true, minlength: 5, maxlength: 60, lettersonly: true},
			input_ingreso:{ required: true},
			input_edad: { required: true, min: 18, max: 110, digits: true }
		},
		erroElement: 'div'

	});
});

