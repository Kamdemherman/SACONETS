<?php

namespace App\Http\Controllers;

use App\Models\CandidatureSpontanee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Mail;
use App\Mail\CandidatureSpontaneeMail;


class CandidatureSpontaneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meta_image="";
        $meta_titre="candidature spontanée";
        return view('front.carriere.candidatureSpontanee')->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
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
            'name' => 'required|min:5',
            'email' => 'required|email',
            'ville' => 'required',
            'adresse' => 'required',
            'objet' => 'required',
            'cv' => 'required',
            'lettre' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
         $date = Date::now();
        $candidature=new CandidatureSpontanee();
        $candidature->name=$request->name;
        $candidature->email=$request->email;
        $candidature->ville=$request->ville;
        $candidature->adresse=$request->adresse;
        $candidature->objet=$request->objet;
        if (request()->file('cv')!=null) {
            $cv=request()->file('cv');
            $cvName=$cv->getClientOriginalName();
            $cvName=time().'_'.$cvName;
            $path=request()->file('cv')->storeAs('public/pdf',$cvName);
            //$cv->move(public_path('/pdf'),$cvName);
            $candidature->cv=$cvName;
        }else {
            $candidature->cv=null;
        }
        if (request()->file('lettre')!=null) {
            $lettre=request()->file('lettre');
            $lettreName=$lettre->getClientOriginalName();
            $lettreName=time().'_'.$lettreName;
            $path=request()->file('lettre')->storeAs('public/pdf',$lettreName);
            $candidature->lettre=$lettreName;
        }else {
            $candidature->lettre=null;
        }

        //dd($cvName);
        $candidature->dates=$date;
        $candidature->save();
        if ($candidature) {
            $nom=$request->name;
            $email=$request->email;
            $objet=$request->objet;
            $this->Mail($nom,$email,$objet,$cvName,$lettreName);
            return back()->with('success','Message has been sent');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        } 
    }

    public function Mail($nom,$email,$objet,$cvs,$lettres)
    {
        $email=$email;
        $nom=$nom;
        $message=$objet;
        $cv=$cvs;
        $lettre=$lettres;
        Mail::to('contact@saconets.uahj.org')->send(new CandidatureSpontaneeMail($nom,$email,$message,$cv,$lettre));
    }

    public function SendMail($nom,$email,$message,$cvs,$lettres,$id)
    {
            $job=Emploi::find($id);
            $email=$email;
            $nom=$nom;
            $sujet='Candidature au poste de' . $job->titre;
            $message=$message;
            $cv=$cvs;
            $lettre=$lettres;

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
                $mail->addAttachment(public_path($cv));         //Add attachments
                if ($lettre !== '') {
                    $mail->addAttachment(public_path($lettre)); 
                }
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CandidatureSpontanee  $candidatureSpontanee
     * @return \Illuminate\Http\Response
     */
    public function show(CandidatureSpontanee $candidatureSpontanee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CandidatureSpontanee  $candidatureSpontanee
     * @return \Illuminate\Http\Response
     */
    public function edit(CandidatureSpontanee $candidatureSpontanee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CandidatureSpontanee  $candidatureSpontanee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CandidatureSpontanee $candidatureSpontanee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CandidatureSpontanee  $candidatureSpontanee
     * @return \Illuminate\Http\Response
     */
    public function destroy(CandidatureSpontanee $candidatureSpontanee)
    {
        //
    }
}
