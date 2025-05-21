<?php
// Kiểm tra xem form đã được gửi chưa
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lấy dữ liệu từ form
    $name     = htmlspecialchars(trim($_POST["name"]));
    $phone    = htmlspecialchars(trim($_POST["phone"]));
    $service  = htmlspecialchars(trim($_POST["service"]));
    $date     = htmlspecialchars(trim($_POST["date"]));
    $note     = htmlspecialchars(trim($_POST["note"]));

    // Kiểm tra các trường bắt buộc
    if (empty($name) || empty($phone) || empty($service) || empty($date)) {
        echo "<h2 style='color:red; text-align:center;'>Vui lòng điền đầy đủ thông tin!</h2>";
        echo "<p style='text-align:center;'><a href='booking.php'>Quay lại trang đặt lịch</a></p>";
        exit;
    }

    // Tạo nội dung lưu vào file
    $booking_info = "Họ tên: $name\nSĐT: $phone\nDịch vụ: $service\nNgày hẹn: $date\nGhi chú: $note\n---------------------\n";

    // Ghi dữ liệu vào file booking.txt
    $file = fopen("booking.txt", "a");
    fwrite($file, $booking_info);
    fclose($file);

    // Giao diện cảm ơn
    echo "
    <!DOCTYPE html>
    <html lang='de'>
    <head>
        <meta charset='UTF-8'>
        <title>Vereinbaren Sie einen Beauty-Termin</title>
        <link rel='icon' href='images/favicon.png' type='image/png'>
        <link rel='stylesheet' href='styles.css'>
        <style>
            body {
                text-align: center;
                padding: 50px;
                background: #fff0f5;
                font-family: 'Poppins', sans-serif;
            }
            .success-box {
                background: #ffffff;
                padding: 40px;
                border-radius: 20px;
                box-shadow: 0 0 15px rgba(0,0,0,0.1);
                max-width: 500px;
                margin: auto;
            }
            .success-box h2 {
                color: #d63384;
                margin-bottom: 20px;
            }
            .success-box a {
                text-decoration: none;
                color: white;
                background: #ff69b4;
                padding: 12px 25px;
                border-radius: 10px;
                display: inline-block;
                margin-top: 20px;
                transition: background 0.3s ease;
            }
            .success-box a:hover {
                background: #c2185b;
            }
        </style>
    </head>
    <body>
        <div class='success-box'>
            <h2>🌸Terminvereinbarung erfolgreich!🌸</h2>
            <p>Danke <strong>$name</strong> haben unseren Diensten vertraut und sie genutzt.</p>
            <p>Wir werden Sie so schnell wie möglich zur Bestätigung kontaktieren.</p>
            <a href='index.html'>Zurück zur Startseite</a>
        </div>
    </body>
    </html>";
} else {
    // Nếu truy cập trực tiếp file này
    header("Location: booking.php");
    exit;
}
?>
