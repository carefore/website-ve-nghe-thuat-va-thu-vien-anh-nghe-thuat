<?php
// Kết nối đến MySQL
$servername = "localhost";
$username = "username"; // Thay thế bằng username MySQL của bạn
$password = "password"; // Thay thế bằng password MySQL của bạn
$dbname = "art_library";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$title = $_POST['title'];
$artist = $_POST['artist'];
$description = $_POST['description'];
$image = $_POST['image'];

// Chuẩn bị câu truy vấn SQL để chèn dữ liệu vào bảng
$sql = "INSERT INTO artworks (title, artist, description, image) VALUES ('$title', '$artist', '$description', '$image')";

// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được lưu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
