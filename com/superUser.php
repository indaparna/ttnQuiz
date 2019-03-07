<?php

include $_SERVER['DOCUMENT_ROOT'].'/com/db.php' ;

class superUser extends connectDb
{
    public function register($userObj)
    {
        $instance=parent::getInstance();
        $conn=$instance->getConnection();
        try
        {
            $sth = $conn->prepare("INSERT INTO user (`user_name`, `user_pass` ,`user_type`) VALUES ('{$userObj['username']}','{$userObj['pass']}' ,'{$userObj['usertype']}')");
            $result = $sth->execute();
            if($result)
            {
                echo "record inserted successfully !<br>";
                echo "you are ready for Login<br>";
                echo "<a href='/com/login.php'>Login Page</a>";
                // header("location: ../../com/login/login.php");
            }
            else
            {
                echo "Something Went Wrong!!! Please Check The Error";
            }
        }
        catch(PDOException $e)
        {   
            echo $e;
            echo "DUPLICATE ENTRY FOUND PLEASE TRY ANOTHER USERNAME";
        }
    }

    public function login($userObj)
    {
        $instance=parent::getInstance();
        $conn=$instance->getConnection();
        $sth1 = $conn->prepare("SELECT * from user where `user_name` = '{$userObj['username']}' AND `user_pass` = '{$userObj['pass']}' AND `user_type` = '{$userObj['usertype']}'");
        $result1 = $sth1->execute();
        if($sth1->fetch())
        {
            // $session->__set("USER_LOGIN",TRUE);
            // print_r( $_SESSION);
            echo "User Validated Successfully <br>";
            echo "You Can Start The Quiz Now";
            echo "<a href='/user/startQuiz.php'>TAKE TEST</a>";
            // header('location: ../../user/userDashboard.php');
            // die();
        }
        else{
            echo "User Not Found!!";
            echo "<a href='login.php'>Back To Login</a>";            
        }
    }

}

?>