<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nome Cognome o Società', $_POST['imObjectForm_10_1'], '', false);
	$form->setField('Indirizzo Email', $_POST['imObjectForm_10_2'], '', false);
	$form->setField('Numero di Telefono Referente', $_POST['imObjectForm_10_3'], '', false);
	$form->setField('Oggetto', $_POST['imObjectForm_10_4'], '', false);
	$form->setField('Messaggio', $_POST['imObjectForm_10_5'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'BEBE76CF752ED3426607C8F0A0477D5D' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('info@galloaldo.com', 'info@galloaldo.com', 'info dal sito Galloaldo.com', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file