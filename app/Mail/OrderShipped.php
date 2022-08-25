<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $info;
    public $def_url;

    /**
     * Create a new message instance.
     *
     * @param  $info
     *
     */
    public function __construct($request)
    {
        $this->info = $request;
        $this->def_url = 'daytodays.com';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.shipped')
            ->subject($this->info->subject)
            ->from('noreply@domain.com','Sender name');
    }
}
