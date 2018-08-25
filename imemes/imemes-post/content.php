<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 08/19/2018
 * Time: 02:55 PM
 */
    require_once "post-config/connection.php";
    if (isset($_POST['btnSub'])){
        echo "hello";
        $data = $_POST['editor1'];
//        $title =$_GET['txtTitle'];
    $cmd = "INSERT INTO imeme.tblpost(test) VALUES('$data');";

    mysqli_query($cnt, $cmd);
}
?>
<head>
    <script src="js/ckeditor/ckeditor.js"></script>
</head>
<body>
<form action="content.php" method="post">
    <table>
        <tr>
            <td>Tiêu đề</td>
            <td><input type="text" name="txtTitle" style="width: 100%"></td>
        </tr>
        <tr>
            <td>Tag</td>
            <td><input type="text" name="txtTag" style="width: 100%;"></td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="editor1" id="editor1" rows="30" cols="80"></textarea></td>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="btnSub" value="Upload">
                <input type="reset" name="btnReset" value="Cancel">
            </td>
        </tr>
    </table>
</form>

</body>
