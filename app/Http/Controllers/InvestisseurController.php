<?php

namespace App\Http\Controllers;

use App\Models\Investisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Rules\ReCaptcha;
use App\Mail\InvestisseurMail;
use Illuminate\Support\Facades\Mail;

class InvestisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investisseur=Investisseur::orderBy('created_at','desc')->paginate(12);
        return view('front.partenaire.devenirPartenaire');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        $date = Date::now();
        $investisseur=new Investisseur();
        $investisseur->raison_sociale=$request->raison_sociale;
        $investisseur->email=$request->email;
        $investisseur->pays=$request->pays;
        $investisseur->ville=$request->ville;
        $investisseur->adresse=$request->adresse;
        $investisseur->phone=$request->phone;
        $investisseur->motivation=$request->motivation;
        $investisseur->dates=$date;
        $investisseur->save();
        if ($investisseur) {
            $email=$request->email;
            $nom=$request->raison_sociale;
            $pays=$request->pays;
            $ville=$request->ville;
            $site=$request->phone;
            $lieu=$request->adresse;
            $sujets=$request->pays;
            $messages=$request->motivation;
            $this->Mail($nom,$email,$sujets,$messages,$ville,$lieu);
            return redirect()->back()->with('success','Message has been sent!');
        } else {
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
        
    }

    public function Mail($nom,$email,$sujets,$messages,$ville,$lieu)
    {
        $email=$email;
        $nom=$nom;
        $objet=$sujets;
        $message=$messages;
        $ville=$ville;
        $lieu=$lieu;
        Mail::to('contact@saconets.uahj.org')->send(new InvestisseurMail($nom,$email,$objet,$message,$ville,$lieu));
    }

    public function SendMail($nom,$email,$message,$sujet)
    {
            $job=Emploi::find($id);
            $email=$email;
            $nom=$nom;
            $sujet= $sujet;
            $message=$message;

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
                
                //return back()->with("error"," Mailer Error: {$mail->ErrorInfo}.");
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Investisseur $investisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Investisseur $investisseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investisseur $investisseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investisseur  $investisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investisseur $investisseur)
    {
        //
    }
}
