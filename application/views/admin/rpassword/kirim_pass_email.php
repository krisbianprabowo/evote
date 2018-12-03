<?php
$test = $this->phpmailer_library->load();
$objMail = new PHPMailer\PHPMailer\PHPMailer();
// Konfigurasi SMTP
$objMail->isSMTP();
$objMail->Host = 'smtp.gmail.com';
$objMail->SMTPAuth = true;
$objMail->Username = 'tkabawirobrajan2@gmail.com';
$objMail->Password = 'admintkaba2';
$objMail->SMTPSecure = 'tls';
$objMail->Port = 587;
$objMail->setFrom('tkabawirobrajan2@gmail.com','Admin Web TK ABA 2');
$objMail->addReplyTo('tkabawirobrajan2@gmail.com','Admin Web TK ABA 2');
// Menambahkan penerima
$objMail->addAddress('wumbo.wo4@gmail.com');
// Subjek email
$objMail->Subject = 'Reset Password Admin Telah Berhasil ';
// Mengatur format email ke HTML
$objMail->isHTML(true);

$link =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/profiletk/admin/UNWE6IEW3H";
// Konten/isi email
$objMailContent = "<h3>Reset Password Telah Berhasil Dilakukan, Silahkan Menggunakan Password Baru Dibawah Ini :</h3>
    <p>Password baru : <b>".$pass."</b> <br><br>
 	Silahkan Login dengan menggunakan password baru yang telah diberikan. Anda diharapkan untuk mengubah kembali password di dalam dashboard Admin Web Profile dengan menggunakan karakter yang mudah diingat! <br>
 	Login Disini : <a href='".$link."'>".$link."</a>
    </p>"  ;
$objMail->Body = $objMailContent;
// Kirim email

if(!$objMail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $objMail->ErrorInfo;
}else{
	$this->session->set_flashdata('info','<div class="m-alert alert alert-success alert-dismissible fade show mt-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><h5><i class="la la-check-circle-o" style="font-size:1.55rem"></i></i> Reset Password Telah Berhasil !<br>
		Silahkan Check Email Anda Kembali Untuk Melihat Password Anda Yang Baru </h5></div>');
    redirect(site_url('admin/UNWE6IEW3H'));
}