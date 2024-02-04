<!DOCTYPE html>
<html>
    <head>
        <title>قله ها</title>
        <link href="../IMG/fovIco.png" rel = "shortcut icon">
        <meta charset="UTF-8">
    </head>
    <body dir = "rtl">
        <?php
            if(isset($_POST['TxtUserName']) && !empty($_POST['TxtUserName'])
             && isset($_POST['TxtPassword']) && !empty($_POST['TxtPassword'])){
                $userName = $_POST['TxtUserName'];
                $password = $_POST['TxtPassword'];
                echo "<p>کاربر '$userName' با رمز '$password' وارد شد</p>";
            }
            else{
                echo"ورود نا ممکن";
            }

        ?>
        <!--table border="1">
            <thead>
                <tr>
                    <th>آیدی</th>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>هادی</td>
                    <td>باقری</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>علی</td>
                    <td>سرحدی</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>علی</td>
                    <td>غیر سرحدی</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
        </table-->
    </body>
</html>