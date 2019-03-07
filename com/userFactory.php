<?php

ini_set("display_errors","1");

function __autoload($classname)
{
    if($classname == 'user')
    {
        require_once $_SERVER['DOCUMENT_ROOT'].'/user/user.php' ;
    }
    if($classname == 'admin')
    {
        require_once $_SERVER['DOCUMENT_ROOT'].'/admin/admin.php' ;
    }
}

class userFactory
{
    public function getInstance($type)
    {
        if($type == 'user')
        {
            //echo "User";
            return new user();
        }
        elseif($type == 'admin')
        {
            //echo "admin";
            return new admin();
        }
        else
        {
            echo "Not A Valid Type";
        }
    }
}



if(isset($_POST['submit']))
{
    if($_POST['submit'] == 'Register')
    {
        $type = $_POST['usertype'];
        $factory = new userFactory($type);
        $userObj = $factory->getInstance($type);
        $userObj->register($_POST);
    }
}

if(isset($_POST['submit']))
{
    if($_POST['submit'] == 'Login')
    {
        $type = $_POST['usertype'];
        $factory = new userFactory($type);
        $adminObj = $factory->getInstance($type);
        $adminObj->login($_POST);
    }
}


?>