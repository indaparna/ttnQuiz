<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" media="screen" href="registerStyle.css">
</head>
<body>
    <form action="userFactory.php" method="post">
        <div class="title">Registration Form</div><br>
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
        <input type="submit" name="submit" id="submit" value="Register">
    </form>
</body>
</html>