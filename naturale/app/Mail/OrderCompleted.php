<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderCompleted extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $statusText;

    public $name;

    public $subscribed;

    public function __construct($order, $statusText, $name, $subscribed)
    {
        $this->order = $order;
        $this->statusText = $statusText;
        $this->name = $name;
        $this->subscribed = $subscribed;
    }

    public function build()
    {
        return $this->subject('Order Confirmed: #' . $this->order->oid)
                    ->view('emails.order_completed');
    }
}