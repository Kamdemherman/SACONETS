<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Mail;
use App\Rules\ReCaptcha;
use App\Mail\CandidatureMail;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job=Emploi::orderBy('created_at','desc')->paginate(12);
        $meta_image="";
        $meta_titre="Emplois";
        return view('front.carriere.job')->with('jobs',$job)
                ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
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
    public function store(Request $request, $titre)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'ville' => 'required',
            'adresse' => 'required',
            'motivation' => 'required',
            'cv' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        $date = Date::now();
        $candidature=new Candidature();
        $candidature->name=$request->name;
        $candidature->email=$request->email;
        $candidature->ville=$request->ville;
        $candidature->adresse=$request->adresse;
        $candidature->motivation=$request->motivation;
        if (request()->file('cv')!=null) {
            $cv=request()->file('cv');
            $cvName=$cv->getClientOriginalName();
            $cvName=time().'_'.$cvName;
            $path=request()->file('cv')->storeAs('public/pdf',$cvName);
            $candidature->cv=$cvName;
        }else {
            $candidature->cv=null;
        }
       
        $candidature->emploi_id=$request->id;
        $candidature->dates=$date;
        $candidature->save();

        if ($candidature) {
            
            $email=$request->email;
            $nom=$request->name;
            $sujets=$titre;
            $message=$request->motivation;
            $cv=$cvName;
            $this->Mail($nom,$email,$sujets,$message,$cv);
            return back()->with('success','Message has been sent');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    public function Mail($nom,$email,$objet,$message,$cv)
    {
        $email=$email;
        $nom=$nom;
        $titre=$objet;
        $message=$message;
        $cv=$cv;
        Mail::to('contact@saconets.uahj.org')->send(new CandidatureMail($nom,$email,$titre,$message,$cv));
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
                
                //return back()->with("error"," Mailer Error: {$mail->ErrorInfo}.");
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job=Emploi::find($id);
        return view('front.carriere.form')->with('job',$job);
    }

    public function Formutaire($slug)
    {
        $job=Emploi::where('slug',$slug)->first();
        $meta_image=$job->image;
        $meta_titre=$job->titre_en;
        return view('front.carriere.formCandidature')->with('job',$job)
                ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=Emploi::find($id);
        return view('front.carriere.jobDetail')->with('job',$job);
    }

    public function editTitre($slug)
    {
        $job=Emploi::where('slug',$slug)->first();
        $meta_image=$job->image;
        $meta_titre=$job->titre_en;
        return view('front.carriere.jobDetail')->with('job',$job)
                                                ->with('meta_titre',$meta_titre)->with('meta_image',$meta_image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emploi $emploi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emploi $emploi)
    {
        //
    }
}
