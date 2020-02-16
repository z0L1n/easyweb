<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form  method="get">
    <fieldset>
        <legend>用户登录</legend>
        <ul>
            <li>
                <label>用户名:</label>
                <input type="text" name="username">
            </li>
            <li>
                <label>密   码:</label>
                <input type="password" name="password">
            </li>
            <li>
                <label> </label>
                <input type="checkbox" name="remember" value="yes">7天内自动登录
            </li>
            <li>
                <label> </label>
                <input type="submit" name="login" value="登录">
            </li>
        </ul>
    </fieldset>
</form>
</body>
<?php
$admin=@$_GET['username'];
$pass=@$_GET['password'];
if($pass==='3346'&&$admin==='admin')
    print 'flag{64646}';
elseif($pass!=''){
    print 'wrong password or wrong username';
    exit();
}

?>
</html>