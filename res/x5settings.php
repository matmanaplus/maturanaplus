<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://maturanaplus.net/',
	'homepage_url' => 'http://maturanaplus.net/index.html',
	'icon' => 'http://maturanaplus.net/admin/images/logo_33ieerxj.png',
	'version' => '15.2.3.0',
	'sitename' => 'MATURA-NA-PLUS',
	'public_folder' => '',
	'salt' => 'ppo4wswundf4mzvd5hh3ix74pdmjzpvkb91raqmiacn9zlz',
);


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_33ieerxj.png',
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Sekwencja znaków:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php