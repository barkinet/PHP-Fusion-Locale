<?php
//Slovak/reactivate.php 7.02.01 OK
// Error messages
$locale['500'] = "Došlo k chybe";
$locale['501'] = "Reaktivaènı link u nie je platnı.<br><br>
Kontaktujte hlavného administrátora cez <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> ak chcete poiada o ruènú reaktiváciu.";
$locale['502'] = "Reaktivaènı link je chybnı!<br><br>
Kontaktujte hlavného administrátora cez <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> ak chcete poiada o ruènú reaktiváciu.";
$locale['503'] = "Reaktivaènı link nemohol reaktivova váš úèet.<br>
Mono, e váš úèet u bol re-aktivovanı a v tom prípade by ste mali by schopnı <a href='".$settings['siteurl']."login.php'>prihlási sa tu</a>.<br><br>
Ak sa nemôete prihlási, kontaktujte hlavného administrátora cez <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> ak chcete poiada o ruènú reaktiváciu.";
// Send confirmation mail
$locale['504'] = "Úèet reaktivovanı pre ".$settings['sitename'];
$locale['505'] = "Ahoj [USER_NAME],\n
Váš úèet pre ".$settings['sitename']." bol reaktivovanı. Dúfame, e nás budete navštevova èastejšie.\n\n
s pozdravom,\n\n
".$settings['siteusername'];
$locale['506'] = "Reaktivovanı uívate¾.";
?>       