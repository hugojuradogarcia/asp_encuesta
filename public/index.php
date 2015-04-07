<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Encuesta ASPEN</title>
	<link rel="stylesheet" href="css/main.css">

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
                        <legend>Account</legend>

                        <p>
                            <label for="email">Email</label>
                            <input id="email" name="email" placeholder="info@tympanus.net" type="email" AUTOCOMPLETE=OFF />
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" AUTOCOMPLETE=OFF />
                        </p>
                    </fieldset>
                    <fieldset class="step">
                        <legend>Personal Details</legend>
                        <p>
                            <label for="name">Full Name</label>
                            <input id="name" name="name" type="text" AUTOCOMPLETE=OFF />
                        </p>
                        <p>
                            <label for="country">Country</label>
                            <input id="country" name="country" type="text" AUTOCOMPLETE=OFF />
                        </p>
                        <p>
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" placeholder="e.g. +351215555555" type="tel" AUTOCOMPLETE=OFF />
                        </p>
                        <p>
                            <label for="website">Website</label>
                            <input id="website" name="website" placeholder="e.g. http://www.codrops.com" type="tel" AUTOCOMPLETE=OFF />
                        </p>
                    </fieldset>
                    <fieldset class="step">
                        <legend>Payment</legend>
                        <p>
                            <label for="cardtype">Card</label>
                            <select id="cardtype" name="cardtype">
                                <option>Visa</option>
                                <option>Mastercard</option>
                                <option>American Express</option>
                            </select>
                        </p>
                        <p>
                            <label for="cardnumber">Card number</label>
                            <input id="cardnumber" name="cardnumber" type="number" AUTOCOMPLETE=OFF />
                        </p>
                        <p>
                            <label for="secure">Security code</label>
                            <input id="secure" name="secure" type="number" AUTOCOMPLETE=OFF />
                        </p>
                        <p>
                            <label for="namecard">Name on Card</label>
                            <input id="namecard" name="namecard" type="text" AUTOCOMPLETE=OFF />
                        </p>
                    </fieldset>
                    <fieldset class="step">
                        <legend>Settings</legend>
                        <p>
                            <label for="newsletter">Newsletter</label>
                            <select id="newsletter" name="newsletter">
                                <option value="Daily" selected>Daily</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Never">Never</option>
                            </select>
                        </p>
                        <p>
                            <label for="updates">Updates</label>
                            <select id="updates" name="updates">
                                <option value="1" selected>Package 1</option>
                                <option value="2">Package 2</option>
                                <option value="0">Don't send updates</option>
                            </select>
                        </p>
						<p>
                            <label for="tagname">Newsletter Tag</label>
                            <input id="tagname" name="tagname" type="text" AUTOCOMPLETE=OFF />
                        </p>
                    </fieldset>
					<fieldset class="step">
                        <legend>Confirm</legend>
						<p>
							Everything in the form was correctly filled 
							if all the steps have a green checkmark icon.
							A red checkmark icon indicates that some field 
							is missing or filled out with invalid data. In this
							last step the user can confirm the submission of
							the form.
						</p>
                        <p class="submit">
                            <button id="registerButton" type="submit">Register</button>
                        </p>
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
	
	
</body>
</html>