<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidatureSpontaneeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $noms = "";
    public $emails = "";
    public $objets = "";
    public $cvs = "";
    public $lettres = "";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom,$email,$message,$cv,$lettre)
    {
        $this->noms=$nom;
        $this->emails=$email;
        $this->objets=$message;
        $this->cvs=$cv;
        $this->lettres=$lettre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emails)
                    ->subject('Demande d\'emploi' )
                    ->view('front.carriere.candidature')
                    ->attachFromStorage('public/pdf/' .$this->cvs ,'cv.pfd')
                    ->attachFromStorage('public/pdf/' .$this->lettres ,'lettre de motivation.pdf');
                    // ->attach(public_path('storage/pdf/' .$this->cvs))
                    // ->attach(public_path('storage/pdf/' .$this->lettres));
    }
}
