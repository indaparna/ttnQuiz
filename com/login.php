<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" media="screen" href="loginStyle.css">
</head>
<body>
    <form action="userFactory.php" method="post">
        <div class="title">Login Form</div><br>
        <div>
            <input type="text" name="username"  autocomplete="off" required>
            <label>Username</label>
        </div>
        <div>
            <input type="text" name="pass" autocomplete="off" required>
            <label>Password</label>
        </div>
        <div>
            <select name="usertype">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <!-- <div><a href='../../user/register/register.php'>Create an Account?</a></div> -->
        <input type="submit" name="submit" id="submit" value="Login">
    </form>
</body>
</html>