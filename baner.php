<?php
require_once ('Cookie.php');
$cookie=new Cookie();
$activBaner=$cookie->select("baner")??"";

if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $cookie->save("baner",$_POST['baner'],time()+2592000);

}
if($activBaner!='off'){
    echo '<div>Baner</div>';
}
?>

<form action="" method = 'post'>
    <input type="hidden" name="baner" value="off">
    <input type="submit" value="Выключить">
</form>