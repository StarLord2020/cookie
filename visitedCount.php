<?php
require_once ('Cookie.php');
$cookie=new Cookie();
$count=$cookie->select("countVisited")??0;
$count++;
$cookie->save("countVisited",$count,time()+31536000);

echo "Вы посетили наш сайт $count раз!";


