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
                echo "<a href='../../com/login/login.php'>Login Page</a>";
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
}

?>