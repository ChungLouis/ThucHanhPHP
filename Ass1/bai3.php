<?php
    $a = filter_input(INPUT_POST, "a", FILTER_VALIDATE_INT);
?>

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
    <form action="so_thanh_chu.php" method="post">
        <table border = "1px" style="border-collapse: collapse;">
            <thead>
                <tr><td colspan="3"><b>Đọc số</b></td></tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập số (0-9)</td>
                    <td rowspan="2"><input type="submit" value="Submit"></td>
                    <td>Bằng chữ</td>
                </tr>
                <tr>
                    <td><input type="number" name="a" id=""></td>
                    <td>
                        <p>
                            <?php
                                if(isset($a)){
                                    $c = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
                                    if($a < 10 && $a >= 0)
                                        echo $c[$a]; 
                                    else echo 'Dữ liệu không hợp lệ';
                                    }
                            ?>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>