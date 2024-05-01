<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RepondreMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $nom;
    public $prenom;
    public $sujet;
    public $message;
    public $sujetUser;

    public function __construct($nom,$prenom,$sujet,$message,$sujetUser)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->sujet=$sujet;
        $this->sujetUser=$sujetUser;
        $this->message=$message;
    }


    public function build()
    {
        return $this->subject($this->sujet)
                    ->view('emails.reponseContact');
    }


}
