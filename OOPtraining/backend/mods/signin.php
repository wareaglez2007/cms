<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
    <head>
        <title>Login-Account</title>
    </head>
    <body>
        <fieldset>
            <legend>Login</legend>
            <form action="signin.php" method="get">
                <ul>
                    <li><label for="username">Username:</label></li>
                    <li><input type="text" name="uname" palceholder="Username"/></li>
                     <li><label for="password">Password:</label></li>
                    <li><input type="password" name="pass" palceholder="password"/></li>
                    <li><input type="submit" value="Login" name="submit"/></li>
                </ul>
                 
            </form>
        </fieldset>
    </body>
</html>