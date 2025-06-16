<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidatureMail extends Mailable
{
    use Queueable, SerializesModels;

    public $noms = "";
    public $emails = "";
    public $objets = "";
    public $subjects = "";
    public $cvs = "";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom,$email,$titre,$message,$cv)
    {
        $this->noms=$nom;
        $this->emails=$email;
        $this->objets=$message;
        $this->subjects=$titre;
        $this->cvs=$cv;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emails)
                    ->subject('Condidature pour le poste:'. $this->subjects)
                    ->view('front.carriere.candidature')
                    ->attachFromStorage('public/pdf/' .$this->cvs ,'cv.pfd');
                    //->attachFromStorage('public/pdf/' .$this->lettres ,'lettre de motivation.pdf');
    }
}
