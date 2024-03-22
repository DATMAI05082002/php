<!DOCTYPE html>
<html>

<head>
    <title>Lập trình hướng đối tượng PHP</title>
    <!-- Unicode Vietnamese -->
    <meta charset="utf-8">
    <meta name="author" content="HuynhThaiHung.com" />
    <!-- Tệp định nghĩa css -->
    <link href="../lap1/style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <div class="row">
            <?php
            require_once("thanhvien.php"); // Bao gồm tệp thanhvien.php

            // Tạo thông tin thành viên mới
            $sv = new member("Nguyễn Văn A", "email1@gmail.com");
            // Xuất thông tin thành viên
            echo "<h2>-- Thông tin thành viên --</h2>";
            echo "Mã: " . $sv->get_id() . "<br/>";
            echo "Họ và tên: " . $sv->get_fullname() . "<br/>";
            echo "Email: " . $sv->get_email() . "<br/>";
            ?>
            <?php
            $sv2 = new member("Trần Văn B", "email2@gmail.com");
            echo "<h2>---Thông tin thêm--</h2>";
            echo "Mã: " . $sv2->get_id() . "<br/>";
            echo "Họ và tên: " . $sv2->get_fullname() . "<br/>";
            echo "Email: " . $sv2->get_email() . "<br/>";
            ?>
        </div>
        <footer>
            <p>Trendemy: <a href="trendemy.com">trendemy@gmail.com</a>.</p>
        </footer>
    </div>
</body>

</html>

<?php
// Thêm code mới vào index.php
require_once("staff.php"); // Bao gồm tệp staff.php

// Tạo một đối tượng nhanvat
$character = new character("Nguyen Van A", 5678);
echo "<h2>--- Add: Object Oriented PHP --</h2>";
echo "Full name: " . $nhanvat->get_fullname() . "<br/>";
echo "Country code: " . $nhanvat->get_countrycode() . "<br/>";

// Tạo một đối tượng nhanvien
$staff = new staff("Nguyen Van B", 1234, "Guard");
echo "<h2>---Staff--</h2>";
echo "Mã nhân viên: " . $staff->get_staffcode() . "<br/>";
echo "Họ tên: " . $staff->get_fullname() . "<br/>";
echo "Mã QG: " . $staff->get_countrycode() . "<br/>";
echo "Bộ phận: " . $staff->get_part() . "<br/>";
?>
