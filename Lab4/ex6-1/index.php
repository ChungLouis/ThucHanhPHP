<!DOCTYPE html">
<html>
<head>
    <title>Tính tiền lãi</title>
    <link rel="stylesheet" href="main.css"/>
</head>

<body>
    <section>
    <h1>Tính tiền lãi</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Số tiền gửi:</label>
            <input type="text" name="investment"
                   value="<?php if (isset($investment)) { echo $investment; } ?>"/><br />

            <label>Lợi nhuận mỗi năm:</label>
            <input type="text" name="interest_rate"
                   value="<?php if (isset($interest_rate)) { echo $interest_rate; } ?>"/><br />

            <label>Số năm gửi:</label>
            <input type="text" name="years"
                   value="<?php if (isset($years)) { echo $years; } ?>"/><br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
    </section>
</body>
</html>