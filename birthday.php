<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 15.03.2020
 * Time: 21:26
 */
    require_once ('Cookie.php');
    $cookie=new Cookie();
    $nextBirthdayLeft = birthday($cookie->select('birthday'));

    if($_SERVER['REQUEST_METHOD']='POST')
    {
        $cookie->save("birthday",$_POST['date'],time()+31536000);
    }
    if($nextBirthdayLeft==0){

        echo "С Днем Рождения!";
    }
    else {

        echo  "До следующего дня рождения осталось $nextBirthdayLeft дней.";
    }
    function birthday($date)
    {
        $parseDate = explode('-',$date);
        $date = date('Y').'-'.$parseDate[1].'-'.$parseDate[2];
        $nextYear=(date('Y')+1).'-'.$parseDate[1].'-'.$parseDate[2];
        $diff = strtotime($date)-time();
        $dayNextBirthday=($diff>-86400)?$diff:strtotime($nextYear)-time();

        return ceil($dayNextBirthday/86400);
    }
?>

<form action="" method="post">
    <label for="">Введите дату рождения</label>
    <input type="date" name="date">
    <input type="submit">
</form>
