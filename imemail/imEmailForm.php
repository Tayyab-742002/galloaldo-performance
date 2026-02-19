<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Ragione Sociale', @$_POST['imObjectForm_13_1'], '', false);
	$form->setField('Indirizzo', @$_POST['imObjectForm_13_2'], '', false);
	$form->setField('Cap', @$_POST['imObjectForm_13_3'], '', false);
	$form->setField('Localita\'', @$_POST['imObjectForm_13_4'], '', false);
	$form->setField('Provincia', @$_POST['imObjectForm_13_5'], '', false);
	$form->setField('Partita IVA', @$_POST['imObjectForm_13_6'], '', false);
	$form->setField('Codice Fiscale', @$_POST['imObjectForm_13_7'], '', false);
	$form->setField('Telefono', @$_POST['imObjectForm_13_8'], '', false);
	$form->setField('E-mail', @$_POST['imObjectForm_13_9'], '', false);
	$form->setField('Codice SDI', @$_POST['imObjectForm_13_10'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'ABFBD9C4810F4605441C69BA7A6CE482' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_13_9'] != "" ? $_POST['imObjectForm_13_9'] : 'info@galloaldo.com', 'info@galloaldo.com', 'Richiesta preventivo dal sito www.galloaldo.com', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file