<?php

namespace App\Mail;

use App\Order;
use App\Text;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderSuccessEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $texts;

    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->texts = Text::where('type','email')->get()->pluck('text','text_id');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->texts['order_subject'])
            ->view('mails.orderSuccess');
    }
}
