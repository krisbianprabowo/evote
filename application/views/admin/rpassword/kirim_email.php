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
$objMail->Subject = 'Konfirmasi Aksi Reset Password Admin Web Profile TK ABA Wirobrajan 2';
// Mengatur format email ke HTML
$objMail->isHTML(true);
$link =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/profiletk/admin/konfirmasi_reset/".$token->token;
// Konten/isi email
$objMailContent = "<h3>Anda baru-baru ini memohonan untuk melakukan perubahan password pada salah satu akun admin dengan detail berikut :</h3>
    <p>Username :".$token->username." <br><br>
 	Silahkan <b>TEKAN</b> Link di bawah ini untuk mengkonfirmasi pengubahan password anda: <br>
 	<a href='".$link."'>".$link."</a>
    </p>
    <p>Jika anda tidak merasa bahwa anda melakukan hal ini, abaikan perintah dalam email ini.<br>

    <i style='color:red'>Mohon Diingat : Link Konfirmasi hanya berlaku hingga 30 menit setelah anda melakukan pengajuan!</i></p>";
$objMail->Body = $objMailContent;
// Kirim email

if(!$objMail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $objMail->ErrorInfo;
}else{
    $this->session->set_flashdata('info','<div class="m-alert alert alert-success alert-dismissible fade show mt-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><h5><i class="la la-check-circle-o" style="font-size:1.55rem"></i></i> Email Konfirmasi Permohonan Password Telah Dikirim !<br>
		Silahkan Check Email Anda Untuk Mengkonfirmasi Reset Password Anda </h5></div>');
    redirect(site_url('admin/UNWE6IEW3H'));
}