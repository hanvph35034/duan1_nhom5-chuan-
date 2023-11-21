<?php
// them tai khoan / dang ky
function insert_taikhoan($ten, $tendangnhap, $pass, $email, $sdt, $diachi)
{
    $sql = "INSERT INTO khachhang(ten_khach_hang, ten_dang_nhap, mat_khau, email_khach_hang, sdt_khach_hang, dia_chi_khach_hang) VALUES('$ten', '$tendangnhap', '$pass', '$email', '$sdt', '$diachi');";
    pdo_execute($sql);
}




// dang nhap
// session_start();
function dangnhap($ten_dang_nhap, $mat_khau)
{
    $sql = "SELECT * from nguoidung where ten_dang_nhap='$ten_dang_nhap' and mat_khau='$mat_khau' and trang_thai = '0';";
    $taikhoan = pdo_query_one($sql);

    // if($taikhoan != false){
    //     $_SESSION['user'] = $user;
    // }else{
    //     // return 'Thong tin tai khoan khong ton tai';
    //     $taikhoan = 'Thong tin tai khoan khong ton tai';
    // }
    // // var_dump($taikhoan);
    return $taikhoan;
}

// dang xuat
function dangxuat()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}


// function update_taikhoan($id, $user, $pass, $email, $address, $tel){
//     $sql = "update taikhoan set user = '$user', pass = '$pass', email = '$email', address = '$address', tel = '$tel' where id = '$id'";
//     pdo_execute($sql);
// }

// sua tai khoan
function update_taikhoan($id, $user, $email, $sdt, $pass, $address, $img)
{
    if ($img != '') {
        $sql = "update taikhoan set user='$user', email='$email', sdt='$sdt', pass='$pass', address='$address', img='$img' where id='$id';";
    } else {
        $sql = "update taikhoan set user='$user', email='$email', sdt='$sdt', pass='$pass', address='$address' where id='$id';";
    }
    pdo_execute($sql);
}

function suatk($id, $user, $email, $sdt, $pass, $address, $img)
{
    if ($pass != '' && $img != '') {
        $sql = "update taikhoan set user='$user', email='$email', sdt='$sdt', pass='$pass', address='$address', img='$img' where id='$id';";
    } else if ($pass == '' && $img == '') {
        $sql = "update taikhoan set user='$user', email='$email', sdt='$sdt', address='$address' where id='$id';";
    } else if ($pass == '' && $img != '') {
        $sql = "update taikhoan set user='$user', email='$email', sdt='$sdt', address='$address', img='$img' where id='$id';";
    } else if ($pass != '' && $img == '') {
        $sql = "update taikhoan set user='$user', email='$email', sdt='$sdt', pass='$pass', address='$address' where id='$id';";
    }
    pdo_execute($sql);
}

// xoa tai khoan
function delete_khachhang1($id)
{
    $sql = "delete from taikhoan where id = '$id'";
    pdo_execute($sql);
}

// gui email de lay lai mk
function sendMail($email)
{
    $sql = "select * from taikhoan where email = '$email'";
    $taikhoan = pdo_query_one($sql);
    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
        return 'đúng email';
    } else {
        return "sai email";
    }
}

// lay lai mk
function sendMailPass($email, $username, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '55d6e334108d60';                     //SMTP username
        $mail->Password   = 'e92096a69c53a6';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('duanmau2023@example.com', 'duanmau2023');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body    = 'Mat khau cua ban la: ' . $pass;

        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
