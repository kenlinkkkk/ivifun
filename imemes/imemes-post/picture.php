<?php
    include "post-config/connection.php";

?>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <form action="picture.php" method="get">
        <table>
            <tr>
                <td colspan="3">Đường dẫn/ URL:</td>
            </tr>
            <tr>
                <td><i class="material-icons">code</i></td>
                <td><input type="text" name="txtPath"></td>
                <td><input type="submit" name="upload" value="Upload"></td>
            </tr>
        </table>
    </form>
</body>
<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 08/22/2018
 * Time: 03:05 AM
 */