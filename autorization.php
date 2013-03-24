<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Sign in/up | Restorative car</title>
    </head>
    <body>
    <?php
    include_once "authorizationHeader.php";
    ?>
        <div class="Autorizer form" align=center>
            <form action = "autorizer.php" method = "post">
                <table border="1" cols="2">
                    <tr align="center">
                        <td><h1>Welcome to the future!</h1></td>
                    </tr>
                    <tr align="center">
                        <td><input type="textbox" name="email" maxlength="30" value="email"></td>
                    </tr>
                    <tr align="center">
                        <td><input type="textbox" name="password" maxlength="15" value="password"></td>
                    </tr>
                    <tr align="center">
                        <td><input type="submit" value="Sign in">
                            <input type="submit" value="Sign up"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>