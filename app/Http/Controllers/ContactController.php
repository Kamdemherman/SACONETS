<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Newsletter;
use App\Rules\ReCaptcha;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function index()
    {
        $meta_image="";
        $meta_titre="Contact";
        return view('front.contact')->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }
    public function Send(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'sujet' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        $email=$request->email;
        $nom=$request->name;
        $phone=$request->phone;
        $sujet=$request->sujet;
        $message=$request->message;

        //Load Composer's autoloader
        require base_path("vendor/autoload.php");
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = env('EMAIL_HOST');                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = env('EMAIL_USERNAME');                       //SMTP username
            $mail->Password   = env('EMAIL_PASSWORD');                                 //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->CharSet = 'UTF-8';                                   //Format d'encodage à utiliser pour les caractères
        
            //Recipients
            $mail->setFrom($email, $nom);
            $mail->addAddress('contact@saconets.uahj.org');     //Add a recipient
            $mail->addAddress('contact@saconets.uahj.org');
            $mail->addReplyTo('contact@saconets.uahj.org', 'Information');
/*             $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name */
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $sujet;
            $mail->Body    = $message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            return back()->with('success','Message has been sent');
        } catch (Exception $e) {
            
            return back()->with("error"," Mailer Error: {$mail->ErrorInfo}.");
        }
    }

    public function Subscrire(Request $request)
    {
        try {
            if (Newsletter::isSubscribed($request->email)) {
                 return redirect()->back()->with("errors","Email is already subscribed");
            }else{
                Newsletter::subscribe($request->email);
                return redirect()->back()->with("successs","Email subscribed");
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with("errors",$th->getMessage());
        }
    }

}
