<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public string $name;
    public string $email;
    public string $bady;
    public function __construct($name, $email, $bady)
    {
        $this->name=$name;
        $this->email=$email;
        $this->bady=$bady;


    }

    /**
     * Build the message.
     *
     * @return $thisz
     */
    public function build()
    {


         return $this->subject('contact mail de yasminemeddah97@gmail.com')
         ->view('email.contact')
         ->with('name',$this->name)
         ->with('name',$this->email)
         ->with('bady',$this->bady);
    }
}
