<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 15.03.2020
 * Time: 18:17
 */
class Cookie
{
    public function save($name,$value,$expires=0,$path='/')
    {
        setcookie($name,$value,$expires,$path);

        return;
    }
    public function delete($name,$path= "/")
    {
        setcookie($name,null,-1,$path);

        return;
    }
    public function select($name)
    {

        return $_COOKIE[$name];
    }
}