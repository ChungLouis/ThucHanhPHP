<?php

// // Đầu tiên, các biến được khởi tạo bằng cách lấy giá trị từ dữ liệu được gửi đến trang web thông qua phương thức POST
// $product_description = $_POST['product_description'];
// $list_price = $_POST['list_price'];
// $discount_percent = $_POST['discount_percent'];

// // tính toán giá trị chiết khấu và giá sau khi áp dụng chiết khấu:
// $discount = $discount_percent * $list_price * .01;
// $discount_price = $list_price - $discount;

// // Sau khi tính toán, các biến sau đó được định dạng thành chuỗi có định dạng dựa trên đồng tiền và phần trăm:
// $list_price_f = "$" . number_format($list_price, 2);
// $discount_percent_f = number_format($discount_percent, 1) . "%";
// $discount_f = "$" . number_format($discount, 2);
// $discount_price_f = "$" . number_format($discount_price, 2);


/** 
 * filter_input() là một hàm trong PHP được sử dụng để lấy dữ liệu từ một biến siêu toàn cục như 
 * $_POST, $_GET, $_REQUEST, hoặc $_COOKIE và thực hiện việc lọc dữ liệu đó dựa trên các quy tắc cụ thể 
 * được xác định bởi người lập trình. Hàm này giúp đảm bảo rằng dữ liệu đầu vào là an toàn và được kiểm 
 * tra trước khi sử dụng, từ đó giúp ngăn chặn các loại tấn công bảo mật như tấn công SQL Injection hoặc 
 * Cross-Site Scripting (XSS).
 */

$product_description = filter_input(INPUT_POST, 'product_description');
$list_price = filter_input(INPUT_POST, 'list_price');
$discount_percent = filter_input(INPUT_POST, 'discount_percent');

$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;

$list_price_f = "$" . number_format($list_price, 2);
$discount_percent_f = $discount_percent . "%";
$discount_f = "$" . number_format($discount, 2);
$discount_price_f = "$" . number_format($discount_price, 2);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_f; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
    </main>
</body>

</html>