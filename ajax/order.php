<?require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');

$mail = new PHPMailer(); 
$mail->From = "no-replay@admin.ru";   
$mail->FromName = "no-replay"; 
$mail->AddAddress('sindicat61@yandex.ru');  // кому 
$mail->CharSet = 'UTF-8'; 
$mail->Subject = 'Заявка с сайта'; 
$mail->Body = implode("\n", $_POST);

if($_FILES['uploaded_file']['size'] < 10485760){
	$file_to_attach = $_FILES['uploaded_file']['tmp_name'];
	
	$allowed_filetypes = array('.jpg','.jpeg','.gif','.png'); 
	$ext = substr($_FILES['uploaded_file']['name'], strpos($_FILES['uploaded_file']['name'],'.'), strlen($_FILES['uploaded_file']['name'])-1);
	
	if(in_array($ext,$allowed_filetypes)){
		$mail->AddAttachment($file_to_attach , $_FILES['uploaded_file']['name']);
	}
}
//отправить 
if($mail->Send()){ 
	echo 'Отправлено';
	@unlink($_FILES['uploaded_file']['tmp_name']);
}