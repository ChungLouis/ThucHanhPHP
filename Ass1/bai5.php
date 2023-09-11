<?php
    $a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_FLOAT);
    $b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_FLOAT);
    $c = filter_input(INPUT_POST, 'c',FILTER_VALIDATE_FLOAT);

    $del = $b * $b - 4 * $a * $c;
    $ketqua = '';
    if($a == 0 && $b == 0 && $c == 0)
        $ketqua = 'Phương trình có vô số nghiệm';
    else if($del < 0)
        $ketqua = 'Phương trình vô nghiệm';
    else if($del == 0){
        $x = (-$b + $del**0.5) / 2 / $a;
        $ketqua = 'Phương trình có nghiệm x1 = x2 = '.$x;
    }
    else {
        $x1 = (-$b + $del**0.5) / 2 / $a;
        $x2 = (-$b - $del**0.5) / 2 / $a;
        $ketqua = 'Phương trình có nghiệm x1 = '.$x1.'<br>Phương trình có nghiệm x2 = '.$x2 ;
    }    
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
    <form action="bai5.php" method="post">
        <table border="1px" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <td><b>Giải phương trình bậc 2</b></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Phương trình
                    </td>
                    <td><input type="number" name="a" id=""></td>
                    <td>
                        X^2 +
                    </td>
                    <td><input type="number" name="b" id=""></td>
                    <td>
                        X + 
                    </td>
                    <td><input type="number" name="c" id=""></td>
                    <td>
                        = 0
                    </td>
                </tr>
                <tr>
                    <td>Nghiệm</td>
                    <td colspan = "6">
                        <?php
                            echo $ketqua;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan = "7">
                        <button type="submit">Xuất</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>