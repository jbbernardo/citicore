<?php

use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use SilverStripe\View\ArrayData;

require '../vendor/autoload.php';

class ContactController extends Controller {

    private $clientName;
    private $clientEmail;
    private $clientSubject;
    private $clientMessage;

    private $errors;
    private $captcha;

    public function init() {
        parent::init();
        // print_r('Init...');
        if(isset($_POST['postFlag']) && is_numeric($_POST['postFlag'])) {

            $postFlag = $_POST['postFlag'];
            // print_r('PostFlag : '$_POST['postFlag']);
            switch ($postFlag) {
            
                // Sending
                case 1:
                        
                    if($this->setPostVars() && $this->checkPostVars()) {
                        // print_r('Sending...');
                        $this->setReceipients();
                        $this->sendEmail();
                        $this->sendConfirmationEmail();
                        $this->writeRecord();
                        $this->returnEcho(1, 'Sending successful!');
                    }

                break;
            }
        }

        exit();
    }

    private function setPostVars() {
        // print_r('Set post...');
    
        if(isset($_POST['clientName'])) {
            $this->clientName = $_POST['clientName'];
        }

        if(isset($_POST['clientEmail'])) {
            $this->clientEmail = $_POST['clientEmail'];
        }

        if(isset($_POST['clientMessage'])) {
            $this->clientMessage = $_POST['clientMessage'];
        }
        if(isset($_POST['g-recaptcha-response'])){
            $this->captcha=$_POST['g-recaptcha-response'];
        }

        return true;

    }

    private function checKPostVars() {
        // print_r('Check post...');

        if(empty($_POST['clientName'])) {
            $this->errors['clientName'] = array(
                'error' => 'Please input your Full name'
            );
        }

        if(empty($_POST['clientEmail'])) {
            $this->errors['clientEmail'] = array(
                'error' => 'Please input your email address'
            );
        }

        if(empty($_POST['clientMessage'])) {
            $this->errors['clientMessage'] = array(
                'error' => 'Please input your message'
            );
        }


        if(empty($_POST['g-recaptcha-response']) ) {
            $this->errors = 'Please check the the captcha form';
        }

        $secretKey = "6LdeXuIUAAAAAIKzIoURa-CcHjh7sYy75eaoSiOZ";
        $response = $this->postRecaptcha($secretKey, $this->captcha);

        // should return JSON with success as true
        if($response->success) {
        } else {
            $this->errors = 'CAPTCHA verification failed.';
        }

        switch ($this->postFlag) {
            // Sending
            case 1: break;
        }

        if(!empty(count($this->errors) > 0)) {
            $this->returnEcho(0, explode(", ", $this->errors));

            return false;
        }

        return true;

    }

    private function setReceipients() {
        $clientEmail = ContactPage::get()->First()->EmailRecipient;
        $this->receipient = $clientEmail;
    }

    private function writeRecord() {
        $duplicate = new Inquiry();
        $duplicate->clientName = $this->clientName;
        $duplicate->clientEmail = $this->clientEmail;
        $duplicate->clientMessage = $this->clientMessage;
        $duplicate->write(); 
    }

    private function sendEmail() {
        // print_r('Email...');

        $to = explode(',', $this->receipient);
        // Enables HTML Text
        // $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

        $subject = $this->clientSubject .' Citicore CESI Inquiry';

        $message = $this->getEmailTemplate();

        $this->sendPHPMailer($to, $subject, $message);

    }

    private function sendConfirmationEmail() {
        // print_r('Email confirmation...');
        
        $recipients = explode(',', $this->email);
        $subject = $this->subject .'Citicore CESI: This is to notify you that we have succesfully received your message.';
        
        // Enables HTML Text
        // $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

        $message = $this->getEmailTemplate();

        $this->sendPHPMailer($recipients, $subject, $message);
    }

    private function getEmailTemplate() {

        $arrayData = new ArrayData(array(
            'clientName' => $this->clientName,
            'clientEmail' => $this->clientEmail,
            'clientSubject' => $this->clientSubject,
            'clientMessage' => $this->clientMessage,
        ));

        return $arrayData->renderWith('ContactTemplate');
    }

    private function sendPHPMailer($recipients, $subject, $body) {
        // print_r('Emailing...' . $recipients);
        try {

            $mail = new PHPMailer;
            // Set PHPMailer to use the sendmail transport
            $mail->isSendmail();
            //Set who the message is to be sent from
            $mail->setFrom('no-reply@citicore-cesi.com', 'www.citicore-cesi.com');
            //Set an alternative reply-to address
            $mail->addReplyTo('no-reply@citicore-cesi.com', 'www.citicore-cesi.com');
            //Set who the message is to be sent to
            foreach ($recipients as $recipient) {
                $mail->addAddress($recipient, $recipient);
            }
            //Set the subject line
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;

            $mail->send();
            //send the message, check for errors
            if (!$mail->send()) {
                echo 'Mailer Error: '. $mail->ErrorInfo;
            } else {
                //echo 'Message sent!';
            }

            // print_r('Emailing done...');

            // print_r('Emailing done...');

        } catch (phpmailerException $e) {
            // print_r($e->errorMessage());
        } catch (Exception $e) {
            // print_r($e->getMessage());
        }
    }

    private function returnEcho($status, $message = 'Sent') {

        echo json_encode(array(
            'status' => $status,
            'message' => $message
        ));
    }

    private function postRecaptcha($secret, $response) {

        $data = array(
            'secret' => $secret,
            'response' => $response
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        return  json_decode(curl_exec($verify));

    }

}