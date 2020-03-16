<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 15.03.2020
 * Time: 20:56
 */
require_once ('Cookie.php');
$cookie=new Cookie();
$lastVisit=floor((time()-($cookie->select("lastVisit")??time()))/86400);
$cookie->save("lastVisit",time(),time()+31536000);

echo "последний раз вы посетили наш сайт $lastVisit дней назад";

?>