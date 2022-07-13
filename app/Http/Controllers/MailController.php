<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function mailTest(Request $request){
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
           // Email server settings
         $mail->SMTPDebug = 0;
         $mail->isSMTP();
         $mail->Host = 'mail.pat.co.tz';             //  smtp host
         $mail->SMTPAuth = true;
         $mail->Username = 'info@pat.co.tz';   //  sender username
         $mail->Password = 'Christ111!-Francis';       // sender password
         $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
         $mail->Port = 465;                          // port - 587/465

         $mail->setFrom('info@pat.co.tz', 'PAT');
         $mail->addAddress($request->email);

         $mail->isHTML(true);                // Set email content format to HTML

         $mail->Subject = 'Welcome to PAT';
         $mail->Body    = 'Welcome somebody';

         if( !$mail->send() ) {
            return response()->json('Mail failed to be sent', 400);
        }
        
        else {
            return response()->json('Mail sent!', 200);
        }

        } catch (Exception $e) {
            return response()->json('Mail failed to be sent', 400);
        }
    }

    public function sendMessage($subject,$recieverEmail,$body){
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
           // Email server settings
           $mail->SMTPDebug = 0;
         $mail->isSMTP();
         $mail->Host = 'mail.pat.co.tz';             //  smtp host
         $mail->SMTPAuth = true;
         $mail->Username = 'info@pat.co.tz';   //  sender username
         $mail->Password = 'Christ111!-Francis';       // sender password
         $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
         $mail->Port = 465;                          // port - 587/465
        
         $mail->setFrom('info@pat.co.tz', 'PAT');
         $mail->addAddress($recieverEmail);

         $mail->isHTML(true);                // Set email content format to HTML

         $mail->Subject = $subject;
         $mail->Body    = $body;

         if( !$mail->send() ) {
            return response()->json('Mail failed to be sent', 400);
        }
        
        else {
            return response()->json('Mail sent!', 200);
        }

        } catch (Exception $e) {
            return response()->json('Mail failed to be sent', 400);
        }
    }

}
