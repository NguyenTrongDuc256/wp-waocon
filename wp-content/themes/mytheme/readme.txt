=== mytheme ===

Để chạy được web bạn cần cài:
1. Xampp 8.0.25 https://www.apachefriends.org/download.html
2. 

Sau khi cài xong bạn cần cấu hình domain trong xampp, để cấu hình bạn làm theo các bước sau:
- Mở file C:\xampp\apache\conf\extra\ ( ổ C: là vị trí bạn lưu thư mục chứa xampp ).
- Tìm đến file httpd-vhosts.conf rồi mở lên.
    Sau đó chèn thêm đoạn dưới đây vào cuối file httpd-vhosts.conf để khai báo thêm domain thachpham.com.

    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/thachpham"
        ServerName thachpham.com
    </VirtualHost>
    DocumentRoot: Đường dẫn của thư mục mà bạn muốn domain ảo trỏ về.
    ServerName: Domain ảo đã khai báo trong file hosts mà bạn muốn thêm vào localhost.
