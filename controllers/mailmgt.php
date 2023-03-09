<?php
    use \PHPMailer\PHPMailer\PHPMailer;
    use \PHPMailer\PHPMailer\SMTP;
    use \PHPMailer\PHPMailer\Exception;
    $folder = $_SERVER['DOCUMENT_ROOT']."/login";
    
    require_once("$folder/vendor/autoload.php");

    class Mailer 
    {
        public function __construct($to = array('azubuogufavour1@gmail.com'),  $subject, $body, $altBody = "", $attachments = []){
            $this->to = $to;
            // $this->replyTo = $replyTo;
            $this->body = $body;
            $this->subject = $subject;
            $this->altBody = $altBody;
            $this->attachments = $attachments;
            $this->error = false;
            $this->cause = '';
        }

        function sendMail(){
            $mail = new PHPMailer(true);
            try{
                $mail->isSMTP();
                $mail->SMTPAuth = true;
                $mail->Host = 'smtp.gmail.com';  
                $mail->Username = 'azubuogufavour1@gmail.com';
                $mail->Password = 'ayfmkojvktnzczca';
                $mail->Port = 465;                    
                $mail->SMTPSecure = "ssl";
                $mail->Subject = $this->subject;
                $mail->setFrom("azubuogufavour1@gmail.com", "login Cooperative");
                // $mail->setFrom($this->from);
                // $mail->addAddress("frederickjhonnes@gmail.com", "Frederick Jones");
                $mail->addBCC("azubuogufavour1@gmail.com", "login Mail");
                if(gettype($this->to) != "string"){
                    foreach ($this->to as $key => $copyMail) {
                        $mail->addAddress($copyMail);
                    }
                }else{
                    $mail->addAddress($this->to);
                }
                $mail->addReplyTo("info@login.com", "login Cooperative");
                $mail->isHTML(true);
                // $mail->msgHTML = "<strong>New login Message from Angela Jones</strong><div>$query</div>";
                $mail->Body = $this->body;
                $mail->AltBody = $this->altBody;
                if(count($this->attachments)){
                    foreach ($this->attachments as $key => $file) {
                        $mail->addAttachment("$file");
                    }
                }
                if($mail->send()){
                }
                $mail->smtpClose();
                return true;
            }
            catch(Exception $e){
                $this->error = true;
                $this->cause = $mail->ErrorInfo;
                return false;
            }
        }
    }

?>