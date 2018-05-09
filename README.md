# OJ CLONE
## HOW IT WORK
OJ CLONE là một project nhỏ giúp mình hiểu rõ cơ chế chấm bài trên các trang như codeforce, oj, spoj,...
</br>
Bất cứ cương trình nào cũng vậy, cần phải có trình biên dịch biên dịch và build chương trình. Ở đây mình sử dụng trình biên dịch g++ đê complie bài toán
</br>
Nếu bạn chưa cài đặt trình biên dịch này trên máy chủ. Gõ 
```
sudo apt-get install g++
```
Project trên sử dụng hàm exec trên php để thực hiện giao tiếp dòng lệnh và lấy kết quả sau đo so sánh ở testcase trong file problem/result/result.php
</br>
## INSTALL
+ Cài đặt trình biên dịch g++ nếu chưa cài
+ Up lên VPS hay hosting
+ Bạn cần cấp quyền ghi cho 2 file input.txt trong /problem/result và tất cả file trong thư mục upload
##TESTCASE
Để hệ thống có thể chấm điểm thì bộ test đóng vài trò quan trọng trong việc đảm bảo tính xác thực của bài toán. Vì vậy nên cân nhác bộ test để bài toán có thể đúng trong mọi trường hợp. Bộ test này phải do người quản trị đặt theo đúng yêu cầu bài toán
</br>
À xíu quên: Bộ test này nằm trong thư mục problem/result/result.php được lưu trong mảng cùng tên
</br>
Note: Dùng \n để xuống dòng
## BUG AND FEATURE 
Vì đây là một project nhỏ mang tính demo nên tác giả sẽ không hổ trợ để phát triển
<br>
Không khuyến khích sử dụng mã nguồn này làm dự án thực tế vì còn nhiều yếu điểm mang tính chết người như: Chưa xử lí sâu trong việc bảo mật upload file; file mã nguồn người dùng phải chứa chuỗi int main(){ theo đúng định dạng thì mới chạy đúng; tài liệu phải được nhúng từ google drive
### Thông tin tác giả
Tên: Trần Đức Ý
email: ducy23061999.ghetdoi@gmail.com
Liên hệ FB: [Here](https://www.facebook.com/Tranducy1999)

