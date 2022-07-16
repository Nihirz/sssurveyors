<?php

namespace App\Http\Controllers;

use App\Mail\Career;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Mail\ContactUs;
use App\Mail\Notification;
use Exception as GlobalException;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function MailSend(Request $request){
    
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        require '../vendor/autoload.php';
        $mail = new PHPMailer(true);

    try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'backteam@sssurveyors.com';                     //SMTP username
    // $mail->Password   = 'dtxbxglqjiangdgj';                               //SMTP password
    $mail->Password   = 'dtxbxglqjiangdgj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreplay@ssserveyours.com','SS-SURVEYOR' );
    // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('account@sssurveyors.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    $mail->addBCC('zalanihir8866@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    if(isset($_FILES['attachment'])) {
        // for ($i=0; $i < count($_FILES['attachment']['tmp_name']); $i++) {
            $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
        // }
    }
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mail From Modal';
    $mail->Body    = $message ;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } 
        return redirect()->back()->with('success', 'Mail sent successfully.');
    }
    public function ContactMail(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $details = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'msg' => $message,
        ];
        $data = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'msg' => $message,
        ];
        
        Mail::send('email.contact',$data,function($message){
            $message->to('account@sssurveyors.com');
            $message->bcc('zalanihir8866@gmail.com');
            $message->subject('This mail is from Contact');
        });
        return redirect()->back()->with('success','Mail sent successfully, We Contact You soon.');
    }

    public function ApointUs(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'number'=>'required',
            'message'=>'required',
        ]);
        $name = $request->name;
        $email = $request->email;
        $number = $request->number;
        $msg = $request->message;
        $details = [
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'msg' => $msg,
        ];
        $data = [
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'msg' => $msg,
        ];
        
        Mail::send('email.apointus',$data,function($message){
            $message->to('account@sssurveyors.com');
            $message->bcc('zalanihir8866@gmail.com');
            $message->subject('Apoint Us');
        });
        return redirect()->back()->with('success','Mail sent successfully, We Contact You soon.');
    }
    public function carrer(Request $request)
    {
        $this->validate($request,[
            'file'=>'required',
        ]);
        $file = $request->file('file');
        $data = [
            'file' => $file,
        ];
        
        Mail::to('account@sssurveyors.com')->bcc('zalanihir8866@gmail.com')->send(new Career($data));
        /* Mail::send('email.file',$data,function($message){
            $message->to('account@sssurveyors.com');
            $message->subject('Career');
            foreach ($file as $file){
                $message->attach($file);
            }
        }); */
        return redirect()->back()->with('success','Mail sent successfully, We Contact You soon.');
    }

}
