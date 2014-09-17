<?php
$locale['400'] = "Registrace";
$locale['401'] = "Aktivace konta";
// Registration Errors
$locale['402'] = "Musíte zadat jméno, heslo a e-mail.";
$locale['403'] = "Jméno obsahuje nepovolené znaky.";
$locale['404'] = "Hesla se neshodují.";
$locale['405'] = "Nesprávné heslo, použijte jen alfa-numerické znaky.<br />
Heslo musí mít minimálně 6 znaků.";
$locale['406'] = "Nesprávný e-mail.";
$locale['407'] = "Je nám líto, ale jméno".(isset($_POST['username']) ? $_POST['username'] : "")." už někdo používá. Zvolte si prosím jiné.";
$locale['408'] = "Je nám líto, ale tento e-mail".(isset($_POST['email']) ? $_POST['email'] : "")." je již přiřazený k jinému účtu. Zvolte si prosím jiný.";
$locale['409'] = "Tento e-mail je přiřazený k neaktivnímu účtu.";
$locale['410'] = "Chybný validační kód.";
$locale['411'] = "Váš e-mail, a nebo e-mailová doména je zablokováná.";
// Email Message
$locale['449'] = "Vítame Vás ".$settings['sitename'];
$locale['450'] = "Dobrý den ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Vitejte na ".$settings['sitename'].". Toto jsou vaše přihlašovací údaje:\n
Jméno: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Heslo: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Prosím aktivujte svoje konto pomocí nasledujícího odkazu:\n";
// Registration Success/Fail
$locale['451'] = "Registrace dokončená";
$locale['452'] = "Nyní se můžete přihlášit.";
$locale['453'] = "Administrátor aktivuje vaše konto co nejdříve.";
$locale['454'] = "Vaše registrace je skoro kompletní. Na váš e-mail vám příjdou přihlašovací údaje a odkaz na aktivaci vašho účtu.";
$locale['455'] = "Vaše konto bylo ověřené.";
$locale['456'] = "Registrace selhala";
$locale['457'] = "Odeslaní e-mailu selhalo. Zkuste to za chvíli znovu. Pokud problém přetrvává kontaktujte <a href='mailto:".$settings['siteemail']."'>administrátora</a>.";
$locale['458'] = "Registrace selhala, protože:";
$locale['459'] = "Zkuste to znova";
// Register Form
$locale['500'] = "Prosím vyplňte svoje údaje. ";
$locale['501'] = "Ověřovací zpráva bude odeslána na váš mail. ";
$locale['502'] = "Pole označené <span style='color:#ff0000;'>*</span> musí být vyplněné.
Pozor na velká a malá písmena. U jména a hesla jsou rozlišována.";
$locale['503'] = " Po prihlášení si můžete doplnit další údaje ve svém profilu.";
$locale['504'] = "Validační kód:";
$locale['505'] = "Zadajte validační kód:";
$locale['506'] = "Registrace";
$locale['507'] = "Registrace je momentálně pozastavená.";
$locale['508'] = "Licenční podmínky";
$locale['509'] = "Přečetl jsem si<a href='".BASEDIR."print.php?type=T' target='_blank'>Licenční podmínky</a> a souhlasím s nimi.";
// Validation Errors
$locale['550'] = "Musíte zadat jmeno.";
$locale['551'] = "Musíte zadat heslo.";
$locale['552'] = "Musíte zadat e-mail.";
?>
