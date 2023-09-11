<?php
    $a = filter_input(INPUT_POST, "ten");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="in_loi_chao.php" method="post">
        <table border = "1px" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <td colspan = "2">In lời chào</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><label for="">Họ tên bạn</label></td>
                    <td><input type="text" name="ten" id=""></td>
                </tr>
          
                <?php
                    if(isset($a))echo "Xin chào $a";
                ?>
                
                <tr><td colspan = "2"><input type="submit" value="Xuất"></td></tr>
            </tbody>
        </table>

    </form>
</body>
</html>