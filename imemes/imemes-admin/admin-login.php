<?php session_start(); ?>
<head>
    <link rel="stylesheet" href="admin-css/css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div id="body-login">
        <div class="log-logo">
            <img src="https://upload.wikimedia.org/wikipedia/vi/b/be/Lineage_OS_Logo.png" alt="logo" class="log-logo">
        </div>
        <div class="form-style">
            <form action="" method="get">
                <table>
                    <tr>
                        <td><i class="form-style material-icons custom-adlog">account_box</i></td>
                        <td><input type="text" id="txtUser" name="txtUser" required></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><i class="form-style material-icons custom-adlog">vpn_key</i></td>
                        <td><input type="password" id="txtPass" name="txtUser" required></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" id="btnSub" name="btnSub" value="Login">
                            <input type="reset" id="btnCancel" name="btnCancel" value="Cancel">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
<?php
    include ("admin-config/connection.php");
    if (isset($_GET['btnSub'])){
        $user = addcslashes($_GET['txtUser'])
    }
?>