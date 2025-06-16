<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DevisMail extends Mailable
{
    use Queueable, SerializesModels;

    public $noms = "";
    public $emails = "";
    public $objets = "";
    public $tels = "";
    public $villes = "";
    public $entreprises = "";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom,$email,$message,$tel,$ville,$entreprise)
    {
        $this->noms=$nom;
        $this->emails=$email;
        $this->objets=$message;
        $this->tels=$tel;
        $this->villes=$ville;
        $this->entreprises=$entreprise;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emails)
                    ->subject('Demande de devis' )
                    ->view('front.produit.devis');
    }
}
