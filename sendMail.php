<?php
require_once('PHPMail/src/PHPMailer.php');
$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // Sử dụng đăng nhập vào account
$mail->Host = 'mail.tulaidienchau.com'; // Thiết lập thông tin của SMPT theo dòng Outgoing của bước 1
$mail->Port = 465; // Thiết lập cổng gửi email của máyv theo dòng Sever của bước 1
$mail->Username = 'admin@tulaidienchau.com'; // SMTP account username mà bạn đã tạo trên host cPanel
$mail->Password = 'Adminmailpass'; // SMTP account password mà bạn đã tạo trên host cPanel

//Thiet lap thong tin nguoi gui va email nguoi gui
$mail->SetFrom('admin@tulaidienchau.com','tulaidienchau');

$mailTo;
if($_POST['email']!=null && $_POST['name']!=null){
    $mailTo=$_POST['email'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
} 
//Thiết lập thông tin người nhận
$mail->AddAddress($mailTo, $name);
// $mail->AddAddress(“emailnguoinhan@gmail.com”, “Admin VPS”);

//Thiết lập email nhận email hồi đáp
//nếu người nhận nhấn nút Reply
$mail->AddReplyTo('admin@tulaidienchau.com','Nguyen Hien');

/*=====================================
* THIET LAP NOI DUNG EMAIL
*=====================================*/

//Thiết lập tiêu đề
$mail->Subject = $name.' : LIÊN HỆ VỚI TÔI ';

//Thiết lập định dạng font chữ
$mail->CharSet = 'utf-8';

//Thiết lập nội dung chính của email
$body = 'Liên hệ với tôi: '.$name.'</br>'.'Số điện thoại: '.$phone.' </br> Ghi chú:';
$mail->Body = $body;

if(!$mail->Send()) {
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
echo 'Message sent!';
header('Location: index.php');
}