<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderStatusUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $statusText;

    public function __construct($order, $statusText)
    {
        $this->order = $order;
        $this->statusText = $statusText;
    }

    public function build()
    {
        return $this->subject('Order Status Update: #' . $this->order->oid)
                    ->view('emails.order_status');
    }
}