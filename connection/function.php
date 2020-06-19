<?php
class Contact{
    private $host = "localhost";
    private $user = "root";
    private $pass = "blablabla";
    private $db = "cs362";
    public $mysqli;

    public function __construct(){
        return $this->mysqli = new mysqli($this ->host, $this ->user, $this ->pass, $this ->db);
    }
    public function contact_us($data){
$fname = $data['fullname'];
$email = $data['email'];
$message = $data['message'];

$q = "INSERT INTO contact_us set cname = '$fname', cemail = '$email', cmessage = '$message'";
$data= $this->mysqli -> query($q);
        if($data==true){
            $body="One message received from Aigerim contact us. details are below..<br> cname = '$fname', cemail = '$email', cmessage = '$message'";
            return $this->sent_mail("aigerima.nurlanova@gmail.com", "Message received from Aigerim", $body);
        }
    }

    public function sent_mail($to, $subject, $body){
        $mailFromName="Aigerim";
        $mailFrom="aigerima.nurlanova@gmail.com";
/////////////////////////////////////////////////////////////
//Mail Header
        $mailHeader = 'MIME-Version: 1.0'."\r\n";
        $mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
        $mailHeader .= "Reply-To: $mailFrom\r\n";
        $mailHeader .= "Return-Path: $mailFrom\r\n";
//$mailHeader .= "CC: $mailCC\r\n";
//$mailHeader .= "BCC: $mailBCC\r\n";
        $mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
        $mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";
/////////////////////////////////////////////////////////////
//Email to Admin
        if(mail($to, $subject, $body, $mailHeader)){
            return true;
        }else{
            return false;
        }
    }
}
?>