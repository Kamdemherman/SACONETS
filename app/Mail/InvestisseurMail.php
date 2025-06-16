<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvestisseurMail extends Mailable
{
    use Queueable, SerializesModels;
    public $noms = "";
    public $emails = "";
    public $objets = "";
    public $messages = "";
    public $villes = "";
    public $lieus = "";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom,$email,$objet,$message,$ville,$lieu)
    {
        $this->noms=$nom;
        $this->emails=$email;
        $this->objets=$objet;
        $this->messages=$message;
        $this->villes=$ville;
        $this->lieus=$lieu;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emails)
                    ->subject('Demande d\' adhésion au groupe d\' investisseur et/ou partenaire de:' . $this->noms.'du(de la)' .$this->objets)
                    ->view('front.partenaire.demande');
    }
}
