<?php
/*
Slovak Language Fileset  global.php 7.02.01 OK
Translate control by Peter Šeff (Marten)
Email: admin@phpfusion.sk
Web: http://www.phpfusion.sk
*/

// Locale Settings
setlocale(LC_ALL, 'sk_SK', 'slovak');
$locale['charset'] = "Windows-1250";
$locale['xml_lang'] = "sk";
$locale['tinymce'] = "sk";
$locale['phpmailer'] = "sk";

// Full & Short Months
$locale['months'] = "&nbsp|Január|Február|Marec|Apríl|Máj|Jún|Júl|August|September|Október|November|December";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|Máj|Jún|Júl|Aug|Sept|Okt|Nov|Dec";

// Standard User Levels
$locale['user0'] = "Verejnos";
$locale['user1'] = "Uívate¾";
$locale['user2'] = "Administrátor";
$locale['user3'] = "Hlavnı Administrátor";
$locale['user_na'] = "N/A";
$locale['user_anonymous'] = "Anonym";
// Standard User Status
$locale['status0'] = "Aktivovanı";
$locale['status1'] = "Zabanovanı";
$locale['status2'] = "Neaktivovanı";
$locale['status3'] = "Pozastavenı";
$locale['status4'] = "Bezpeènostnı BAN";
$locale['status5'] = "Zrušenı";
$locale['status6'] = "Anonym";
$locale['status7'] = "Deaktivovanı";
$locale['status8'] = "Neaktívny";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderátor";
// Navigation
$locale['global_001'] = "Navigácia";
$locale['global_002'] = "iadne odkazy neboli definované";
// Users Online
$locale['global_010'] = "Kto je Online";
$locale['global_011'] = "Hostí Online";
$locale['global_012'] = "Uívate¾ov Online";
$locale['global_013'] = "iadny uívate¾ nie je Online";
$locale['global_014'] = "Registrovaní uívatelia";
$locale['global_015'] = "Neaktivovaní uívatelia";
$locale['global_016'] = "Najnovší uívate¾";
// Forum Side panel
$locale['global_020'] = "Témy fóra";
$locale['global_021'] = "Najnovšie témy";
$locale['global_022'] = "Najhorúcejšie témy";
$locale['global_023'] = "iadne témy";
// Comments Side panel
$locale['global_025'] = "Posledné komentáre";
$locale['global_026'] = "iadne komentáre";
// Articles Side panel
$locale['global_030'] = "Posledné èlánky";
$locale['global_031'] = "Neboli pridané iadne èlánky";
// Downloads Side panel
$locale['global_032'] = "Posledné súbory na stiahnutie";
$locale['global_033'] = "iadne súbory na stiahnutie";
// Welcome panel
$locale['global_035'] = "Vitajte";
// Latest Active Forum Threads panel
$locale['global_040'] = "Posledné aktívne témy vo fóre";
$locale['global_041'] = "Moje témy";
$locale['global_042'] = "Moje príspevky";
$locale['global_043'] = "Nové príspevky";
$locale['global_044'] = "Téma";
$locale['global_045'] = "Prezreté";
$locale['global_046'] = "Odpovede";
$locale['global_047'] = "Poslednı príspevok";
$locale['global_048'] = "Fórum";
$locale['global_049'] = "Pridané";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Anketa";
$locale['global_052'] = "Presunul";
$locale['global_053'] = "Nezaloili ste ešte iadne témy.";
$locale['global_054'] = "Neposlali ste ešte iadny príspevok do fóra.";
$locale['global_055'] = "Bolo napísanıch %u novıch príspevkov, od vašej poslednej návštevy.";
$locale['global_056'] = "Moje sledované témy";
$locale['global_057'] = "Nastavenie";
$locale['global_058'] = "Zastavi";
$locale['global_059'] = "Nemáte iadne sledované témy.";
$locale['global_060'] = "Zastavi sledovanie tém?";
// News & Articles
$locale['global_070'] = "Pridal ";
$locale['global_071'] = "dòa ";
//$locale['global_072'] = "Èítajte viac";
$locale['global_072'] = "<span class='blink'><span style='color:#f00'>Èítajte viac</span><span style='color:#000'>Èítajte viac</span><span style='color:#0c0'>Èítajte viac</span></span>";
$locale['global_073'] = " Komentárov";
$locale['global_073b'] = " Komentárov";
$locale['global_074'] = " Preèítané";
$locale['global_075'] = "Vytlaèi";
$locale['global_076'] = "Upravi";
$locale['global_077'] = "Novinky";
$locale['global_078'] = "iadne novinky ešte neboli napísané";
$locale['global_079'] = "V ";
$locale['global_080'] = "Nekategorizované";
// Page Navigation
$locale['global_090'] = "Spä";
$locale['global_091'] = "Ïalej";
$locale['global_092'] = "Strana ";
$locale['global_093'] = " z ";
// Guest User Menu
$locale['global_100'] = "Prihlásenie";
$locale['global_101'] = "Meno";
$locale['global_102'] = "Heslo";
$locale['global_103'] = "Zapamäta";
$locale['global_104'] = "Prihlási";
$locale['global_105'] = "Nie ste uívate¾om?<br><a href='".BASEDIR."register.php' class='side'><strong>Kliknite sem</strong></a><br> a zaregistrujte sa.";
$locale['global_106'] = "Zabudli ste heslo?<br>Pre získanie nového  <br><a href='".BASEDIR."lostpassword.php' class='side'><strong>Kliknite sem</strong></a>.";
$locale['global_107'] = "Registrácia";
$locale['global_108'] = "Zabudnuté heslo";
// Member User Menu
$locale['global_120'] = "Upravi profil";
$locale['global_121'] = "Správy";
$locale['global_122'] = "Uívatelia";
$locale['global_123'] = "Administrácia";
$locale['global_124'] = "Odhlási";
$locale['global_125'] = "Máte %u novú/nové ";
$locale['global_126'] = "správu";
$locale['global_127'] = "správy";
$locale['global_128'] = "podanie";
$locale['global_129'] = "podania";
// Poll
$locale['global_130'] = "Anketa";
$locale['global_131'] = "Odosla hlas";
$locale['global_132'] = "Len prihlásení môu hlasova.";
$locale['global_133'] = "Hlas";
$locale['global_134'] = "Hlasy";
$locale['global_135'] = "Hlasy: ";
$locale['global_136'] = "Zaèiatok hlasovania: ";
$locale['global_137'] = "Koniec hlasovania: ";
$locale['global_138'] = "Archív ankiet";
$locale['global_139'] = "Vyber anketu zo zoznamu:";
$locale['global_140'] = "Prezrie";
$locale['global_141'] = "Prezrie anketu";
$locale['global_142'] = "iadne ankety.";

// Captcha
$locale['global_150'] = "Validaènı kód:";
$locale['global_151'] = "Vlote validaènı kód:";

// Footer Counter
$locale['global_170'] = "návštev";
$locale['global_171'] = "návštev";
$locale['global_172'] = "Vygenerované za: %s sekúnd";
$locale['global_173'] = "DB dop.";
// Admin Navigation
$locale['global_180'] = "Admin Index";
$locale['global_181'] = "Spä na stránku";
$locale['global_182'] = "<strong>Upozornenie:</strong> Heslo admina nebolo zadané, alebo je nesprávne.";
// Miscellaneous
$locale['global_190'] = "Mód na údrbu bol aktivovanı";
$locale['global_191'] = "Z tejto IP adresy nemáte povolenie pristupova na túto stránku.";
$locale['global_192'] = "Odhlasovanie ";
$locale['global_193'] = "Prihlasovanie ";
$locale['global_194'] = "Váš úèet bol zablokovanı.";
$locale['global_195'] = "Tento úèet ešte nebol aktivovanı.";
$locale['global_196'] = "Nesprávne meno alebo heslo.";
$locale['global_197'] = "Poèkajte prosím, prihlasovanie môe chví¾u trva...<br><br>
[ <a href='index.php'>Kliknite sem ak sa stránka nezobrazí do 10 sekúnd</a> ]";
$locale['global_198'] = "<strong>Upozornenie:</strong> setup.php nebol vymazanı, vymate ho èo najskôr.";
$locale['global_199'] = "<strong>Upozornenie:</strong> Admin heslo nie je nastavené, kliknite na <a href='edit_profile.php'>Editova profil</a> a nastavte ho.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Vyh¾adávanie";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Fórum";
//Themes
$locale['global_210'] = "Prejs na obsah"; 
// No themes found
$locale['global_300'] = "iadne vzh¾ady";
$locale['global_301'] = "Prepáète, ale stránka sa nedá zobrazi. Nedá sa nájs iadna téma na stránke. Ak ste administrátor, pouite váš FTP manaér pre nahratie <em>vzh¾adu/</em> do adresára urèeného pre vzh¾ady <em>PHP-Fusion v7</em>. Po nahratí vzh¾adu vojdite do <em>Hlavné nastavenia</em> a zvo¾te vzh¾ad ktorı se nahrali do adresára <em>vzh¾adov/</em>.<br><br>Ak ste benım uívate¾om tejto stránky, kontaktujte administrátora ".hide_email($settings['siteemail'])." e-mailom a oznámte mu túto záleitos.";
$locale['global_302'] = "Vzh¾ad zvolenı v hlavnom nastavení, neexistuje alebo nie je kompletnı!";
// JavaScript Not Enabled
$locale['global_303'] = "Ale nie! Toto je <strong>JavaScript</strong>?<br>Váš prehliadaè nemá povolené pouívanie JavaScriptu, alebo JavaScript nie je podporovanı. Prosím <strong>povolte JavaScript</strong> vo vašom prehliadaèi aby sa správne zobrazila táto stránka,<br> alebo <strong>obnovte</strong> váš prehliadaè s podporou JavaScriptu; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> alebo novšiu verziu <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorera</a>.";
// User Management
// Member status
$locale['global_400'] = "doèasne pozastavenı";
$locale['global_401'] = "zabanovanı";
$locale['global_402'] = "deaktivovanı";
$locale['global_403'] = "vymedzenı úèet";
$locale['global_404'] = "utajenı úèet";
$locale['global_405'] = "utajenı uívate¾";
$locale['global_406'] = "Tento úèet je zabanovanı z dôvodu:";
$locale['global_407'] = "Tento úèet je doèasne zrušenı a do ";
$locale['global_408'] = " z dôvodu:";
$locale['global_409'] = "Tento úèet je zabanovanı z bezpeènostnıch dôvodov.";
$locale['global_410'] = "Dôvod pre toto je: ";
$locale['global_411'] = "Tento úèet bol ukonèenı.";
$locale['global_412'] = "Tento úèet bol anonimizovanı pravdepodobne preto, e bol neaktívny.";
// Banning due to flooding
$locale['global_440'] = "Automatickı BAN od kontroly preteèenia"; //Automatic Ban by Flood Control
$locale['global_441'] = "Váš úèet ".$settings['sitename']."bol zabanovanı";
$locale['global_442'] = "Ahoj [USER_NAME],\n
Váš úèet ".$settings['sitename']." bol pre prive¾a príspevkov v krátkom èase z IP ".USER_IP.", pozastavenı. Jedná sa o prevenciu pred SPAM-botmi s mnostvom príspevkov.\n
Prosím kontaktujte hlavného administrátora cez ".$settings['siteemail']." na uvo¾nenie úètu, ak sa nejedná o porušenie bezpeènosti.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Doèasné pozastavenie automaticky zrušené systémom";
$locale['global_451'] = "Doèasné pozastavenie zrušené na ".$settings['sitename'];
$locale['global_452'] = "Ahoj USER_NAME,\n
Doèasné pozastavenie vášho úètu na ".$settings['siteurl']." bolo zrušené. Tu sú detaily vášho loginu:\n
Uívate¾ské meno: USER_NAME
Heslo: Skryté z bezpeènostnıch dôvodov\n
Ak ste zabudli heslo, kliknite na nasledujúci link: LOST_PASSWORD\n\n
s pozdravom,\n
".$settings['siteusername'];
$locale['global_453'] = "Ahoj USER_NAME,\n
Doèasné pozastavenie vášho úètu na ".$settings['siteurl']." bolo zrušené.\n\n
s pozdravom,\n
".$settings['siteusername'];
$locale['global_454'] = "úèet obnovenı na ".$settings['sitename'];
$locale['global_455'] = "Ahoj USER_NAME,\n
Posledne ste boli prihlásenı v obnovenom úète na ".$settings['siteurl']." a váš úèet u nie je oznaèenı ako neaktívny.\n\n
s pozdravom,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Prázdny";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Budete presmerovanı do %s, prosím, èakajte. Ak ste neboli presmerovanı, kliknite sem.";

// Captcha Locales
$locale['global_600'] = "Validaènı kód";
$locale['recaptcha'] = "sk";

//Miscellaneous
$locale['global_900'] = "Nemono previes HEX na DEC";
?>              