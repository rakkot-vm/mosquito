<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Setting;

class OrderSuccessEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sender@example.com')
            ->view('mails.orderSuccess')
            ->text('mails.orderSuccess_plain')
            ->with(
                [
                    'sender' => Setting::where('title','email_from')->first()->toArray()['title'],
                ])
            ->attach(public_path('/images').'/demo.jpg', [
                'as' => 'demo.jpg',
                'mime' => 'image/jpeg',
            ]);
    }
}
