$(document).ready(function() {
    $('#artForm').submit(function(event) {
        event.preventDefault();
        
        // Lấy dữ liệu từ form
        var formData = $(this).serialize();
        
        // Gửi dữ liệu đến process.php để xử lý
        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: formData,
            success: function(response) {
                alert('Dữ liệu đã được lưu thành công!');
                // Có thể thêm các hành động sau khi lưu dữ liệu thành công ở đây
            },
            error: function() {
                alert('Có lỗi xảy ra, vui lòng thử lại sau.');
            }
        });
    });
});
