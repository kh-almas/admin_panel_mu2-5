<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Maintenance extends Mailable
{
    use Queueable, SerializesModels;
    public $m_link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($maintenance)
    {
        $this->m_link = config('app.url').'/'.$maintenance;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.maintenance');
    }
}
