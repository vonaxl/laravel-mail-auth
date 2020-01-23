<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailDelete extends Mailable
{
    use Queueable, SerializesModels;

    private $msg;
    private $title;
    public function __construct($msg, $elemController)
    {
        $this-> msg = $msg;
        $this-> title= $elemController;
    }

    public function build()
    {
        $outputMsg = $this->msg;
        $outputTitle = $this->title;
        return $this->view('mails.MailDelete', compact('outputMsg','outputTitle'));
    }
}
