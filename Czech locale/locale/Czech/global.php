<?php
/*
Czech Language Fileset
Produced by perteus (PHP-Fusion Czech Magaizne Mods)
Email: perteus@volny.cz
Web: http://www.phpfusion-mod.cz 
Thenks to:
LaKy
Web: http://www.laky4ever.ic.cz/
Mikwe - PHP-Fusion Czech 
Web: http://www.phpfusion.cz
EcLiPs - Prografika
Web: http://www.prografika.cz
*/



// Locale Settings
setlocale(LC_TIME, "cs_CS.utf8","CS"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['xml_lang'] = "cs";
$locale['tinymce'] = "cs";
$locale['phpmailer'] = "cs";

// Full & Short Months
$locale['months'] = "&nbsp|Leden|Únor|Březen|Duben|Květen|Červen|Červenec|Srpen|Září|Říjen|Listopad|Prosinec";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|Máj|Jún|Júl|Aug|Sept|Okt|Nov|Dec";

// Standard User Levels
$locale['user0'] = "Veřejnost";
$locale['user1'] = "Člen";
$locale['user2'] = "Administrátor";
$locale['user3'] = "Hlavní Administrátor";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderátor";
// Navigation
$locale['global_001'] = "Navigace";
$locale['global_002'] = "Žádné odkazy nebyly nefinovány";
// Users Online
$locale['global_010'] = "Kdo je On-line";
$locale['global_011'] = "Hosté On-line";
$locale['global_012'] = "Členové On-line";
$locale['global_013'] = "Žádný člen není on-line";
$locale['global_014'] = "Registrovaní členové";
$locale['global_015'] = "Neaktivní členové";
$locale['global_016'] = "Nejnovější člen";
// Forum Side panel
$locale['global_020'] = "Diskuze Fóra";
$locale['global_021'] = "Nejnovější diskuze";
$locale['global_022'] = "Nejdiskutovanější";
$locale['global_023'] = "Žádná dískuze";
// Articles Side panel
$locale['global_030'] = "Poslední články";
$locale['global_031'] = "Zatím nejsou žádné články";
// Welcome panel
$locale['global_035'] = "Vítejte";
// Latest Active Forum Threads panel
$locale['global_040'] = "Poslední aktivní diskuze Fóra";
$locale['global_041'] = "Moje diskuze";
$locale['global_042'] = "Moje příspěvky";
$locale['global_043'] = "Nové příspěvky";
$locale['global_044'] = "Diskuze";
$locale['global_045'] = "Zhlédnuté";
$locale['global_046'] = "Odpovězeno";
$locale['global_047'] = "Poslední příspěvek";
$locale['global_048'] = "Fórum";
$locale['global_049'] = "Přidané";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Anketa";
$locale['global_052'] = "Přesunul";
$locale['global_053'] = "Nezaložili jste zatím žádnou diskuzi.";
$locale['global_054'] = "Zatím jste do fóra nepřispěvli žádným příspěvkem.";
$locale['global_055'] = "Od vaší poslední návštěvy bylo napsaných %u nových příspěvků.";
$locale['global_056'] = "Moje sledované diskuze";
$locale['global_057'] = "Nastavení";
$locale['global_058'] = "Zastavit";
$locale['global_059'] = "Nesledujete žádnou diskuzi.";
$locale['global_060'] = "Zastavit sledování diskuzí?";
// News & Articles
$locale['global_070'] = "Přidal ";
$locale['global_071'] = "dne ";
$locale['global_072'] = "Přečíst vše";
$locale['global_073'] = " Komentářů";
$locale['global_074'] = " x Přečtené";
$locale['global_075'] = "Tisk";
$locale['global_076'] = "Upravit";
$locale['global_077'] = "Novinky";
$locale['global_078'] = "Zatím nebyly napsané žádné novinky";
// Page Navigation
$locale['global_090'] = "Zpět";
$locale['global_091'] = "Další";
$locale['global_092'] = "Strana ";
$locale['global_093'] = " z ";
// Guest User Menu
$locale['global_100'] = "Přilášení";
$locale['global_101'] = "Jméno";
$locale['global_102'] = "Heslo";
$locale['global_103'] = "Pamatuj si mě";
$locale['global_104'] = "Přihlásit";
$locale['global_105'] = "Nejste členem?<br /><a href='".BASEDIR."register.php' class='side'><strong>Klikněte sem</strong></a><br /> a zaregistrujte se.";
$locale['global_106'] = "Zapoměli jste heslo?<br />Pro zaslání nového  <br /><a href='".BASEDIR."lostpassword.php' class='side'><strong>Klikněte sem</strong></a>.";
$locale['global_107'] = "Registrace";
$locale['global_108'] = "Zapomenuté heslo";
// Member User Menu
$locale['global_120'] = "Upravit profil";
$locale['global_121'] = "Soukromé zprávy";
$locale['global_122'] = "Seznam členů";
$locale['global_123'] = "Administrační sekce";
$locale['global_124'] = "Odhlásit";
$locale['global_125'] = "Máte %u novou/nové ";
$locale['global_126'] = "zprávu";
$locale['global_127'] = "zprávy";
// Poll
$locale['global_130'] = "Anketa";
$locale['global_131'] = "Hlasovat";
$locale['global_132'] = "Aby jste mohli hlasovat, musíte být přihlášený.";
$locale['global_133'] = "Hlas";
$locale['global_134'] = "Hlasy";
$locale['global_135'] = "Hlasy: ";
$locale['global_136'] = "Začátek hlasování: ";
$locale['global_137'] = "Konec hlasování: ";
$locale['global_138'] = "Archív anket";
$locale['global_139'] = "Vyber anketu ze seznamu:";
$locale['global_140'] = "Zobrazit";
$locale['global_141'] = "Zobrazit anketu";
$locale['global_142'] = "Zatím nejsou žádné ankety.";
// Shoutbox
$locale['global_150'] = "Shoutbox";
$locale['global_151'] = "Jméno:";
$locale['global_152'] = "Zpráva:";
$locale['global_153'] = "Odeslat";
$locale['global_154'] = "Aby jste mohli přídávat zprávy do shoutboxu, musíte být příhlášený.";
$locale['global_155'] = "Archív shoutboxu";
$locale['global_156'] = "Žádné zprávy.";
$locale['global_157'] = "Vymazat";
$locale['global_158'] = "Validační kód:";
$locale['global_159'] = "Zadajte validačný kód:";
// Footer Counter
$locale['global_170'] = "návštěv";
$locale['global_171'] = "návštěv";
$locale['global_172'] = "Vygenerované za: %s sekund";
// Admin Navigation
$locale['global_180'] = "Admin Index";
$locale['global_181'] = "Zpět na stránku";
$locale['global_182'] = "<strong>Poznámka:</strong> Admin heslo nebylo zadané, nebo je chybné.";
// Miscellaneous
$locale['global_190'] = "Mód údržby byl aktivován";
$locale['global_191'] = "Z této IP adresy nemáte povolený přístup na tuto stránku.";
$locale['global_192'] = "Odhlašuji vás jako  ";
$locale['global_193'] = "Přihlašuji vás jako ";
$locale['global_194'] = "Váš účet je zablokovaný.";
$locale['global_195'] = "Tento účet nebyl aktivován.";
$locale['global_196'] = "Nesprávné jméno nebo heslo.";
$locale['global_197'] = "Počkejte prosím. Přihlašování může chvíli trvat...<br /><br />
[ <a href='index.php'>Pokud se stránka nezobrazí do 10 sekund klikněte sem.</a> ]";
$locale['global_198'] = "<strong>Upozornění:</strong> setup.php nebyl smazán. Smažte jej co nejdříve.";
$locale['global_199'] = "<strong>Upozornění:</strong> Není nastavené Admin heslo. Klikněte na <a href='edit_profile.php'>Editovat profil</a> a nastavte ho.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Vyhledávání";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Fórum";
//Themes
$locale['global_210'] = "Vynechat obsah";
// No themes found
$locale['global_300'] = "vzhled nenalezen";
$locale['global_301'] = "Velmi se omlouváme, ale nezle tuto stránku zobrazit. Díky neznámým komplikacím nelze najít Thmes (vzhled) stránky. Pokud jste adminem stránek, použíjte FTP program a nahrajte do složky <em>themes/</em> vzhled, který je určen pro <em>PHP-Fusion v7</em>. Poté přejděte do <em>Hlavního nastavení</em> a zkontrolujte, jestli vzhled, který jste nahráli do složky  <em>themes/</em> je zde v seznamu dostupných vzhledů. Pokud se zde vzhled nachází, zkontrolujte ještě, že adresář vzhledu má stejný název, jaký je obsažen v souborech (důležité jsou malá a velká písmena, která se rozlišují), jestli je vše v porřádku tak vyberte vzhled v <em>Hlavním nastavení</em> a uložte.<br /><br />Jestliže jste pouze návštěvník stránek, kontaktujte administrátora stránky na jeho emailu: ".hide_email($settings['siteemail'])." a oznamte chybu na stránce.";
$locale['global_302'] = "Vzhled, který jste nastavili v Hlavním nastevení neexistuje, nebo je nekompletní!";


?>
