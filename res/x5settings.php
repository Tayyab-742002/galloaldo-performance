<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://www.galloaldo.com/',
	'homepage_url' => 'http://www.galloaldo.com/index.html',
	'icon' => '',
	'version' => '2019.2.5.0',
	'sitename' => 'Gallo Aldo Aste - Pennoni & Accessori per Bandiere',
	'lang_code' => 'it-IT',
	'public_folder' => '',
	'salt' => '4k01g8cx8n5adm3m862y7jv69462bk3v0gvqlew56708rrzfo0',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false,
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Parola di controllo:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo.png',
	'notification_public_key' => 'c35203c458557750',
	'notification_private_key' => 'e53e3c440848e24d',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto le inviamo il riepilogo del suo Ordine.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati, i dati di fatturazione e le istruzioni per la spedizione ed il pagamento scelto.',
	'email_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale.',
	'email_payment_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto, le confermiamo che abbiamo ricevuto il suo pagamento e che l’ordine verrà evaso il prima possibile.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati e i dati di fatturazione e spedizione.',
	'email_payment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'email_digital_shipment_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto le inviamo l\'elenco dei download link relativo ai prodotti ordinati:',
	'email_digital_shipment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'email_physical_shipment_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto le inviamo l\'elenco relativo ai prodotti ordinati:',
	'email_physical_shipment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(64, 64, 64, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(64, 64, 64, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(224, 224, 224, 1)',
	'owner_email' => 'your@email.here',
	'vat_type' => 'included'
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '€',
	'currency_code' => 'EUR',
	'currency_name' => 'Euro',
));

$ecommerce->setProductsData(array(
	'292tn6h7' => array(
		'id' => '292tn6h7',
		'singleFullPrice' => 98.36,
		'singleFullPricePlusVat' => 120,
		'image' => 'images/gioielli1.png',
		'digital' => false,
		'description' => 'Aliquam ipsum justo, bibendum et luctus volutpat, iaculis in dolor.',
	),
	'h60q78z7' => array(
		'id' => 'h60q78z7',
		'singleFullPrice' => 147.54,
		'singleFullPricePlusVat' => 180,
		'image' => 'images/gioielli2.png',
		'digital' => false,
		'description' => 'Aliquam ipsum justo, bibendum et luctus volutpat, iaculis in dolor.',
	),
	'q9xq44h1' => array(
		'id' => 'q9xq44h1',
		'singleFullPrice' => 105.74,
		'singleFullPricePlusVat' => 129,
		'image' => 'images/gioielli3.png',
		'digital' => false,
		'description' => 'Aliquam ipsum justo, bibendum et luctus volutpat, iaculis in dolor.',
	),
	'10z54pzm' => array(
		'id' => '10z54pzm',
		'singleFullPrice' => 122.95,
		'singleFullPricePlusVat' => 150,
		'image' => 'images/gioielli4.png',
		'digital' => false,
		'description' => 'Aliquam ipsum justo, bibendum et luctus volutpat, iaculis in dolor.',
	),
	'5i91vq9k' => array(
		'id' => '5i91vq9k',
		'singleFullPrice' => 36.89,
		'singleFullPricePlusVat' => 45,
		'image' => 'images/shoes1.jpg',
		'digital' => false,
		'description' => 'Aliquam ipsum justo, bibendum et luctus volutpat, iaculis in dolor.',
	),
	'62xf9zf7' => array(
		'id' => '62xf9zf7',
		'singleFullPrice' => 28.69,
		'singleFullPricePlusVat' => 35,
		'image' => 'images/shoes2.jpg',
		'digital' => false,
		'description' => 'Aliquam ipsum justo, bibendum et luctus volutpat, iaculis in dolor.',
	),
	'fe00cb8s' => array(
		'id' => 'fe00cb8s',
		'singleFullPrice' => 40.98,
		'singleFullPricePlusVat' => 50,
		'image' => 'images/shoes3.jpg',
		'digital' => false,
		'description' => 'Aliquam ipsum justo, bibendum et luctus volutpat, iaculis in dolor.',
	),
	'ek6b18fk' => array(
		'id' => 'ek6b18fk',
		'singleFullPrice' => 49.18,
		'singleFullPricePlusVat' => 60,
		'image' => 'images/shoes4.jpg',
		'digital' => false,
		'description' => 'Aliquam ipsum justo, bibendum et luctus volutpat, iaculis in dolor.',
	),
	'mbd5y9lg' => array(
		'id' => 'mbd5y9lg',
		'singleFullPrice' => 18.85,
		'singleFullPricePlusVat' => 23,
		'image' => 'images/t-shirt_1.png',
		'digital' => false,
		'description' => 'Morbi risus sem, posuere in maximus luctus, congue id turpis.',
	),
	'ug99nox2' => array(
		'id' => 'ug99nox2',
		'singleFullPrice' => 15.57,
		'singleFullPricePlusVat' => 19,
		'image' => 'images/t-shirt_2.png',
		'digital' => false,
		'description' => 'Morbi risus sem, posuere in maximus luctus, congue id turpis.',
	),
	'2ug888i1' => array(
		'id' => '2ug888i1',
		'singleFullPrice' => 18.85,
		'singleFullPricePlusVat' => 23,
		'image' => 'images/t-shirt_3.png',
		'digital' => false,
		'description' => 'Morbi risus sem, posuere in maximus luctus, congue id turpis.',
	),
	'00cqj52q' => array(
		'id' => '00cqj52q',
		'singleFullPrice' => 13.11,
		'singleFullPricePlusVat' => 16,
		'image' => 'images/t-shirt_4.png',
		'digital' => false,
		'description' => 'Morbi risus sem, posuere in maximus luctus, congue id turpis.',
	),
	'8vtp0qm0' => array(
		'id' => '8vtp0qm0',
		'singleFullPrice' => 17.21,
		'singleFullPricePlusVat' => 21,
		'image' => 'images/t-shirt_5.png',
		'digital' => false,
		'description' => 'Morbi risus sem, posuere in maximus luctus, congue id turpis.',
	),
	'r2nd19v9' => array(
		'id' => 'r2nd19v9',
		'singleFullPrice' => 18.85,
		'singleFullPricePlusVat' => 23,
		'image' => 'images/t-shirt_6.png',
		'digital' => false,
		'description' => 'Morbi risus sem, posuere in maximus luctus, congue id turpis.',
	),
	'o3sc2y5v' => array(
		'id' => 'o3sc2y5v',
		'singleFullPrice' => 14.75,
		'singleFullPricePlusVat' => 18,
		'image' => 'images/t-shirt_7.png',
		'digital' => false,
		'description' => 'Morbi risus sem, posuere in maximus luctus, congue id turpis.',
	),
	'vec08517' => array(
		'id' => 'vec08517',
		'singleFullPrice' => 18.85,
		'singleFullPricePlusVat' => 23,
		'image' => 'images/t-shirt_8.png',
		'digital' => false,
		'description' => 'Morbi risus sem, posuere in maximus luctus, congue id turpis.',
	)
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Bank Transfer',
		'description' => 'Pay later with Bank Transfer.',
		'email_text' => 'The following data is required for payments via Bank Transfers:

XXX YYY ZZZ

Please note that once the payment is completed it is necessary to send a copy of the receipt along with the Order Number.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Mail',
		'description' => 'The goods will be delivered in 3-5 days.',
		'email_text' => 'Shipping by Mail.\\nThe goods will be delivered in 3-5 days.'
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Express Delivery',
		'description' => 'The goods will be delivered in 1-2 days.',
		'email_text' => 'Shipping by Express Delivery.\\nThe goods will be delivered in 1-2 days.'
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2019.2.5 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#253A58" style="background-color: #253A58;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Tahoma\'; color: #FFFFFF; background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'This e-mail contains information that is intended solely for the above mentioned addressee.<br>If you have received this e-mail by error, please notify the sender immediately and destroy it, without copying it.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#253A58';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';

// End of file x5settings.php