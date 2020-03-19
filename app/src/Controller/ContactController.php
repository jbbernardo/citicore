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


        // switch ($this->postFlag) {
        //     // Sending
        //     case 1: break;
        // }       

        // if(!empty(count($this->errors) > 0)) {
        //     $this->returnEcho(0, 'Error');

        //     return false;
        // }
 
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

            $mail = new PHPMailer(true);  

            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->Host = 'email.praxxys.ph';
            $mail->Username = 'mark.praxxys';
            $mail->Password = '5xRaJCyQ6ddWRTeR';
            $mail->Port = 587;

            $mail->setFrom('no-reply@praxxys.ph', 'F-Tech Inquiry');

            // Add in each recipient to the "TO"
            foreach ($recipients as $recipient) {
                $mail->addAddress($recipient, $recipient);
            }

            $mail->isSMTP();
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;

            $mail->send();

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

}