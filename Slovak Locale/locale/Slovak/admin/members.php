<?php
// Member Management Options
$locale['400'] = "Uívatelia";
$locale['401'] = "Meno";
$locale['402'] = "Prida nového uívate¾a";
$locale['403'] = "Typ úètu";
$locale['404'] = "Nastavenia";
$locale['405'] = "Náh¾ad";
$locale['406'] = "Upravi";
$locale['407'] = "Aktivova";
$locale['408'] = "Odbanova";
$locale['409'] = "Zabanova";
$locale['410'] = "Vymaza";
$locale['411'] = "Neexistujú iadny %s uívatelia";
$locale['412'] = " zaèínajúci na ";
$locale['413'] = " obsahujúci ";
$locale['414'] = "Ukáza všetkıch";
$locale['415'] = "H¾ada uívate¾a:";
$locale['416'] = "H¾ada";
$locale['417'] = "Vybra akciu";
$locale['418'] = "Ukonèenie";
$locale['419'] = "Obnovi";
// Ban/Unban/Delete Member
$locale['420'] = "Zabanovanı";
$locale['421'] = "Odbanovanı";
$locale['422'] = "Uívate¾ bol vymazanı";
$locale['423'] = "Ste si istı, e chcete vymaza tohoto uívate¾a?";
$locale['424'] = "Uívate¾ aktivovanı";
$locale['425'] = "<h2>Upozornenie!</h2><br />
Ak chcete odstráni uívate¾a <strong>%s</strong> !<br />
Nasledujúci obsah <u>pridanı tımto uívate¾om</u> na tejto stránke bude odstránenı, ak budete pokraèova:<br />
- Èlánky<br />
- Novinky<br />
- Fórum témy. Príspevky v tıhto témach od inıch uívate¾ov budú tie odstránené.<br />
- Fórum príspevky<br />
- Fórum prílohy<br />
- Komentáre<br />
- Súkromné správy<br />
- Hlasy v anketách<br />
- Hodnotenia<br />
Ak uívate¾ nieje BOT alebo spammer, odporúèame vám mu da ban, deaktivova alebo mu skry jeho úèe.<br />
<br />
Ste si istı, e chcete odstráni tohto uívate¾a?<br />";
$locale['426'] = "Áno";
$locale['427'] = "Nie";
// Edit Member Details
$locale['430'] = "Upravi uívate¾a";
$locale['431'] = "Detaily uívate¾a boli aktualizované";
$locale['432'] = "Návrat do administrácie uívate¾ov";
$locale['433'] = "Návrat do administrátorského indexu";
$locale['434'] = "Detaily uívate¾a sa nedajú upravi:";
// Extra Edit Member Details form options
$locale['440'] = "Uloi zmeny";
// Update Profile Errors
$locale['450'] = "Nemôem upravi hlavného administrátora.";
$locale['451'] = "Musíte zada meno a e-mailovú adresu.";
$locale['452'] = "Meno obsahuje nepovolené znaky.";
$locale['453'] = "Meno ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." u niekto pouíva. Zvo¾te si prosím iné.";
$locale['454'] = "Nesprávna e-mailová adresa.";
$locale['455'] = "Emailovú adresu ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." u niekto pouíva. Zvo¾te si prosím inú.";
$locale['456'] = "Nové heslá sa nezhodujú.";
$locale['457'] = "Nesprávne heslo. Pouívajte len alfa-numerické znaky.<br>
Heslo musí ma minimálne 6 znakov.";
$locale['458'] = "<strong>Upozornenie:<strong> nepovolené spustenie skriptu.";
// View Member Profile
$locale['470'] = "Profil";
$locale['472'] = "Štatistiky";
$locale['473'] = "Uívate¾ské skupiny";
// Add Member Errors
$locale['480'] = "Prida uívate¾a";
$locale['481'] = "Konto bolo úspešne vytvorené.";
$locale['482'] = "Konto nebolo vytvorené.";
// Suspension Log 
$locale['510s'] = "Záznam o pozastavení pre ";
$locale['511s'] = "Nie je záznam o pozastavení pre tohto uívate¾a.";
$locale['512s'] = "Predošlé pozastavenia v ";
$locale['513'] = "È."; // as in number
$locale['514'] = "Dátum";
$locale['515'] = "Dôvod";
$locale['516'] = "Pozastavujúci administrátor";
$locale['517'] = "Akcia systému";
$locale['518'] = "Spä do profilu uívate¾a";
$locale['519'] = "Záznam o pozastavení pre tohto uívate¾a ";
$locale['520'] = "Vyòatı: ";
$locale['521'] = "IP: ";
$locale['522'] = "Zatia¾ neobnovenı";
$locale['540'] = "Chyba";
$locale['541'] = "Chyba: Musíte uvies dôvod pre pozastavenie!";
$locale['542'] = "Chyba: Musíte uvies dôvod pre bezpeènostnı BAN!";
// User Management Admin
$locale['550'] = "Pozastavenı uívate¾: ";
$locale['551'] = "Pozastavenie v dòoch:";
$locale['552'] = "Dôvod:";
$locale['553'] = "Pozastavenie";
$locale['554'] = "Nie je záznam o pozastavení pre tohto uívate¾a.";
$locale['555'] = "Ak ste sa rozhodli, e tento uívate¾ by mal by pozastavenı, kliknite na 'Ban'";
$locale['556'] = "Vyòatie z pozastavenia uívate¾a: ";
$locale['557'] = "Vyòatie z pozastavenia";
$locale['558'] = "Vyòatie z banu uívate¾a: ";
$locale['559'] = "Vyòatie z banu ";
$locale['560'] = "Vyòatie z bezpeènostného banu uívate¾a: ";
$locale['561'] = "Vyòatie z bezpeènostného banu";
$locale['562'] = "Ban uívate¾a: ";
$locale['563'] = "Bezpeènostnı Ban uívate¾a: ";
$locale['585a'] = "Prosím uveïte dôvod, preèo je banovanı/odbanovanı ";

$locale['566'] = "Ban vyòatı";
$locale['568'] = "Bezpeènostnı Ban danı";
$locale['569'] = "Bezpeènostnı Ban vyòatı";
$locale['572'] = "Pozastavenı uívate¾";
$locale['573'] = "Pozastavenie vyòaté";
$locale['574'] = "Deaktivovanı uívate¾";
$locale['575'] = "Reaktivovanı uívate¾";
$locale['576'] = "Úèet ukonèenı";
$locale['577'] = "Úèet nebol ukonèenı";
$locale['578'] = "Úèet zrušenı a utajenı";
$locale['579'] = "Úèet nebol utajenı";
$locale['580'] = "Deaktivácia neaktívnych uívate¾ov";
$locale['581'] = "Máte viac ne 50 neaktívnych uívate¾ov a budete musie spusti deaktivaènı proces <strong>%d èasov</strong>.";
$locale['582'] = "Reaktivácia";
$locale['583'] = "Obnovenie";
$locale['584'] = "Vyberte novú funkciu";
$locale['585'] = "Tento uívate¾ bol pôvodne zakázanı z bezpeènostnıch dôvodov! Ste si istı, e chcete zruši zákaz tohto uívate¾a ?";

$locale['590'] = "Pozastavenie";
$locale['591'] = "Obnovenie";
$locale['592'] = "pozastavenie";
$locale['593'] = "obnovenie";
$locale['594'] = "Zadajte prosím dôvod, preèo ste  ";
$locale['595'] = " uívate¾ ";
$locale['596'] = "Trvanie:";

$locale['600'] = "Bezpeènostnı ban";
$locale['601'] = "bezpeènostné banovanie";
$locale['602'] = "Odban";
$locale['603'] = "odbanovanie";
$locale['604'] = "Dôvod:";
// Deactivation System
$locale['610'] = "<strong>%d uívate¾(s)</strong> nebol prihlásenı <strong>%d deò(dní)</strong> a bol oznaèenı ako neaktívny. 
Deaktivovaním budú ma títo uívatelia <strong>%d dní(s)</strong> predtım, ne sú %s.";
$locale['611'] = "Vezmite prosím na vedomie, e niektorí uívatelia môu ma predloenı obsah na vašich stránkach, ako sú fóra, komentáre, fotky atï.
tie budú vymazané spolu s deaktivovaním uívate¾a.";
$locale['612'] = "uívate¾";
$locale['613'] = "uívatelia";
$locale['614'] = "Deaktivácia";
$locale['615'] = "úplne zmazanı";
$locale['616'] = "utajenie";
$locale['617'] = "Varovanie:";
$locale['618'] = "Doporuèuje sa zmeni deaktivaènú akciu na anonimizáciu, aby sa nestratili dáta!";
$locale['619'] = "Môete tak urobi <a href='".ADMIN."settings_users.php".$aidlink."'>TU</a>.";
$locale['620'] = "utajenie";
$locale['621'] = "Automatická deaktivácia neaktívnych uívate¾ov.";
?>                     