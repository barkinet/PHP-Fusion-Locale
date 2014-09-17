<?php
//Slovak/admin/members_email.php for 7.02.01 OK
$locale['email_create_subject'] = "Úèet vytvorený";
$locale['email_create_message'] = "Ahoj [USER_NAME],\n
Váš úèet na ".$settings['sitename']." bol vytvorený.\n
Pre prihlásenie použite nasledovné údaje:\n
Meno: [USER_NAME]\n
Heslo: [PASSWORD]\n\n
s pozdravom,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Úèet aktivovaný";
$locale['email_activate_message'] = "Ahoj [USER_NAME],\n
Váš úèet na ".$settings['sitename']." bol aktivovaný.\n
Môžete sa prihlási pomocou vášho mena a hesla.\n\n
s pozdravom,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Reaktiváciu úètu požaduje ".$settings['sitename'];
$locale['email_deactivate_message'] = "Ahoj [USER_NAME],\n
Uplynulo ".$settings['deactivation_period']." dní od vášho posledného prihlásenia na ".$settings['sitename'].". Boli ste oznaèený ako neaktívny, ale údaje vášho úètu ostávajú nezmenené.\n
Na reaktiváciu vášho úètu kliknite na tento odkaz:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
s pozdravom,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Váš úèet na ".$settings['sitename']." bol zabanovaný";
$locale['email_ban_message'] = "Ahoj [USER_NAME],\n
Váš úèet ".$userdata['user_name']." na ".$settings['sitename']." bol zabanovaný z týchto dôvodov:\n
[REASON].\n
Ak chcete viac informácií oh¾adne tohto banu, prosím kontaktujte hlavného administrátora cez ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Váš úèet na ".$settings['sitename']." bol zabanovaný";
$locale['email_secban_message'] = "Ahoj [USER_NAME],\n
Váš úèet ".$userdata['user_name']." na ".$settings['sitename']." bol zabanovaný, pretože niektoré vami vykonané akcie boli považované za bezpeènostnú hrozbu pre web.\n
Ak chcete viac informácií oh¾adne tohto bezpeènostného banu, prosím kontaktujte hlavného administrátora cez ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Váš úèet na ".$settings['sitename']." bol pozastavený";
$locale['email_suspend_message'] = "Ahoj [USER_NAME],\n
Váš úèet ".$userdata['user_name']." na ".$settings['sitename']." bol pozastavený od [DATE] (site time) z týchto dôvodov:\n
[REASON].\n
Ak chcete viac informácií oh¾adne tohto pozastavenia úètu, prosím kontaktujte hlavného administrátora cez ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>