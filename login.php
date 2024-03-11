<html>
    <body>
        <?php
            echo "登入頁面(開發中)";
        ?>
        <form action="register.php" method="post" autocomplete="off">
            <table>
                <tbody>
                    <tr>
                        <td><p>你的名稱</p></td>
                        <td><input type="text" name="userName" placeholder="輸入名稱"></input></td>
                    </tr>
                    <tr>
                        <td><p>密碼</p></td>
                        <td><input type="password" name="userName" placeholder="輸入密碼"></input></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="login-btn" value="登入"></input></td>
                        <td><a href="register.php"><input type="button" value="註冊"></input></a></td>
                    </tr>
                    <tr>
                        <td><input type ="button" onclick="history.back()" value="回到上一頁"></input></td>
                    </tr>
                </tbody>    
            </table>
        <form>
    </body>
</html>