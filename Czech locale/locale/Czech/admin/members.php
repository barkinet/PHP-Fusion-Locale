<?php
// Member Management Options
$locale['400'] = "Členové";
$locale['401'] = "Jméno";
$locale['402'] = "Přidat nového člena";
$locale['403'] = "Typ účtu";
$locale['404'] = "Nastavení";
$locale['405'] = "Náhled";
$locale['406'] = "Upravit";
$locale['407'] = "Aktivovat";
$locale['408'] = "Zrušit BAN";
$locale['409'] = "Zabanovat";
$locale['410'] = "Vymazat";
$locale['411'] = "Neexistují žádní %s užívatelé";
$locale['412'] = " začínající na ";
$locale['413'] = " začínající na ";
$locale['414'] = "Ukázat všechny";
$locale['415'] = "Hledat uživatele:";
$locale['416'] = "Hledat";
// Member types
$locale['417'] = "Členové";
$locale['418'] = "Neaktivovaní";
$locale['419'] = "Zabanovaní";
// Ban/Unban/Delete Member
$locale['420'] = "Zabanovaný";
$locale['421'] = "Odbanovaný";
$locale['422'] = "Člen byl vymazaný";
$locale['423'] = "Jste si jisti, že chcete vymazat tohoto člena?";
$locale['424'] = "Člen aktivovaný";
$locale['425'] = "Účet byl aktivován ";
$locale['426'] = "Dobrý den, [USER_NAME],\n
Váš účet na stránce ".$settings['sitename']." byl aktivován.\n
Nyní se můžete přihlásit pomocí uživatelského jména a hesla, které jste zadali při registraci.\n
S pozdravom,
".$settings['siteusername'];
// Edit Member Details
$locale['430'] = "Upravit člena";
$locale['431'] = "Detaily člena byli aktualizované";
$locale['432'] = "Návrat do administrace členů";
$locale['433'] = "Návrat do administrace";
$locale['434'] = "Detaily člena nejdou upravit:";
// Extra Edit Member Details form options
$locale['440'] = "Uložit změny";
// Update Profile Errors
$locale['450'] = "Nelze upravit hlavního administrátora.";
$locale['451'] = "Musíte zadat jméno a email.";
$locale['452'] = "Jméno obsahuje nepovolené znaky.";
$locale['453'] = "Jméno ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." už někdo používá. Zvolte si prosím jiné.";
$locale['454'] = "Nesprávná e-mailová adresa.";
$locale['455'] = "Tento Email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." už někdo používá. Zvolte si prosím jiné.";
$locale['456'] = "Nová hesla se neshodují.";
$locale['457'] = "Nesprávné heslo. Používejte jen alfa-numerické znaky.<br />
Heslo musí mít minimálně 6 znaků.";
$locale['458'] = "<strong>Upozornění:</strong> nepovolené spuštění skriptu.";
// View Member Profile
$locale['470'] = "Profil";
$locale['472'] = "Statistiky";
$locale['473'] = "Uživatelské skupiny";
// Add Member Errors
$locale['480'] = "Přidat člena";
$locale['481'] = "Účet byl úspešně vytvořen.";
$locale['482'] = "Účet nebyl vytvořen.";
?>
