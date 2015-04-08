<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Encuesta ASPEN</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/default.date.css">
	

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
			<h1><small>Encuesta</small> ASPEN</h1>
		</header>
		
		<!--FORM-->
		<section id="wrapper">
			<div id="steps">
				<form action="sendData.php" method="post" name="form_survey" id="form_survey">
					
                    <fieldset class="step">
                        <legend>Datos personales</legend>

                        <div class="form-input">
                            <label for="input_puesto">Puesto:</label>
                            <input id="input_puesto" name="input_puesto" placeholder="Ej. Ing. en sistemas" type="text"/>
                        </div>
                        
                        <div class="form-input">
                            <label for="input_ingreso">Fecha ingreso:</label>
                            <input class="datepicker" id="input_ingreso" name="input_ingreso" type="date"/>
                        </div>

                        <div class="form-input">
                            <label for="input_edad">Edad:</label>
                            <input id="input_edad" name="input_edad" type="number"/>
                        </div>

                        <div class="form-input">
                            <input id="input_date" name="input_date" type="date" value="" readonly/>
                        </div>

                    </fieldset>
                    <fieldset class="step">
                        <legend>Personal Details</legend>
                        <div class="form-input">
                            <label for="name">Full Name</label>
                            <input id="name" name="name" type="text" AUTOCOMPLETE=OFF />
                        </div>
                        <div class="form-input">
                            <label for="country">Country</label>
                            <input id="country" name="country" type="text" AUTOCOMPLETE=OFF />
                        </div>
                        <div class="form-input">
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" placeholder="e.g. +351215555555" type="tel" AUTOCOMPLETE=OFF />
                        </div>
                        <div class="form-input">
                            <label for="website">Website</label>
                            <input id="website" name="website" placeholder="e.g. http://www.codrops.com" type="tel" AUTOCOMPLETE=OFF />
                        </div>
                    </fieldset>
                    <fieldset class="step">
                        <legend>Payment</legend>
                        <div class="form-input">
                            <label for="cardtype">Card</label>
                            <select id="cardtype" name="cardtype">
                                <option>Visa</option>
                                <option>Mastercard</option>
                                <option>American Express</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <label for="cardnumber">Card number</label>
                            <input id="cardnumber" name="cardnumber" type="number" AUTOCOMPLETE=OFF />
                        </div>
                        <div class="form-input">
                            <label for="secure">Security code</label>
                            <input id="secure" name="secure" type="number" AUTOCOMPLETE=OFF />
                        </div>
                        <div class="form-input">
                            <label for="namecard">Name on Card</label>
                            <input id="namecard" name="namecard" type="text" AUTOCOMPLETE=OFF />
                        </div>
                    </fieldset>
                    <fieldset class="step">
                        <legend>Settings</legend>
                        <div class="form-input">
                            <label for="newsletter">Newsletter</label>
                            <select id="newsletter" name="newsletter">
                                <option value="Daily" selected>Daily</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Never">Never</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <label for="updates">Updates</label>
                            <select id="updates" name="updates">
                                <option value="1" selected>Package 1</option>
                                <option value="2">Package 2</option>
                                <option value="0">Don't send updates</option>
                            </select>
                        </div>
						<div class="form-input">
                            <label for="tagname">Newsletter Tag</label>
                            <input id="tagname" name="tagname" type="text" AUTOCOMPLETE=OFF />
                        </div>
                    </fieldset>
					<fieldset class="step">
                        <legend>Confirm</legend>
						<div class="form-input">
							Everything in the form was correctly filled 
							if all the steps have a green checkmark icon.
							A red checkmark icon indicates that some field 
							is missing or filled out with invalid data. In this
							last step the user can confirm the submission of
							the form.
						</div>
                        <div class="submit form-input">
                            <button id="registerButton" type="submit">Register</button>
                        </div>
                    </fieldset>
				
				</form>

			</div>	

			<nav id="navigation">
				<ul>
					<li class="selected">
						<a href="#">Datos Personales</a>
					</li>
					<li>
						<a href="#">Informaci&oacute;n Gral.</a>
					</li>

				</ul>	
			</nav>

		</section>

	</div>
	
	<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>

	<script>
	 var $input = $( '.datepicker' ).pickadate({
            formatSubmit: 'yyyy/mm/dd',
            // min: [2015, 7, 14],
            container: '#container',
            // editable: true,
            closeOnSelect: false,
            closeOnClear: false,
        })

        var picker = $input.pickadate('picker')
        // picker.set('select', '14 October, 2014')
        // picker.open()

        // $('button').on('click', function() {
        //     picker.set('disable', true);
        // });

</script>
	
	
</body>
</html>