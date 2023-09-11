<?php
    $ketqua;
    if(isset($_POST["a"]) && isset($_POST["b"])){
        $a = $_POST["a"];
        $b = $_POST["b"];


        if($a == "" || $b == ""){
            $ketqua = '<br>Bạn chưa nhập dữ liệu';
            // exit();
        }
        else {
            if($a == 0 && $b == 0){
                $ketqua = "<br>Phương trình có vô số nghiệm";
            }
            else if($a == 0 && $b != 0){
                $ketqua = "<br>Phương trình vô nghiệm";
            }
            else if($a != 0 && $b != 0){
                $res = -$b / $a;
                $ketqua = "<br>Phương trình có nghiệm:
                    x = $res
                ";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            text-align: center;
        }
        #btn{
            border: 0px;
            width: 100%;
            font-size: 1.1rem;
            background-color: white;
        }
    </style>
</head>
<body>
    <form action="giai_PT_bac1.php" method="post">
        <table style="border-collapse: collapse;" border="1px;">
            <thead>
                <tr>
                    <td colspan = "2"><b>Giải phương trình bậc một</b></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span>Phương trình: </span><input type="number" name="a" id=""><span> X + </span> <input type="number" name="b" id=""> <span> = 0</span>
                        <span>
                            <?php
                                if(isset($ketqua)){
                                    echo $ketqua;
                                }
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan = "2"><input type="submit" value="Tính toán (Enter)" id="btn"></td>
                </tr>
            </tbody>
        </table>

    </form>
</body>
</html>