<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Ragione Sociale', @$_POST['imObjectForm_2_1'], '', false);
	$form->setField('Indirizzo', @$_POST['imObjectForm_2_2'], '', false);
	$form->setField('Cap', @$_POST['imObjectForm_2_3'], '', false);
	$form->setField('Localita\'', @$_POST['imObjectForm_2_4'], '', false);
	$form->setField('Provincia', @$_POST['imObjectForm_2_5'], '', false);
	$form->setField('Partita IVA', @$_POST['imObjectForm_2_6'], '', false);
	$form->setField('Codice Fiscale', @$_POST['imObjectForm_2_7'], '', false);
	$form->setField('Telefono', @$_POST['imObjectForm_2_8'], '', false);
	$form->setField('E-mail', @$_POST['imObjectForm_2_9'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'FA76FA66303ADD4C83EAD73546C3DF6F' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_2_9'] != "" ? $_POST['imObjectForm_2_9'] : 'info@galloaldo.com', 'info@galloaldo.com', 'Richiesta catalogo prodotti dal sito www.galloaldo.com', 'Con la presente richiediamo invio vs. catalogo prodotti.

Distinti saluti', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file