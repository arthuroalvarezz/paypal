<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContacConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    protected $contact;
    protected $name;
    public $subject;
    protected $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
        if (isset($contact['asunto'])) {
          $this->subject = $contact['asunto'];
        } else {
          $new_contact = array('asunto'=>$contact['mobile-number']);
          $this->contact = array_merge($this->contact,$new_contact);
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to('contacto@innovatium.mx')
                    ->subject($this->subject)
                    ->view('index.emailMessage')
                    ->with(['contact' => $this->contact]);
    }
}
