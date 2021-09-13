<?php 
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="contact";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $name=$data['name'];
        $phone=$data['phone'];
        $email=$data['email'];
        $message=$data['message'];
        $q="insert into contact_us set name='$name', phone='$phone', email='$email', message='$message'";
      return $data= $this->mysqli->query($q);
       
    }
    
   /* public function sent_mail($to,$subject,$body){
$mailFromName="HubBunch";
$mailFrom="info@hubbunch.com";
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
    }*/
}


?>