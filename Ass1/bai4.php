.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="bai4.php" method="post">
        <table border="1px" style="border-collapse: collapse;">
            <tbody>
                <tr>
                    <td></td>
                    <td>Số bắt đầu</td>
                    <td><input type="number" name="a" id=""></td>
                    <td>Số kết thúc</td>
                    <td><input type="number" name="b" id=""></td>
                </tr>
                <tr>
                    <td colspan = "5">Kết quả</td>
                </tr>
                <tr>
                    <td>Tổng các số</td>
                    <td colspan = "4">
                        <?php
                            if(isset($tong))echo $tong;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Tích các số</td>
                    <td colspan = "4">
                        <?php
                            if(isset($tich))echo $tich;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Tổng các số chẵn</td>
                    <td colspan = "4">
                        <?php
                            if(isset($tongchan))echo $tongchan;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Tổng các số lẻ</td>
                    <td colspan = "4">
                        <?php
                            if(isset($tongle))echo $tongle;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan = "5"><input type="submit" value="Tính toán"></td>
                </tr>
            </tbody>
        </table>

    </form>
    
</body>
</html>